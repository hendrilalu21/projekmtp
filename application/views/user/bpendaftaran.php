<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Bootstrap Dashboard by Bootstrapious.com</title>
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
  <script type="text/javascript">
  function Angkasaja(evt) {
  var charCode = (evt.which) ? evt.which : event.keyCode
  if (charCode > 31 && (charCode < 48 || charCode > 57))

  return false;
  return true;
  }

  </script>
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
          <!-- <div class="sidenav-header-logo"><a href="index.html" class="brand-small text-center"> <strong>S</strong><strong class="text-primary">DDDDDDDDDDDDDDD</strong></a></div> -->
        </div>
        <!-- Sidebar Navigation Menus-->
        <div class="main-menu">
          <h5 class="sidenav-heading">Menu</h5>
          <ul id="side-main-menu" class="side-menu list-unstyled">                  
            <li><a href="<?=site_url('c_home')?>"> <i class="icon-home"></i>Beranda  </a></li>
            <li ><a href="<?=site_url('c_psbonline')?>"> <i class="fa fa-edit"></i>Daftar PSB Online
            </a></li>
            <!-- <li class="active"><a href="<?=site_url('c_print/bdaftar')?>"> <i class="fa fa-check"></i>Bukti Pendaftaran
            </a></li> -->
            <li><a href="<?=site_url('c_plulus')?>"> <i class="fa fa-book"></i>Pengumuman Kelulusan
            </a></li>
            <li><a href="<?=site_url('c_pmanual')?>"> <i class="fa fa-pencil"></i>Form Pendaftaran Manual
            </a></li>
            
            
        </div>
        <div class="admin-menu">
          <h5 class="sidenav-heading">Informasi</h5>
          <ul id="side-admin-menu" class="side-menu list-unstyled"> 
            <li> <a href="#"> <i class="fa fa-exclamation-circle"> </i>Informasi</a></li>
            
          </ul>
        </div>
      </div>
    </nav>
    <div class="page">
      <!-- navbar-->
      <header class="header">
        <nav class="navbar">
          <div class="container-fluid">
            <div class="navbar-holder d-flex align-items-center justify-content-between">
              <div class="navbar-header"><a id="toggle-btn" href="#" class="menu-btn"><i class="icon-bars"> </i></a><a href="index.html" class="navbar-brand">
                  <div class="brand-text d-none d-md-inline-block"><span> </span><strong class="text-primary">Beranda</strong></div></a></div>
              <ul class="nav-menu list-unstyled d-flex flex-md-row align-items-md-center">
                
              </ul>
            </div>
          </div>
        </nav>
      </header>
      <!-- Breadcrumb-->
      <div class="breadcrumb-holder">
        <div class="container-fluid">
          <ul class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html">Beranda</a></li>
            <li class="breadcrumb-item active">Bukti Pendaftaran</li>
          </ul>
        </div>
      </div>
      <section class="forms">
        <div class="container-fluid">
          <!-- Page Header-->
          <header> 
            <h1 class="h3 display">Bukti Pendaftaran</h1>
          </header>
          <div class="row">
              
            <div class="col-lg-12">
              <div class="card">
                <div class="card-header d-flex align-items-center">
                  <h4>BUKTI PENDAFTARAN</h4>
                </div>
                <div class="card-body">
                <!-- <form class="form-horizontal"> -->
                
                <div class="form-group row">

                  <?php echo form_open('c_print/search') ?>
                  <div class="form-group">
                  <label class=" form-control-label"><b>CETAK FORMULIR PENDAFTARAN SISWA BARU :</b></label>
                    <input type="text" class="form-control mb-3" name="keyword" placeholder="Masukkan kode pendaftaran" >
                    <?php echo form_error('keyword','<div class="text-small text-danger">','</div>') ?>
                    <button type="submit" class="btn btn-primary " formtarget="_blank">Cetak</button>
                    <button type="reset" class="btn btn-danger ">Reset</button>
                  </div>
                  <?php echo form_close() ?>

                  <!-- <form action="<?php echo base_url('c_print/print_daftar')?>" action="GET" class="ml-3">
                      <div class="form-group">
                      <label class=" form-control-label"><b>CETAK FORMULIR PENDAFTARAN SISWA BARU :</b></label>
                          <input type="text" class="form-control" name="keyword" placeholder="Masukkan kode pendaftaran">
                          <?php echo form_error('kode_pendaftaran','<div class="text-small text-danger">','</div>') ?>
                          
                      </div>
        

                      <button type="submit" class="btn btn-primary ">Cetak</button>
                      <button type="reset" class="btn btn-danger ">Reset</button>
                  </form> -->

                  

                    <div class="line"></div>

                    

                    <!-- <form action="<?php echo base_url('')?>" action="GET" class="ml-3">
                      <div class="form-group">
                      <label class=" form-control-label"><b>CETAK SURAT KETERANGAN ORANG TUA :</b></label>
                          <input type="text" class="form-control" name="kode_pendaftaran" placeholder="Masukkan kode pendaftaran">
                      </div>
                      <input type="submit" class="btn btn-primary" value="Cetak">
                      <input type="reset" class="btn btn-danger" value="Batal">
                  </form> -->

          
                </div>
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
    <script src="<?php echo base_url() ?>assets/js/charts-custom.js"></script>
    <!-- Main File-->
    <script src="<?php echo base_url() ?>assets/js/front.js"></script>
  </body>
</html>