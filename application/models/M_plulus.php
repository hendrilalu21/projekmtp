<?php 

class M_plulus extends CI_Model {

	public function tutup(){

		return $this->db->query("SELECT * FROM pengaturan_pengumuman WHERE opsi='Tutup'");
    }
    

}

 ?>