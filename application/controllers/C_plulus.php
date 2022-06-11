<?php  

class C_plulus extends CI_Controller {
	public function index()
	{
		$data['siswa_diterima'] = $this->m_siswa_diterima->tampil_data()->result();
		

		$tutup = $this->m_plulus->tutup()->result();
		if($tutup == TRUE){
			$this->load->view('user/pengumuman_tutup');
		} else {
			$this->load->view('user/pkelulusan', $data);
		}

	}
}

?>