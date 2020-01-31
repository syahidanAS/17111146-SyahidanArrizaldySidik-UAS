<?php 
 
class M_admin extends CI_Model{
   function ambil_data(){
      return $this->db->get('tb_mahasiswa');
   }

    function ambil_data_admin(){
      return $this->db->get('tb_admin');
   }

   function profil_admin($username){
      return $this->db->query("SELECT * FROM tb_admin WHERE username = '" . $username . "'")->result_array();
   }

    public function profil_mhs($npm)
    {
        return $this->db->query("SELECT * FROM tb_mahasiswa WHERE npm = '" . $npm . "'")->result_array();
    }

     public function delete_mhs($table, $where)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }
     public function tambah_data($table, $data)
    {
        $this->db->insert($table, $data);
    }
      public function tampil_data($table)
    {
        return $this->db->get($table)->result();
    }

}