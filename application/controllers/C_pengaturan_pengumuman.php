<?php 

class C_pengaturan_pengumuman extends CI_Controller {

    public function index(){
        $data['atur_info'] = $this->m_pengaturan_pengumuman->tampil_data()->result();
        $this->load->view('admin/templates/header');
		$this->load->view('admin/templates/sidebar');
		$this->load->view('admin/pengaturan_pengumuman', $data);
		$this->load->view('admin/templates/footer');
    }

    public function update(){
		$opsi			= $this->input->post('opsi');

		$data = array (
			'opsi'	=> $opsi
		);
		$this->m_pengaturan_pengumuman->update_data( $data, 'pengaturan_pengumuman');
		$this->session->set_flashdata('pesan_pengumuman',
		'<div class="alert alert-success alert-dismissible fade show" role="alert">
		   Pengaturan Pengumuman Berhasil diupdate!
		   <button type="button" class="close" data-dismiss="alert" aria-label="Close">
			   <span aria-hidden="true">&times;</span>
		   </button>
		 </div>');
		redirect('c_pengaturan_pengumuman/index');
	}
}


?>