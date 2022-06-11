<?php 

class C_siswa_ditolak extends CI_Controller {
	
	public function index()
	{
		$data['siswa_ditolak'] = $this->m_siswa_ditolak->tampil_data()->result();
		$this->load->view('admin/templates/header');
		$this->load->view('admin/templates/sidebar');
		$this->load->view('admin/siswa_ditolak', $data);
		$this->load->view('admin/templates/footer');
		
	}
}

?>