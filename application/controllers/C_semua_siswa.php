<?php 

class C_semua_siswa extends CI_Controller {
	
	public function index()
	{
		$data['semua_siswa'] = $this->m_semua_siswa->tampil_data()->result();
		$this->load->view('admin/templates/header');
		$this->load->view('admin/templates/sidebar');
		$this->load->view('admin/semua_siswa', $data);
		$this->load->view('admin/templates/footer');
		
	}

	public function delete_siswa($id) {
        $where = array ('kode_pendaftaran' => $id);

        $this->m_semua_siswa->delete_data($id);
        $this->session->set_flashdata('pesan',
         '<div class="alert alert-danger alert-dismissible fade show" role="alert">
            Data Siswa Berhasil Dihapus!
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
          </div>');
        redirect('c_semua_siswa');
    }

	// public function edit($kode_pendaftaran) {
	// 	$where = array ('kode_pendaftaran' => $kode_pendaftaran);
	// 	$data['verif_semua_siswa'] = $this->m_semua_siswa->edit_data($where, 'data_siswa')->result();

	// 	$this->load->view('admin/templates/header');
	// 	$this->load->view('admin/templates/sidebar');
	// 	$this->load->view('admin/verifikasi', $data);
	// 	$this->load->view('admin/templates/footer');
	// }

	// public function update(){
	// 	$kode_pendaftaran		= $this->input->post('kode_pendaftaran');
	// 	$status			= $this->input->post('status');

	// 	$data = array (
	// 		'status'	=> $status
	// 	);

	// 	$where = array (
	// 		'kode_pendaftaran'	=> $kode_pendaftaran
	// 	);

	// 	$this->m_semua_siswa->update_data($where, $data, 'data_siswa');
	// 	redirect('c_semua_siswa/index');
	// }
}

?>