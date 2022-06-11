<?php 

class C_verif extends CI_Controller {
	
	public function index($id)
	{
		$data['verifikasi'] = $this->m_verif->tampil_data($id)->result();
		$this->load->view('admin/templates/header');
		$this->load->view('admin/templates/sidebar');
		$this->load->view('admin/verif', $data);
		$this->load->view('admin/templates/footer');
		
	}

	public function update(){
		$id				= $this->input->post('kode_pendaftaran');
		$status			= $this->input->post('status');

		$data = array (
			'status'	=> $status
		);

		$where = array (
			'kode_pendaftaran' => $id
		);
		$this->m_verif->update_data('data_siswa', $data, $where);
		$this->session->set_flashdata('pesan_update',
             '<div class="alert alert-info alert-dismissible fade show" role="alert">
                Data Siswa Berhasil diverifikasi!
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
              </div>');
		redirect('c_semua_siswa');
	}

}

?>