<?php 

class M_pengaturan_daftar extends CI_Model {

    public function tampil_data(){
        return $this->db->get('pengaturan_daftar');
    }

    public function update_data($data, $table) {
		$this->db->update($table, $data);
	}
}


?>