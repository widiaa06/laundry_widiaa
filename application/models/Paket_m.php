 <?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Paket_m extends CI_Model {

   public function get_paket($id = '')
   {

        if($id == '') {
                   $this->db->join('tb_outlet', 'id_outlet', 'left');
            return $this->db->get_where('tb_paket')->result_array();
        }else{
                   $this->db->join('tb_outlet', 'id_outlet', 'left');
            return $this->db->get_where('tb_paket', ['id_paket' => $id])->row_array();
        }
   }

   public function insert($post) {
       $this->db->insert('tb_paket', [
           'id_paket' => $post['id_paket'],
           'id_outlet' => $post['id_outlet'],
           'nama_paket' => $post['nama_paket'],
           'jenis' => $post['jenis'],
           'harga' => $post['harga']
       ]);
    }

    public function update($post) {
        // $this->db->insert('tb_paket', [
        //     'id_paket' => $post['id_paket'],
        //     'id_outlet' => $post['id_outlet'],
        //     'nama_paket' => $post['nama_paket'],
        //     'jenis' => $post['jenis'],
        //     'harga' => $post['harga']
        // ]);

        $data = [
            'id_outlet' => $post['id_outlet'],
            'nama_paket' => $post['nama_paket'],
            'jenis' => $post['jenis'],
            'harga' => $post['harga'],
        ];
        
        $this->db->where('id_paket', $post['id_paket']);
        $this->db->update('tb_paket', $data);
    }
}
