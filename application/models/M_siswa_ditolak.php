<?php 

class M_siswa_ditolak extends CI_Model {

	public function tampil_data(){

		return $this->db->query("select * from data_siswa where status='tidak diterima'");
    }
    

}

 ?>