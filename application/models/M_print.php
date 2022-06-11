<?php 

class M_print extends CI_Model {

	// public function get_keyword($keyword){
	// 	$cari = $this->input->GET('kode_pendaftaran', TRUE);
	// 	$data = $this->db->query("SELECT * FROM data_siswa JOIN asal_mula_anak ON data_siswa.kode_pendaftaran = asal_mula_anak.kode_pendaftaran JOIN data_otru ON data_siswa.kode_pendaftaran=data_otru.kode_pendaftaran WHERE data_siswa.kode_pendaftaran LIKE '%$cari%'");
	// 	return $data->result();
	// 	$this->db->select('*');
	// 	$this->db->from('data_siswa');
	// 	$this->db->join('asal_mula_anak', 'data_siswa.kode_pendaftaran = asal_mula_anak.kode_pendaftaran');
	// 	$this->db->join('data_otru', 'data_siswa.kode_pendaftaran = data_otru.kode_pendaftaran');
	// 	$this->db->like('data_siswa.kode_pendaftaran',$keyword);
		
	// 	return $this->db->get()->result();
	// }

	public function tampil_data_print($kode_pendaftaran){
		$this->db->select('*');
		$this->db->from('data_siswa');
		$this->db->join('asal_mula_anak', 'data_siswa.kode_pendaftaran = asal_mula_anak.kode_pendaftaran');
		$this->db->join('data_otru', 'data_siswa.kode_pendaftaran = data_otru.kode_pendaftaran');
		$this->db->where('data_siswa.kode_pendaftaran', $kode_pendaftaran);
		$query = $this->db->get();
		return $query->result();
	}


}
?>