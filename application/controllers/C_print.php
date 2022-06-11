<?php 

class C_print extends CI_Controller {

	public function cetak($kode_pendaftaran)
	{
		$data['cari'] = $this->m_print->tampil_data_print($kode_pendaftaran);
		$this->load->view('user/print_pendaftaran', $data);
		
	}

	// public function bdaftar(){
	// 	$this->load->view('user/bpendaftaran');
	// }

	// public function pilih() {
	// 	$keyword = $this->input->post('keyword');
	// 	$data['cari'] = $this->m_print->get_keyword($keyword);
	// 	$this->load->view('user/print_pendaftaran', $data);
		
	// }

	// public function search(){
	// 	$this->_rules();

	// 	if($this->form_validation->run() == FALSE ) {
	// 		$this->bdaftar();
	// 	} else {
	// 		$this->pilih();
	// 	}

		
	// }

	// public function _rules() {
    //     $this->form_validation->set_rules('keyword', 'Kode Pendaftaran', 'required');
    // }
}

?>