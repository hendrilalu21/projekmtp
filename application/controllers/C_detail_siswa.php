<?php 

class C_detail_siswa extends CI_Controller {
	
	public function index($kode_pendaftaran)
	{
		$data['detail_siswa'] = $this->m_detail_siswa->tampil_data($kode_pendaftaran);
		$this->load->view('admin/templates/header');
		$this->load->view('admin/templates/sidebar');
		$this->load->view('admin/detail_siswa', $data);
		$this->load->view('admin/templates/footer');
		
	}

	// public function detail($id) {
	// 	// $this->load->model('m_detail_siswa');
	// 	$detail	= $this->m_detail_siswa->detail_data($id);
	// 	$data['detail_siswa'] = $detail;

	// 	$this->load->view('admin/templates/header');
	// 	$this->load->view('admin/templates/sidebar');
	// 	$this->load->view('admin/detail_siswa', $data);
	// 	$this->load->view('admin/templates/footer');
	// }

	// public function detail($kode_pendaftaran) {
	// 	$where = array ('kode_pendaftaran' => $kode_pendaftaran);
	// 	$data['detail_siswa'] = $this->m_detail_siswa->detail_data($where, 'data_siswa')->result();

	// 	$this->load->view('admin/templates/header');
	// 	$this->load->view('admin/templates/sidebar');
	// 	$this->load->view('admin/detail_siswa', $data);
	// 	$this->load->view('admin/templates/footer');
	// }
}

?>