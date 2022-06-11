<?php 

class M_verif extends CI_Model {
    public function tampil_data($id){
		$this->db->select('*');
		$this->db->from('data_siswa');
		$this->db->where('data_siswa.kode_pendaftaran', $id);
		$query = $this->db->get();
		return $query;
	}

	// public function update_data($data, $table) {
	// 	$this->db->update($table, $data);
	// }

	public function update_data($table, $data, $where) {
        $this->db->update($table, $data, $where);
    }


}

?>