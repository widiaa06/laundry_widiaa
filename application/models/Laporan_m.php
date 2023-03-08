 <?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Laporan_m extends CI_Model {

   public function get_laporan($dari = '', $sampai = '', $id_paket = '', $id_outlet = '', $status_bayar = '')
   {
       if ($dari != '') {
           $this->db->where('DATE(tgl) >=', $dari);
           $this->db->where('DATE(tgl) <=', $sampai);
       }

       if ($id_paket != '') {
           $this->db->where('tb_paket.id_paket', $id_paket);
       }

       if ($id_outlet != '') {
           $this->db->where('tb_outlet.id_outlet', $id_outlet);
       }

       $this->db->select('
           DATE(tgl) as tgl,
           tb_outlet.nama as nama_outlet,
           tb_member.nama,
           nama_paket,
           harga,
           SUM(qty) as terjual,
           dibayar,
           harga * SUM(qty) as pendapatan
        ');
    
       $this->db->join('tb_member', 'id_member', 'left');
       $this->db->join('tb_outlet', 'id_outlet', 'left');
       $this->db->join('tb_detail_transaksi', 'id_transaksi', 'left');
       $this->db->join('tb_paket', 'tb_detail_transaksi.id_paket = tb_paket.id_paket', 'left');
       $this->db->group_by('tb_paket.id_paket, tb_outlet.id_outlet, DATE(tgl)');


       if ($this->session->userdata('role' == 'kasir')) {
           $this->db->where('id_user', $this->session->userdata('id_user'));
       }
       
       
       if ($this->session->userdata('role') == 'kasir') {
            $this->db->where('id_user', $this->session->userdata('id_user'));
        }
       
       if ($status_bayar != '') {
           //yang belum bayar aja
           $this->db->where('dibayar', $status_bayar);
       }

       return $this->db->get('tb_transaksi')->result_array();

    }
}
