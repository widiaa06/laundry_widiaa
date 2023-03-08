<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Member extends CI_Controller {

    public function __construct()
    {
     parent:: __construct();
     $this->load->model('Member_m');
    //  if ($this->session->userdata('role') ==  'kasir') {
    //     echo "Error Unauthhorized";
    //     die;
    //    }
     if ($this->session->userdata('role') ==  'owner') {
        echo "Error Unauthhorized";
        die;
       }
    }

	public function index()
	{
        $data['judul'] = "Data Member";
        $data['member'] = $this->Member_m->get_member();

        $this->load->view('template/header',$data);
        $this->load->view('member/index', $data);
        $this->load->view('template/footer',$data);
    }

    public function Tambah()
	{
        $valid = $this ->form_validation;
        
        $valid->set_rules('id_member', 'id_member', 'required');
        
        if ($valid->run()) {
            $this->Member_m->insert($this->input->post());
            $this->session->set_flashdata('message', 'Berhasi Ditambahkan');
            redirect('member', 'refresh');
        }

        $data['judul'] = "Tambah Data";
        $data['member'] = $this->Member_m->get_member();

        $this->load->view('template/header',$data);
        $this->load->view('member/tambah', $data);
        $this->load->view('template/footer',$data);
    }

    
    public function Ubah($id)
	{
        $valid = $this ->form_validation;

        $valid->set_rules('id_member', 'id_member', 'required');

        if ($valid->run()) {
            $this->Member_m->update($this->input->post());
            $this->session->set_flashdata('message', 'Berhasi Diubah');
            redirect('member', 'refresh');
        }

        $data['judul'] = "Ubah Data";
        $data['member'] = $this->Member_m->get_member($id);

        $this->load->view('template/header',$data);
        $this->load->view('member/ubah', $data);
        $this->load->view('template/footer',$data);
    }

     
    public function hapus($id)
	{
        $check = $this->db->get_where('tb_transaksi', ['id_member' => $id])->num_rows();
        if ($check > 0) {
            $this->session->set_flashdata('message', 'Gagal Dihapus');
            redirect('member', 'refresh');
        } else {
            $this->db->delete('tb_member', ['id_member' => $id]);
            $this->session->set_flashdata('message', 'Berhasi Dihapus');
            redirect('member', 'refresh');
        }
    }
}
