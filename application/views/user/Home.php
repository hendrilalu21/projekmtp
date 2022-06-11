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
            <li class="active"><a href="<?=site_url('c_home')?>"> <i class="icon-home"></i>Beranda  </a></li>
            <li><a href="<?=site_url('c_psbonline')?>"> <i class="fa fa-edit"></i>Daftar PSB Online
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
                  <div class="brand-text d-none d-md-inline-block"><strong class="text-primary">SD UNGGULAN AISYIYAH</strong></div></a></div>
              <ul class="nav-menu list-unstyled d-flex flex-md-row align-items-md-center">
                
          </div>
        </nav>
      </header>
      <!-- Counts Section -->
      <section class="dashboard-counts section-padding">
        <div class="container-fluid">
          <div class="row">
            <!-- Count item widget-->
            <div class="col-md-12 col-6">
              <div class="wrapper count-title d-flex">
                <div class="icon"></i></div>
                <div class="name"><strong class="text-uppercase"><h1>Selamat Datang Di Pendaftaran SD UNGGULAN AISYIYAH BANTUL</h1></strong>
                </div>
              </div>
            </div>
            
      </section>
      <!-- Header Section-->
      <section class="dashboard-header section-padding">
        <div class="container-fluid">
          <div class="row d-flex align-items-md-stretch">
            <!-- To Do List-->
            <div class="col-lg-10 col-md-6">
              <div class="card to-do">
              <?php echo $this->session->flashdata('pesan_psbonline') ?>
                <h2 class="display h4">SD UNGGULAN AISYIYAH BANTUL</h2>
                <p>SDUA</p>
                <ul class="check-lists list-unstyled">
                  <li class="d-flex align-items-center"> 
                    <label><h3>Halaman ini merupakan resmi Pendaftaran Peserta Didik Baru SD Unggulan Aisyiyah Untuk melakukan pendaftaran, silahkan klik menu Daftar PSB atau jika sudah mendaftar silahkan cetak formulir pendaftarannya dan surat keterangan orangtua/wali.</h3></label>
                  </li>
                  
                </ul>
              </div>
                  <p class="center-block download-buttons">
                      <a href="<?=site_url('c_pmanual')?>" class="btn btn-default btn-lg"><i
                                class="fa fa-pencil"></i><b>DAFTAR MANUAL</b></a>
                      <a href="<?=site_url('c_psbonline')?>" class="btn btn-primary btn-lg"><i
                                class="fa fa-tasks"></i> <b>DAFTAR ONLINE</b></a>
                  </p>
            </div>
            
          </div>
        </div>
      </section>
      <!-- Statistics Section-->
      <section class="statistics">
        <div class="container-fluid">
          <div class="row d-flex">
            <div class="col-lg-4">
              <!-- Income-->
              
            </div>
            <div class="col-lg-4">
              <!-- Monthly Usage-->
              
            </div>
            
          </div>
        </div>
      </section>
      <!-- Updates Section -->
      <section class="mt-30px mb-30px">
        <div class="container-fluid">
          <div class="row">
            <div class="col-lg-4 col-md-12">
              <!-- Recent Updates Widget          -->
              
              <!-- Recent Updates Widget End-->
            </div>
            <div class="col-lg-4 col-md-6">
              <!-- Daily Feed Widget-->
              
              <!-- Daily Feed Widget End-->
            </div>
            <div class="col-lg-4 col-md-6">
              <!-- Recent Activities Widget      -->
             
            </div>
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
    <script src="<?php echo base_url() ?>assets/js/charts-home.js"></script>
    <!-- Notifications-->
    <!-- <script src="<?php echo base_url() ?>assets/vendor/messenger-hubspot/build/js/messenger.min.js">   </script>
    <script src="<?php echo base_url() ?>assets/vendor/messenger-hubspot/build/js/messenger-theme-flat.js">       </script>
    <script src="<?php echo base_url() ?>assets/js/home-premium.js"> </script> -->
    <!-- Main File-->
    <script src="<?php echo base_url() ?>assets/js/front.js"></script>
  </body>
</html>