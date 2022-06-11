<?php  

class C_psbonline extends CI_Controller {
	public function index()
	{
		$ttp = $this->m_psbonline->tutup()->result();
		if($ttp == TRUE){
			$this->load->view('user/pendaftaran_tutup');
		} else {
			$this->load->view('user/psbonline');
		}

		
	}

	public function tambah_data() {
		$this->_rules();

		if($this->form_validation->run() == FALSE ) {
            $this->index();
        } else {
			$kode_pendaftaran			= $this->input->post('kode_pendaftaran');
		$nama_lengkap				= $this->input->post('nama_lengkap');
		$jenis_kelamin				= $this->input->post('jenis_kelamin');
		$tmpt_lahir					= $this->input->post('tmpt_lahir');
		$tgl_lahir					= $this->input->post('tgl_lahir');
		$agama						= $this->input->post('agama');
		$berat_bdn					= $this->input->post('berat_bdn');
		$tinggi_bdn					= $this->input->post('tinggi_bdn');
		$golongan_darah				= $this->input->post('golongan_darah');
		$penyakit					= $this->input->post('penyakit');
		$alergi_makanan				= $this->input->post('alergi_makanan');
		$alamat_rumah				= $this->input->post('alamat_rumah');
		$jarak_rumah_kesekolah		= $this->input->post('jarak_rumah_kesekolah');
		$bertempat_tinggal_pada		= $this->input->post('bertempat_tinggal_pada');
		

		$id_asal            = $this->input->post('id_asal');
		$kode_pendaftaran	= $this->input->post('kode_pendaftaran');
		$masuk_sbg			= $this->input->post('masuk_sbg');
		$asal_anak			= $this->input->post('asal_anak');
		$nama_tk			= $this->input->post('nama_tk');
		$alamat_tk			= $this->input->post('alamat_tk');
		$nama_sklh_asal		= $this->input->post('nama_sklh_asal');
		$tanggal			= $this->input->post('tanggal');
		$dari_kls			= $this->input->post('dari_kls');

		$id_ortu                = $this->input->post('id_ortu');
		$kode_pendaftaran		= $this->input->post('kode_pendaftaran');
		$nama_ayah				= $this->input->post('nama_ayah');
		$tmpt_lahir_ayah		= $this->input->post('tmpt_lahir_ayah');
		$tgl_lahir_ayah			= $this->input->post('tgl_lahir_ayah');
		$pekerjaan_ayah			= $this->input->post('pekerjaan_ayah');
		$pendidikan_ayah		= $this->input->post('pendidikan_ayah');
		$penghasilan_ayah		= $this->input->post('penghasilan_ayah');
		$no_hp_ayah				= $this->input->post('no_hp_ayah');
		$nama_ibu				= $this->input->post('nama_ibu');
		$tmpt_lahir_ibu			= $this->input->post('tmpt_lahir_ibu');
		$tgl_lahir_ibu			= $this->input->post('tgl_lahir_ibu');
		$pekerjaan_ibu			= $this->input->post('pekerjaan_ibu');
		$pendidikan_ibu			= $this->input->post('pendidikan_ibu');
		$penghasilan_ibu		= $this->input->post('penghasilan_ibu');
		$no_hp_ibu				= $this->input->post('no_hp_ibu');

		$id_catatan              = $this->input->post('id_catatan');
		$kode_pendaftaran		= $this->input->post('kode_pendaftaran');
		$nama_1					= $this->input->post('nama_1');
		$kelas_1				= $this->input->post('kelas_1');
		$nama_2					= $this->input->post('nama_2');
		$kelas_2				= $this->input->post('kelas_2');
		$hubungan				= $this->input->post('hubungan');
		$ortu_1					= $this->input->post('ortu_1');
		$ortu_2					= $this->input->post('ortu_2');
		$dll					= $this->input->post('dll');
		$riwayat_kesehatan		= $this->input->post('riwayat_kesehatan');
		// $akte_kelahiran			= $this->input->post('akte_kelahiran');
		$akte_kelahiran 		= $_FILES['akte_kelahiran']['name'];
		if ($akte_kelahiran=''){}else{
			$config['upload_path']		= './assets/akte';
			$config['allowed_types']	= 'jpg|png|jpeg';

			$this->load->library('upload',$config);
			if(!$this->upload->do_upload('akte_kelahiran')){
				echo "Upload Gagal";
			}else{
				$akte_kelahiran=$this->upload->data('file_name');
			}
		}

		// $ijazah					= $this->input->post('ijazah');
		// $ijazah 		= $_FILES['ijazah']['name'];
		// if ($ijazah=''){}else{
		// 	$config['upload_path']		= './assets/akte';
		// 	$config['allowed_types']	= 'jpg|png|jpeg|tiff';

		// 	$this->load->library('upload',$config);
		// 	if(!$this->upload->do_upload('ijazah')){
		// 		echo "Upload Gagal";
		// 	}else{
		// 		$ijazah=$this->upload->data('file_name');
		// 	}
		// }

		$data = array(
			'kode_pendaftaran'			=>$kode_pendaftaran,
			'nama_lengkap'				=>$nama_lengkap,
			'jenis_kelamin'				=>$jenis_kelamin,
			'tmpt_lahir'				=>$tmpt_lahir,
			'tgl_lahir'					=>$tgl_lahir,
			'agama'						=>$agama,
			'berat_bdn'					=>$berat_bdn,
			'tinggi_bdn'				=>$tinggi_bdn,
			'golongan_darah'			=>$golongan_darah,
			'penyakit'					=>$penyakit,
			'alergi_makanan'			=>$alergi_makanan,
			'alamat_rumah'				=>$alamat_rumah,
			'jarak_rumah_kesekolah'		=>$jarak_rumah_kesekolah,
			'bertempat_tinggal_pada'	=>$bertempat_tinggal_pada
									
		);

		$data2 = array(
			'id_asal'			=>$id_asal,
			'kode_pendaftaran'	=>$kode_pendaftaran,
			'masuk_sbg'			=>$masuk_sbg,
			'asal_anak'			=>$asal_anak,
			'nama_tk'			=>$nama_tk,
			'alamat_tk'			=>$alamat_tk,
			'nama_sklh_asal'	=>$nama_sklh_asal,
			'tanggal'			=>$tanggal,
			'dari_kls'			=>$dari_kls					
		);

		$data3 = array(
			'id_ortu'				=>$id_ortu,
			'kode_pendaftaran'		=>$kode_pendaftaran,
			'nama_ayah'				=>$nama_ayah,
			'tmpt_lahir_ayah'		=>$tmpt_lahir_ayah,
			'tgl_lahir_ayah'		=>$tgl_lahir_ayah,
			'pekerjaan_ayah'		=>$pekerjaan_ayah,
			'pendidikan_ayah'		=>$pendidikan_ayah,
			'penghasilan_ayah'		=>$penghasilan_ayah,
			'no_hp_ayah'			=>$no_hp_ayah,
			'nama_ibu'				=>$nama_ibu,
			'tmpt_lahir_ibu'		=>$tmpt_lahir_ibu,
			'tgl_lahir_ibu'			=>$tgl_lahir_ibu,
			'pekerjaan_ibu'			=>$pekerjaan_ibu,
			'pendidikan_ibu'		=>$pendidikan_ibu,
			'penghasilan_ibu'		=>$penghasilan_ibu,
			'no_hp_ibu'				=>$no_hp_ibu								
		);

		$data4 = array(
			'id_catatan'			=>$id_catatan,
			'kode_pendaftaran'		=>$kode_pendaftaran,
			'nama_1'				=>$nama_1,
			'kelas_1'				=>$kelas_1,
			'nama_2'				=>$nama_2,
			'kelas_2'				=>$kelas_2,
			'hubungan'				=>$hubungan,
			'ortu_1'				=>$ortu_1,
			'ortu_2'				=>$ortu_2,
			'dll'					=>$dll,
			'riwayat_kesehatan'		=>$riwayat_kesehatan,
			'akte_kelahiran'		=>$akte_kelahiran
									
		);



		$this->m_tambah_siswa->input_data_siswa($data, 'data_siswa');
		$this->m_tambah_siswa->input_data_asal($data2, 'asal_mula_anak');
		$this->m_tambah_siswa->input_data_ortu($data3, 'data_otru');
		$this->m_tambah_siswa->input_data_catatan($data4, 'catatan');
		$this->session->set_flashdata('pesan_psbonline',
             '<div class="alert alert-success alert-dismissible fade show" role="alert">
                Data Siswa Berhasil ditambahkan. Tunggu Informasi lebih lanjut. 
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
              </div>');
		redirect('c_home');
		}
	}

	public function _rules() {
        $this->form_validation->set_rules('nama_lengkap', 'Nama Lengkap', 'required');
        $this->form_validation->set_rules('jenis_kelamin', 'Jenis Kelamin', 'required');
        $this->form_validation->set_rules('tmpt_lahir', 'Tempat Lahir', 'required');
        $this->form_validation->set_rules('tgl_lahir', 'Tanggal Lahir', 'required');
        $this->form_validation->set_rules('agama', 'Agama', 'required');
		$this->form_validation->set_rules('berat_bdn', 'Berat Badan Anak', 'required');
		$this->form_validation->set_rules('tinggi_bdn', 'Tinggi Badan Anak', 'required');
		$this->form_validation->set_rules('golongan_darah', 'Golongan Darah', 'required');
		$this->form_validation->set_rules('penyakit', 'Penyakit Yang Pernah Diderita', 'required');
		$this->form_validation->set_rules('alergi_makanan', 'Alergi Makanan', 'required');
		$this->form_validation->set_rules('alamat_rumah', 'Alamat Rumah', 'required');
		$this->form_validation->set_rules('jarak_rumah_kesekolah', 'Jarak Rumah Ke Sekolah', 'required');
		$this->form_validation->set_rules('bertempat_tinggal_pada', 'Bertempat Tinggal Pada', 'required');
		//Asal Anak
		$this->form_validation->set_rules('masuk_sbg', 'Masuk Sekolah ini Sebagai', 'required');
		$this->form_validation->set_rules('asal_anak', 'Asal Anak', 'required');
		$this->form_validation->set_rules('nama_tk', 'Nama TK', 'required');
		$this->form_validation->set_rules('alamat_tk', 'Alamat TK', 'required');
		$this->form_validation->set_rules('nama_sklh_asal', 'Nama Sekolah Asal', 'required');
		$this->form_validation->set_rules('tanggal', 'Tanggal', 'required');
		$this->form_validation->set_rules('dari_kls', 'Dari Kelas', 'required');
		//Data Ortu
		$this->form_validation->set_rules('nama_ayah', 'Nama Ayah', 'required');
		$this->form_validation->set_rules('tmpt_lahir_ayah', 'Tempat Lahir Ayah', 'required');
		$this->form_validation->set_rules('tgl_lahir_ayah', 'Tanggal Lahir Ayah', 'required');
		$this->form_validation->set_rules('pekerjaan_ayah', 'Pekerjaan Ayah', 'required');
		$this->form_validation->set_rules('pendidikan_ayah', 'Pendidikan Ayah', 'required');
		$this->form_validation->set_rules('penghasilan_ayah', 'Penghasilan Ayah', 'required');
		$this->form_validation->set_rules('no_hp_ayah', 'Nomor Telepon / HP', 'required');
		$this->form_validation->set_rules('nama_ibu', 'Nama Ibu', 'required');
		$this->form_validation->set_rules('tmpt_lahir_ibu', 'Tempat Lahir Ibu', 'required');
		$this->form_validation->set_rules('tgl_lahir_ibu', 'Tanggal Lahir Ibu', 'required');
		$this->form_validation->set_rules('pekerjaan_ibu', 'Pekerjaan Ibu', 'required');
		$this->form_validation->set_rules('pendidikan_ibu', 'Pendidikan Ibu', 'required');
		$this->form_validation->set_rules('penghasilan_ibu', 'Penghasilan Ibu', 'required');
		$this->form_validation->set_rules('no_hp_ibu', 'Nomor Telepon / HP', 'required');
		//CATATAN
		$this->form_validation->set_rules('nama_1', 'Nama', 'required');
		$this->form_validation->set_rules('kelas_1', 'Kelas', 'required');
		$this->form_validation->set_rules('nama_2', 'Nama', 'required');
		$this->form_validation->set_rules('kelas_2', 'Kelas', 'required');
		$this->form_validation->set_rules('hubungan', 'Hubungan', 'required');
		$this->form_validation->set_rules('ortu_1', 'Form', 'required');
		$this->form_validation->set_rules('ortu_2', 'Form', 'required');
		$this->form_validation->set_rules('dll', 'Lain-lain', 'required');
		$this->form_validation->set_rules('riwayat_kesehatan', 'Riwayat Kesehatan', 'required');

		
    }
}

?>