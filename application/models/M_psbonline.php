<?php 

class M_psbonline extends CI_Model {
	public function input_data_siswa($data) {
		return $this->db->insert('data_siswa', $data);
	}

	public function input_data_asal($data2) {
		return $this->db->insert('asal_mula_anak', $data2);
	}

	public function input_data_ortu($data3) {
		return $this->db->insert('data_otru', $data3);
	}

	public function input_data_catatan($data4) {
		return $this->db->insert('catatan', $data4);
	}

	public function tutup(){
		return $this->db->query("SELECT * FROM pengaturan_daftar WHERE opsi='Tutup'");
	}
}

 ?>