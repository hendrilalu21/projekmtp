<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>PSB SD UNGGULAN AISYIYAH</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/vendor/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/vendor/font-awesome/css/font-awesome.min.css">
    <!-- Fontastic Custom icon font-->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/fontastic.css">
    <!-- Google fonts - Roboto -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700">
    <!-- jQuery Circle-->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/grasp_mobile_progress_circle-1.0.0.min.css">
    <!-- Custom Scrollbar-->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.css">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/style.default.premium.css" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/custom.css">
    <!-- Favicon-->
    <link rel="shortcut icon" href="<?php echo base_url() ?>assets/img/favicon.ico">
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
  </head>
  <body>
    <!-- Side Navbar -->
    <nav class="side-navbar">
      <div class="side-navbar-wrapper">
        <!-- Sidebar Header    -->
        <div class="sidenav-header d-flex align-items-center justify-content-center">
          <!-- User Info-->
          <div class="sidenav-header-inner text-center"><a href="<?=site_url('c_home')?>"><img src="<?php echo base_url() ?>assets/img/LogoSDUA.jpg" alt="person" class="img-fluid rounded-circle"></a>
            <h2 class="h5">SDUA BANTUL</h2><span>Yogyakarta</span>
          </div>
          <!-- Small Brand information, appears on minimized sidebar-->
          <div class="sidenav-header-logo"><a href="index.html" class="brand-small text-center"> <strong>S</strong><strong class="text-primary">D</strong></a></div>
        </div>
        <!-- Sidebar Navigation Menus-->
        <div class="main-menu">
          <h5 class="sidenav-heading">Menu</h5>
          <ul id="side-main-menu" class="side-menu list-unstyled">                  
            <li><a href="<?=site_url('c_home')?>"> <i class="icon-home"></i>Beranda  </a></li>
            <li class="active"><a href="<?=site_url('c_psbonline')?>"> <i class="fa fa-edit"></i>Daftar PSB Online
            </a></li>
            <!-- <li><a href="<?=site_url('c_print/bdaftar')?>"> <i class="fa fa-check"></i>Bukti Pendaftaran
            </a></li> -->
            <li><a href="<?=site_url('c_plulus')?>"> <i class="fa fa-book"></i>Pengumuman Kelulusan
            </a></li>
            <li><a href="<?=site_url('c_pmanual')?>"> <i class="fa fa-pencil"></i>Formulir Manual & Surat Pernyataan Orang Tua
            </a></li>
            <li><a href="http://www.sduabantul.sch.id/" target="_blank"> <i class="fa fa-globe"></i>Website SDUA
            </a></li>
            
            
        </div>
        
      </div>
    </nav>
    <div class="page">
      <!-- navbar-->
      <header class="header">
        <nav class="navbar">
          <div class="container-fluid">
            <div class="navbar-holder d-flex align-items-center justify-content-between">
              <div class="navbar-header"><a id="toggle-btn" href="#" class="menu-btn"><i class="icon-bars"> </i></a><a href="<?=site_url('c_home')?>" class="navbar-brand">
                  <div class="brand-text d-none d-md-inline-block"><span> </span><strong class="text-primary">SD UNGGULAN AISYIYAH</strong></div></a></div>
              <ul class="nav-menu list-unstyled d-flex flex-md-row align-items-md-center">
                
              </ul>
            </div>
          </div>
        </nav>
      </header>
      <!-- Breadcrumb-->
      <!-- <div class="breadcrumb-holder">
        <div class="container-fluid">
          <ul class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html">Beranda</a></li>
            <li class="breadcrumb-item active">Daftar PSB Online      </li>
          </ul>
        </div>
      </div> -->
      <section class="forms">
        <div class="container-fluid">
          <!-- Page Header-->
          <header> 
            <h1 class="h3 display">Daftar PSB Online </h1>
            <div>
              <small class="breadcrumb-item active">(Masukkan Data Secara Benar)</small>
            </div>
          </header>
          <div class="row">
            <div class="col-lg-12">
              <div class="card">
                <div class="card-header d-flex align-items-center">
                  <h4>A. DATA ANAK</h4>
                </div>
                <div class="card-body">
                <!-- <form class="form-horizontal"> -->
                <?php echo form_open_multipart('c_psbonline/tambah_data'); ?>
                <div class="form-group row">
                      <label class="col-sm-2 form-control-label">Kode Pendaftaran</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" value="<?=rand(),0,3?>" placeholder="Masukkan Kode Pendaftaran"  name="kode_pendaftaran" readonly>
                      </div>
                    </div>

                    <div class="form-group row">
                      <label class="col-sm-2 form-control-label">Nama Lengkap</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" placeholder="Masukkan Nama Lengkap" name="nama_lengkap">
                        <?php echo form_error('nama_lengkap','<div class="text-small text-danger">','</div>') ?>
                      </div>
                    </div>
                    <!-- <div class="form-group row">
                      <label class="col-sm-2 form-control-label">Nama Panggilan</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" placeholder="Masukkan Nama Panggilan" name="nama_panggilan">
                      </div>
                    </div> -->
                    <div class="form-group row">
                      <label class="col-sm-2 form-control-label">Jenis Kelamin</label>
                      <div class="col-sm-10 mb-3">
                        <select class="form-control" name="jenis_kelamin">
                          <option>Pilih</option>
                          <option value="Laki-laki">Laki-laki</option>
                          <option value="Perempuan">Perempuan</option>
                        </select>
                        <?php echo form_error('jenis_kelamin','<div class="text-small text-danger">','</div>') ?>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-2 form-control-label">Tempat Lahir</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" placeholder="Masukkan Tempat Lahir" name="tmpt_lahir">
                        <?php echo form_error('tmpt_lahir','<div class="text-small text-danger">','</div>') ?>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-2 form-control-label">Tanggal Lahir</label>
                      <div class="col-sm-10">
                        <input type="date" class="form-control" placeholder="Masukkan Tanggal Lahir" name="tgl_lahir">
                        <?php echo form_error('tgl_lahir','<div class="text-small text-danger">','</div>') ?>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-2 form-control-label">Agama</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" placeholder="Masukkan Agama" name="agama">
                        <?php echo form_error('agama','<div class="text-small text-danger">','</div>') ?>
                      </div>
                    </div>
                    <!-- <div class="form-group row">
                      <label class="col-sm-2 form-control-label">Kewarganegaraan</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" placeholder="Masukkan Kewarganegaraan" name="Kewarganegaraan">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-2 form-control-label">Anak Nomor</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" placeholder="Masukkan Anak Nomor ke" name="anak_no">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-2 form-control-label">Jumlah Saudara Kandung</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" placeholder="Jumlah saudara Kandung" name="jml_sdr_kandung">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-2 form-control-label">Jumlah Saudara Tiri</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" placeholder="Jumlah saudara tiri" name="jml_sdr_tiri">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-2 form-control-label">Bahasa Sehari-hari</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" placeholder="Bahasa Sehari-hari" name="bhs_seharihari">
                      </div>
                    </div> -->
                    <div class="form-group row">
                      <label class="col-sm-2 form-control-label">Berat Badan Anak</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" placeholder="Berat Badan Anak" name="berat_bdn">
                        <?php echo form_error('berat_bdn','<div class="text-small text-danger">','</div>') ?>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-2 form-control-label">Tinggi Badan Anak</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" placeholder="Tinggi Badan Anak" name="tinggi_bdn">
                        <?php echo form_error('tinggi_bdn','<div class="text-small text-danger">','</div>') ?>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-2 form-control-label">Golongan Darah</label>
                      <div class="col-sm-10 mb-3">
                        <select class="form-control" name="golongan_darah">
                          <option>Pilih</option>
                          <option>A</option>
                          <option>B</option>
                          <option>AB</option>
                          <option>O</option>
                        </select>
                        <?php echo form_error('golongan_darah','<div class="text-small text-danger">','</div>') ?>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-2 form-control-label">Penyakit Yang Pernah Diderita</label>
                      
                      <div class="col-sm-10">
                      <p>Jika tidak ada isi dengan tanda strip atau isi dengan kalimat 'Tidak ada'</p>
                        <input type="text" class="form-control" placeholder="Masukkan Penyakit Yang Pernah Diderita" name="penyakit">
                        <?php echo form_error('penyakit','<div class="text-small text-danger">','</div>') ?>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-2 form-control-label">Alergi Makanan</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" placeholder="Masukkan Alergi Makanan" name="alergi_makanan">
                        <?php echo form_error('alergi_makanan','<div class="text-small text-danger">','</div>') ?>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-2 form-control-label">Alamat Rumah</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" placeholder="MAsukkan Alamat Rumah" name="alamat_rumah">
                        <?php echo form_error('alamat_rumah','<div class="text-small text-danger">','</div>') ?>
                      </div>
                    </div>
                   <!--  <div class="form-group row">
                      <label class="col-sm-2 form-control-label">RT</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" placeholder="Masukkan RT" name="rt">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-2 form-control-label">RW</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" placeholder="Masukkan RW" name="rw">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-2 form-control-label">Kode Pos</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" placeholder="Kode Pos" name="kode_pos">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-2 form-control-label">Desa / Kelurahan</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" placeholder="Masukka Desa / Kelurahan" name="desa">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-2 form-control-label">Kecamatan</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" placeholder="Masukkan Kecamatan" name="kecamatan">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-2 form-control-label">Kabupaten / Kota</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" placeholder="Masukkan Kabupaten / Kota" name="kabupatan_kota">
                      </div>
                    </div> -->
                    <div class="form-group row">
                      <label class="col-sm-2 form-control-label">Jarak Rumah Ke Sekolah</label>
                      <div class="col-sm-10 mb-3">
                        <select class="form-control" name="jarak_rumah_kesekolah">
                          <option>Pilih</option>
                          <option>-3 Km</option>
                          <option>3 - 5 Km</option>
                          <option>5 - 10 Km</option>
                          <option>+ 10 Km</option>
                        </select>
                        <?php echo form_error('jarak_rumah_kesekolah','<div class="text-small text-danger">','</div>') ?>
                      </div>
                    </div>
                     <div class="form-group row">
                      <label class="col-sm-2 form-control-label">Bertempat Tinggal Pada</label>
                      <div class="col-sm-10 mb-3">
                        <select class="form-control" name="bertempat_tinggal_pada">
                          <option>Pilih</option>
                          <option>Orang Tua</option>
                          <option>Menumpang</option>
                          <option>Asrama</option>
                          <option>Lainnya</option>
                        </select>
                        <?php echo form_error('bertempat_tinggal_pada','<div class="text-small text-danger">','</div>') ?>
                      </div>
                    </div>

                    <input type="hidden" name="tgl_pendaftaran" value="<?php echo date("d-m-Y"); ?>">
                    
                    <br>
                    
                    <div class="card-header d-flex align-items-center">
                  <h4> B. ASAL MULA ANAK</h4>
                    </div>

                    <div class="form-group row">
                    </div>
                    <br>

                    <div class="form-group row">
                      <label class="col-sm-2 form-control-label">Masuk Sekolah ini Sebagai</label>
                      <div class="col-sm-10 mb-3">
                        <select class="form-control" name="masuk_sbg">
                          <option>Pilih</option>
                          <option>Siswa Baru Kelas 1</option>
                          <option>*Pindahan Masuk</option>
                        </select>
                        <?php echo form_error('masuk_sbg','<div class="text-small text-danger">','</div>') ?>
                      </div>
                    </div>
                    <br>

                    <span><h3>*Jika Pindahan Langsung ke huruf e</h3></span>
                    <br><br>

                    <div class="form-group row">
                    </div>
                    
                    <div class="form-group row">
                      <label class="col-sm-2 form-control-label">a. Asal Anak</label>
                      <div class="col-sm-10 mb-3">
                      <p>Wajib di isi</p>
                        <select name="asal_anak" class="form-control">
                          <option>Pilih</option>
                          <option>Rumah Tangga</option>
                          <option>Taman Kanak-kanak(TK)</option>
                        </select>
                        <?php echo form_error('asal_anak','<div class="text-small text-danger">','</div>') ?>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-2 form-control-label">b. Nama TK</label>
                      <div class="col-sm-10">
                      <p>Jika tidak ada isi dengan tanda strip atau isi dengan kalimat 'Tidak ada'</p>
                        <input type="text" class="form-control" placeholder="Masukkan Nama TK" name="nama_tk">
                        <?php echo form_error('nama_tk','<div class="text-small text-danger">','</div>') ?>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-2 form-control-label">c. Alamat TK</label>
                      <div class="col-sm-10">
                      <p>Jika tidak ada isi dengan tanda strip atau isi dengan kalimat 'Tidak ada'</p>
                        <input type="text" class="form-control" placeholder="Masukkan Alamat TK" name="alamat_tk">
                        <?php echo form_error('alamat_tk','<div class="text-small text-danger">','</div>') ?>
                      </div>
                    </div>
                    <!-- <div class="form-group row">
                      <label class="col-sm-2 form-control-label">Lama Belajar</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" placeholder="Masukkan Lama Belajar" name="nama_sklh_asal">
                      </div>
                    </div> -->
                    <br>

                    <span><h3>Pindahan Masuk Dari</h3></span>
                    <br><br>

                    <div class="form-group row">
                      <label class="col-sm-2 form-control-label">e. Nama Sekolah Asal</label>
                      <div class="col-sm-10">
                      <p>Jika tidak ada isi dengan tanda strip atau isi dengan kalimat 'Tidak ada'</p>
                        <input type="text" class="form-control" placeholder="Masukkan Nama Sekolah Asal" name="nama_sklh_asal">
                        <?php echo form_error('nama_sklh_asal','<div class="text-small text-danger">','</div>') ?>
                      </div>
                    </div>
                    <br>
                    <div class="form-group row">
                      <label class="col-sm-2 form-control-label">f. Tanggal</label>
                      <div class="col-sm-10">
                      <p>Jika tidak ada isi dengan tanda strip atau isi dengan kalimat 'Tidak ada'</p>
                        <input type="text" class="form-control" placeholder="Masukkan Tanggal" name="tanggal">
                        <?php echo form_error('tanggal','<div class="text-small text-danger">','</div>') ?>
                      </div>
                    </div>
                    <br>
                    <div class="form-group row">
                      <label class="col-sm-2 form-control-label">g. Dari Kelas / T.P</label>
                      <div class="col-sm-10">
                      <p>Jika tidak ada isi dengan tanda strip atau isi dengan kalimat 'Tidak ada'</p>
                        <input type="text" class="form-control" placeholder="Masukkan Kelas Dari Tempat Pindah" name="dari_kls">
                        <?php echo form_error('dari_kls','<div class="text-small text-danger">','</div>') ?>
                      </div>
                    </div>
                    <br>

                    <div class="card-header d-flex align-items-center">
                  <h4> C. DATA ORANG TUA / WALI</h4>
                    </div>
                    <br>

                    <span><h4>Ayah</h4></span>
                    <br><br>

                    <div class="form-group row">
                      <label class="col-sm-2 form-control-label">Nama Ayah</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" placeholder="Masukkan Nama Ayah" name="nama_ayah">
                        <?php echo form_error('nama_ayah','<div class="text-small text-danger">','</div>') ?>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-2 form-control-label">Tempat Lahir Ayah</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" placeholder="Masukkan Tempat Lahir Ayah" name="tmpt_lahir_ayah">
                        <?php echo form_error('tmpt_lahir_ayah','<div class="text-small text-danger">','</div>') ?>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-2 form-control-label">Tanggal Lahir Ayah</label>
                      <div class="col-sm-10">
                        <input type="date" class="form-control" placeholder="Masukkan Tanggal Lahir Ayah" name="tgl_lahir_ayah">
                        <?php echo form_error('tgl_lahir_ayah','<div class="text-small text-danger">','</div>') ?>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-2 form-control-label">Pekerjaan Ayah</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" placeholder="Masukkan Pekerjaan Ayah" name="pekerjaan_ayah">
                        <?php echo form_error('pekerjaan_ayah','<div class="text-small text-danger">','</div>') ?>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-2 form-control-label">Pendidikan Ayah</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" placeholder="Masukkan Pendidikan Ayah" name="pendidikan_ayah">
                        <?php echo form_error('pendidikan_ayah','<div class="text-small text-danger">','</div>') ?>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-2 form-control-label">Penghasilan Ayah</label>
                      <div class="col-sm-10 mb-3">
                        <select name="penghasilan_ayah" class="form-control">
                          <option>Pilih</option>
                          <option>-3 Juta/bln</option>
                          <option> 3 - 5 Juta/bln</option>
                          <option> 5 - 7 Juta/bln</option>
                          <option> + 7 Juta/bln</option>
                        </select>
                        <?php echo form_error('penghasilan_ayah','<div class="text-small text-danger">','</div>') ?>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-2 form-control-label">Nomor Telepon / HP</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" placeholder="Masukkan Nomor Telepon / HP" name="no_hp_ayah">
                        <?php echo form_error('no_hp_ayah','<div class="text-small text-danger">','</div>') ?>
                      </div>
                    </div>

                    <span><h4>Ibu</h4></span>
                    <br><br>

                    <div class="form-group row">
                      <label class="col-sm-2 form-control-label">Nama Ibu</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" placeholder="Masukkan Nama Ibu" name="nama_ibu">
                        <?php echo form_error('nama_ibu','<div class="text-small text-danger">','</div>') ?>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-2 form-control-label">Tempat Lahir Ibu</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" placeholder="Masukkan Tempat Lahir Ibu" name="tmpt_lahir_ibu">
                        <?php echo form_error('tmpt_lahir_ibu','<div class="text-small text-danger">','</div>') ?>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-2 form-control-label">Tanggal Lahir Ibu</label>
                      <div class="col-sm-10">
                        <input type="date" class="form-control" placeholder="Masukkan Tanggal Lahir Ibu" name="tgl_lahir_ibu">
                        <?php echo form_error('tgl_lahir_ibu','<div class="text-small text-danger">','</div>') ?>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-2 form-control-label">Pekerjaan Ibu</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" placeholder="Masukkan Pekerjaan Ibu" name="pekerjaan_ibu">
                        <?php echo form_error('pekerjaan_ibu','<div class="text-small text-danger">','</div>') ?>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-2 form-control-label">Pendidikan Ibu</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" placeholder="Masukkan Pendidikan Ibu" name="pendidikan_ibu">
                        <?php echo form_error('pendidikan_ibu','<div class="text-small text-danger">','</div>') ?>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-2 form-control-label">Penghasilan Ibu</label>
                      <div class="col-sm-10 mb-3">
                        <select name="penghasilan_ibu" class="form-control">
                          <option>Pilih</option>
                          <option>-3 Juta/bln</option>
                          <option> 3 - 5 Juta/bln</option>
                          <option> 5 - 7 Juta/bln</option>
                          <option> + 7 Juta/bln</option>
                        </select>
                        <?php echo form_error('penghasilan_ibu','<div class="text-small text-danger">','</div>') ?>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-2 form-control-label">Nomor Telepon / HP</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" placeholder="Masukkan Nomor Telepon / HP" name="no_hp_ibu">
                        <?php echo form_error('no_hp_ibu','<div class="text-small text-danger">','</div>') ?>
                      </div>
                    </div>

                    <br>
                    <div class="card-header d-flex align-items-center">
                  <h4> D. CATATAN KHUSUS SISWA</h4>
                    </div>

                    <div class="form-group row">
                    </div>
                    <br>

                     <span><h4>(Kedekatan dengan SD Unggulan Aisyiyah / Muhammadiyah)</h4></span>
                    <br>
                     <p>
                      * Mempunyai Kakak / adik di SDUA Bantul
                    </p><br>

                    <div class="form-group row">
                      <label class="col-sm-2 form-control-label">1. Nama</label>
                      <div class="col-sm-10">
                      <p>Jika tidak ada isi dengan tanda strip atau isi dengan kalimat 'Tidak ada'</p>
                        <input type="text" class="form-control" placeholder="Masukkan Nama kakak / adik 1" name="nama_1">
                        <?php echo form_error('nama_1','<div class="text-small text-danger">','</div>') ?>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-2 form-control-label">Kelas</label>
                      <div class="col-sm-10">
                      <p>Jika tidak ada isi dengan tanda strip atau isi dengan kalimat 'Tidak ada'</p>
                        <input type="text" class="form-control" placeholder="Masukkan Kelas kakak / adik 1" name="kelas_1">
                        <?php echo form_error('kelas_1','<div class="text-small text-danger">','</div>') ?>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-2 form-control-label">2. Nama</label>
                      <div class="col-sm-10">
                      <p>Jika tidak ada isi dengan tanda strip atau isi dengan kalimat 'Tidak ada'</p>
                        <input type="text" class="form-control" placeholder="Masukkan Nama kakak / adik 2" name="nama_2">
                        <?php echo form_error('nama_2','<div class="text-small text-danger">','</div>') ?>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-2 form-control-label">Kelas</label>
                      <div class="col-sm-10">
                      <p>Jika tidak ada isi dengan tanda strip atau isi dengan kalimat 'Tidak ada'</p>
                        <input type="text" class="form-control" placeholder="Masukkan Kelas kakak / adik 2" name="kelas_2">
                        <?php echo form_error('kelas_2','<div class="text-small text-danger">','</div>') ?>
                      </div>
                    </div>
                    <br>

                    <span><h4>Mempunyai Hubungan Kekerabatan dengan Keluarga SDUA Bantul (Putra Guru/Karyawan)</h4></span>
                    <br>
                   
                    <br>

                    <div class="form-group row">
                      <label class="col-sm-2 form-control-label">Hubungan</label>
                      <div class="col-sm-10">
                      <p>Jika tidak ada isi dengan tanda strip atau isi dengan kalimat 'Tidak ada'</p>
                        <input type="text" class="form-control" placeholder="Masukkan Hubungan" name="hubungan">
                        <?php echo form_error('hubungan','<div class="text-small text-danger">','</div>') ?>
                      </div>
                    </div>

                    <br><br>
                    <span><h4>Orang Tua Pimpinan Aktif Muhammadiyah / Ortom</h4></span>
                    <br><br>

                    <div class="form-group row">
                      <label class="col-sm-2 form-control-label">1.</label>
                      <div class="col-sm-10">
                      <p>Jika tidak ada isi dengan tanda strip atau isi dengan kalimat 'Tidak ada'</p>
                        <input type="text" class="form-control"  name="ortu_1">
                        <?php echo form_error('ortu_1','<div class="text-small text-danger">','</div>') ?>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-2 form-control-label">2.</label>
                      <div class="col-sm-10">
                      <p>Jika tidak ada isi dengan tanda strip atau isi dengan kalimat 'Tidak ada'</p>
                        <input type="text" class="form-control"  name="ortu_2">
                        <?php echo form_error('ortu_2','<div class="text-small text-danger">','</div>') ?>
                      </div>
                    </div>

                    <p>
                      *Mohon dituliskan keterangan / Instansi / Lembaga Muhammadiyah / Aisyiyah yang dimaksuda
                    </p>

                    <div class="form-group row">
                      <label class="col-sm-2 form-control-label">Lain - lain</label>
                      <div class="col-sm-10">
                      <p>Jika tidak ada isi dengan tanda strip atau isi dengan kalimat 'Tidak ada'</p>
                        <input type="text" class="form-control" placeholder="Masukkan lain -lain" name="dll">
                        <?php echo form_error('dll','<div class="text-small text-danger">','</div>') ?>
                      </div>
                    </div>
                    <br>

                    <div class="card-header d-flex align-items-center">
                  <h4> E. RIWAYAT KESEHATAN</h4>
                    </div>
                    <br>

                    <div class="form-group row">
                      <label class="col-sm-2 form-control-label">Riwayat Kesehatan</label>
                      <div class="col-sm-10">
                      <p>Jika tidak ada isi dengan tanda strip atau isi dengan kalimat 'Tidak ada'</p>
                        <input type="text" class="form-control" placeholder="Masukkan Riwayat Kesehatan" name="riwayat_kesehatan">
                        <?php echo form_error('riwayat_kesehatan','<div class="text-small text-danger">','</div>') ?>
                      </div>
                    </div>
                    <br>

                    <!-- <div class="card-header d-flex align-items-center">
                  <h4> F. DENAH TEMPAT TINGGAL</h4>
                    </div>
                    <br>

                    <div class="form-group row">
                      <label class="col-sm-2 form-control-label">Denah Tempat Tinggal</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" placeholder="Masukkan Denah Tempat Tinggal">
                      </div>
                    </div>
                    <br> -->

                    <div class="card-header d-flex align-items-center">
                  <h4> F. MASUKKAN FILE YANG DIBUTUHKAN</h4>
                    </div>

                    <p>
                      *File harus berformat JPG/JPEG/PNG
                    </p>
                    <br>

                    <div class="form-group row">
                      <label class="col-sm-2 form-control-label">Upload Akte Kelahiran</label>
                      <div class="col-sm-10">
                        <input type="file" class="form-control" placeholder="Masukkan Akte Kelahiran" name="akte_kelahiran">
                      </div>
                    </div>
                    <br>

                    <!-- <div class="form-group row">
                      <label class="col-sm-2 form-control-label">Upload Ijasah TK</label>
                      <div class="col-sm-10">
                        <input type="file" class="form-control" placeholder="Masukkan Ijasah TK" name="ijazah">
                      </div>
                    </div>
                    <br> -->
                    
                    <div class="line"></div>
                    <div class="form-group row">
                      <div class="col-sm-4 offset-sm-2">
                        <button type="submit" class="btn btn-secondary"><b>Batal</b></button>
                        <button type="submit" class="btn btn-primary"><b>Kirim</b></button>
                      </div>
                    </div>
                </div>
                <?php echo form_close(); ?>
              </div>
            </div>
           
            <!-- </form> -->
          </div>
        </div>

      </section>
      <footer class="main-footer">
        <div class="container-fluid">
          <div class="row">
            <div class="col-sm-6">
              <p></p>
            </div>
            <div class="col-sm-6 text-right">
              <p>SD UNGGULAN AISYIYAH &copy; 2020</p>
            </div>
          </div>
        </div>
      </footer>
    </div>
    <!-- JavaScript files-->
    <script src="<?php echo base_url() ?>assets/vendor/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url() ?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?php echo base_url() ?>assets/js/grasp_mobile_progress_circle-1.0.0.min.js"></script>
    <script src="<?php echo base_url() ?>assets/vendor/jquery.cookie/jquery.cookie.js"> </script>
    <script src="<?php echo base_url() ?>assets/vendor/chart.js/Chart.min.js"></script>
    <script src="<?php echo base_url() ?>assets/vendor/jquery-validation/jquery.validate.min.js"></script>
    <script src="<?php echo base_url() ?>assets/vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js"></script>
    <!-- Main File-->
    <script src="<?php echo base_url() ?>assets/js/front.js"></script>
  </body>
</html>