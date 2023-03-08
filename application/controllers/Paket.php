<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Paket extends CI_Controller {

    public function __construct()
    {
     parent:: __construct();
     $this->load->model('Paket_m');
     $this->load->model('Outlet_m');
    //  if ($this->session->userdata('role') ==  'kasir') {
    //     echo "Error Unauthhorized";
    //     die;
    //    }
     if ($this->session->userdata('role') ==  'owner') {
        echo "Error Unauthhorized";
        die;
       }
    }

    public function get_paket($id_paket)
    {
        echo json_encode($this->db->get_where('tb_paket', ['id_paket' => $id_paket])->row_array());
    }

	public function index()
	{
        $data['judul'] = "Data Paket";
        $data['paket'] = $this->Paket_m->get_paket();

        $this->load->view('template/header',$data);
        $this->load->view('paket/index', $data);
        $this->load->view('template/footer',$data);
    }

    public function Tambah()
	{
        $valid = $this ->form_validation;

        $valid->set_rules('id_paket', 'id_paket', 'required');

        if ($valid->run()) {
            $this->Paket_m->insert($this->input->post());
            $this->session->set_flashdata('message', 'Berhasi Ditambahkan');
            redirect('paket', 'refresh');
        }

        $data['judul'] = "Tambah Data";
        $data['paket'] = $this->Paket_m->get_paket();
        $data['outlet'] = $this->Outlet_m->get_outlet();

        $this->load->view('template/header',$data);
        $this->load->view('paket/tambah', $data);
        $this->load->view('template/footer',$data);
    }

    
    public function Ubah($id)
	{
        $valid = $this ->form_validation;

        $valid->set_rules('id_paket', 'id_paket', 'required');

        if ($valid->run()) {
            $this->Paket_m->update($this->input->post());
            $this->session->set_flashdata('message', 'Berhasi Diubah');
            redirect('paket', 'refresh');
        }

        $data['judul'] = "Ubah Data";
        $data['paket'] = $this->Paket_m->get_paket($id);
        $data['outlet'] = $this->Outlet_m->get_outlet();

        $this->load->view('template/header',$data);
        $this->load->view('paket/ubah', $data);
        $this->load->view('template/footer',$data);
    }

     
    public function hapus($id)
	{

        $this->db->delete('tb_paket', ['id_paket' => $id]);
        $this->session->set_flashdata('message', 'Berhasi Dihapus');
        redirect('paket', 'refresh');

    }
}
