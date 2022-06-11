<?php 

class C_siswa_diterima extends CI_Controller {
	
	public function index()
	{
		$data['siswa_diterima'] = $this->m_siswa_diterima->tampil_data()->result();
		$this->load->view('admin/templates/header');
		$this->load->view('admin/templates/sidebar');
		$this->load->view('admin/siswa_diterima', $data);
		$this->load->view('admin/templates/footer');
		
	}
}

?>