<?php 

class M_semua_siswa extends CI_Model {

	public function tampil_data(){
		return $this->db->get('data_siswa');
	}

	// public function get_sum(){
	// 	$sql = "SELECT sum(umur) as umur FROM data_siswa";
	// 	$result = $this->db->query($sql);
	// 	return $result->row()->umur;
	// }


	public function tampil_download(){
		$this->db->select('*');
		$this->db->from('data_siswa');
		$this->db->join('catatan', 'data_siswa.kode_pendaftaran = catatan.kode_pendaftaran');
		$query = $this->db->get();
		return $query->result();
	}

	public function delete_data($kode_pendaftaran) {
		$this->db->query("DELETE data_siswa,asal_mula_anak,data_otru,catatan 
		FROM data_siswa, asal_mula_anak,data_otru,catatan
		WHERE data_siswa.kode_pendaftaran=asal_mula_anak.kode_pendaftaran
		AND asal_mula_anak.kode_pendaftaran=data_otru.kode_pendaftaran 
		AND data_otru.kode_pendaftaran=catatan.kode_pendaftaran
		AND data_siswa.kode_pendaftaran= $kode_pendaftaran");

		// $sql = "DELETE data_siswa,asal_mula_anak,data_otru,catatan 
		// 		FROM data_siswa, asal_mula_anak,data_otru,catatan
		// 		WHERE data_siswa.kode_pendaftaran=asal_mula_anak.kode_pendaftaran
		// 		AND asal_mula_anak.kode_pendaftaran=data_otru.kode_pendaftaran 
		// 		AND data_otru.kode_pendaftaran=catatan.kode_pendaftaran
		// 		AND data_siswa.kode_pendaftaran= ?";

		// $this->db->query($sql, array($kode_pendaftaran));

    }

	// public function edit_data($where, $table) {
	// 	return $this->db->get_where($table, $where);
	// }

	// public function update_data($where, $data, $table) {
	// 	$this->db->where($where);
	// 	$this->db->update($table, $data);
	// }

}

 ?>