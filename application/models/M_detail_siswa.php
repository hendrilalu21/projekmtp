<?php 

class M_detail_siswa extends CI_Model {

	public function tampil_data($kode_pendaftaran){
		$this->db->select('*');
		$this->db->from('data_siswa');
		$this->db->join('asal_mula_anak', 'data_siswa.kode_pendaftaran = asal_mula_anak.kode_pendaftaran');
		$this->db->join('data_otru', 'data_siswa.kode_pendaftaran = data_otru.kode_pendaftaran');
		$this->db->join('catatan', 'data_siswa.kode_pendaftaran = catatan.kode_pendaftaran');
		$this->db->where('data_siswa.kode_pendaftaran', $kode_pendaftaran);
		$query = $this->db->get();
		return $query->result();
	}

	// public function detail_data($kode_pendaftaran = NULL) {
	// 	$query = $this->db->get_where('data_siswa', array('kode_pendaftaran' => $kode_pendaftaran));

	
 	// 	return $query->result();
	//  }
	 
	//  public function detail_data($where, $table) {
	// 	return $this->db->get_where($table, $where);
	// }

	// public function tampil_data(){
	// 	return $this->db->get('data_siswa');
	// 	return $this->db->get('asal_mula_anak');
	// 	return $this->db->get('data_otru');
	// 	return $this->db->get('catatan');

	// }

	// public function tampil_asal(){
	// 	return $this->db->get('asal_mula_anak');
	// }

	// public function tampil_ortu(){
	// 	return $this->db->get('data_otru');
	// }

	// public function tampil_catatan(){
	// 	return $this->db->get('catatan');
	// }
}
?>