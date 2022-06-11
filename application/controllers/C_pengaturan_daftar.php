<?php 

class C_pengaturan_daftar extends CI_Controller {

    public function index(){
        $data['pengatur_daftar'] = $this->m_pengaturan_daftar->tampil_data()->result();
        $this->load->view('admin/templates/header');
        $this->load->view('admin/templates/sidebar');
        $this->load->view('admin/pengaturan_daftar', $data);
        $this->load->view('admin/templates/footer');
    }

  public function update(){
		$opsi			= $this->input->post('opsi');

		$data = array (
			'opsi'	=> $opsi
		);
		$this->m_pengaturan_daftar->update_data( $data, 'pengaturan_daftar');
		$this->session->set_flashdata('pesan_set_daftar',
             '<div class="alert alert-success alert-dismissible fade show" role="alert">
                Pengaturan Pendaftaran Berhasil diupdate!
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
              </div>');
		redirect('c_pengaturan_daftar/index');
	}
}


?>