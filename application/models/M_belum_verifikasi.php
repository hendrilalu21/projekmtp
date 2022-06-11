<?php 

class M_belum_verifikasi extends CI_Model {

    public function tampil_data(){

        return $this->db->query("SELECT * FROM data_siswa WHERE status='Belum diverifikasi'");
    }
}


?>