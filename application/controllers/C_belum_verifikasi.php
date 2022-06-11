<?php 

class C_belum_Verifikasi extends CI_Controller {
    
    public function index(){
        $data['siswa_blm_verif']= $this->m_belum_verifikasi->tampil_data()->result();
        $this->load->view('admin/templates/header');
        $this->load->view('admin/templates/sidebar');
        $this->load->view('admin/siswa_belum_verif',$data);
        $this->load->view('admin/templates/footer');
    }
}

?>