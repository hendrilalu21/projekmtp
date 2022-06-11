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
    <!-- DataTables CSS-->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/vendor/datatables.net-bs4/css/dataTables.bootstrap4.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/vendor/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css">
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
            <li><a href="<?=site_url('c_psbonline')?>"> <i class="fa fa-edit"></i>Daftar PSB Online
            </a></li>
            <!-- <li><a href="<?=site_url('c_print/bdaftar')?>"> <i class="fa fa-check"></i>Bukti Pendaftaran
            </a></li> -->
            <li class="active"><a href="<?=site_url('c_plulus')?>"> <i class="fa fa-book"></i>Pengumuman Kelulusan
            </a></li>
            <li ><a href="<?=site_url('c_pmanual')?>"> <i class="fa fa-pencil"></i>Formulir Manual & Surat Pernyataan Orang Tua
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
              </ul>
            </div>
          </div>
        </nav>
      </header>
      <!-- Breadcrumb-->
      
      <section>
        <div class="container-fluid">
          <!-- Page Header-->
          <header> 
            <h1 class="display text-bold">Pengumuman Kelusan</h1>
            
          </header>
          <p>
                     *Bagi siswa atau siswi yang lulus silahkan gabung grup whatsapp dibawah
            </p>
          <div class="card">
            <div class="card-header">
              <h4>Data Siswa yang Lulus</h4>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table id="datatable1" style="width: 100%;" class="table">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Nama</th>
                      <th>Kode Pendaftaran</th>
                      <th>Jenis Kelamin</th>
                      <th>Status</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php 

                      $no = 1;
                      foreach ($siswa_diterima as $to) : ?>

                      <tr class="odd gradeX">
                          <td><?php echo $no++ ?></td>
                          <td><?php echo $to->nama_lengkap ?></td>
                          <td><?php echo $to->kode_pendaftaran ?></td>
                          <td><?php echo $to->jenis_kelamin ?></td>
                          <td>
                            <?php 
                                  if($to->status == "diterima") {
                                    echo "<span class='badge badge-success'> Diterima </span>";
                                  } elseif($to->status == "tidak diterima") {
                                    echo "<span class='badge badge-danger'> Tidak diterima </span>";
                                  }
                            ?>
                          </td>
                          <td>
                              <a href="<?php echo base_url('c_print/cetak/').$to->kode_pendaftaran ?>" class="btn btn-sm btn-success" target="_blank">Cetak Bukti Pendaftaran</a>
                          </td>
                      </tr>

                    <?php endforeach; ?>
                    
                  </tbody>
                </table>
                

              </div>
              
            </div>
            
          </div>
        </div>
        <div class="container-fluid">
        <!-- <img src="<?php echo base_url() ?>assets/img/download.jpg" style="width:40px; height:40px;">
        <a href="https://chat.whatsapp.com/GDvgGIp5qLzL2x2QurdOTn"><h3>Group Whatsapp</h3></a> -->

        <a href="https://chat.whatsapp.com/GDvgGIp5qLzL2x2QurdOTn" class="brand-link">
          <img src="<?php echo base_url() ?>assets/img/download.jpg" class="brand-image img-circle elevation-3"
              style="width:40px; height:40px;">
          <span class="brand-text text-bold">Group Whatsapp</span>
        </a>
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
    <!-- Data Tables-->
    <script src="<?php echo base_url() ?>assets/vendor/datatables.net/js/jquery.dataTables.js"></script>
    <script src="<?php echo base_url() ?>assets/vendor/datatables.net-bs4/js/dataTables.bootstrap4.js"></script>
    <script src="<?php echo base_url() ?>assets/vendor/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
    <script src="<?php echo base_url() ?>assets/vendor/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js"></script><?php echo base_url() ?>assets/
    <script src="<?php echo base_url() ?>assets/js/tables-datatable.js"></script>
    <!-- Main File-->
    <script src="<?php echo base_url() ?>assets/js/front.js"></script>
  </body>
</html>