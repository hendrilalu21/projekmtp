<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>SDUA</title>
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
  <body >
    <!-- Side Navbar -->

    <div class="page">
      <div class="container">
      <BR>  </BR>
      <br>
      <img src="<?php echo base_url() ?>assets/img/LogoSDUA.jpg" alt="person" width="150px" style="margin-bottom:-75px; margin-left:100px; margin-top:-50px; " ><br>
      <center><H1>SD UNGGULAN AISIYAH BANTUL</H1></center>
      <center>Jl. Wakhid Hasyim No. 60 Palbapang , Kec. Bantul, Bantul, DIY 55713</center>
      <br>
      <hr>
      <H2 class="center"><b>Bukti Pendaftaran</b></H2>
      </div>
      <section class="col-sm-12">
      <div class="container">
           
            <table class="table table-stdiped table-bordered table-hover">
                <tbody>
                    <?php foreach ($cari as $ds1) { ?>
                        
                    <tr>
                        <td>Nomor Pendaftaran</td>
                        <td><b><?php echo $ds1->kode_pendaftaran ?></b></td>
                    </tr>
                    <tr>
                        <td>Tanggal Pendaftaran</td>
                        <td><b><?php echo $ds1->tgl_pendaftaran ?></b></td>
                    </tr>
                    <tr>
                        <td colspan="3"><b>DATA SISWA</b></td>
                    </tr>
                    <tr>
                        <td>Nama Lengkap</td>
                        <td><?php echo $ds1->nama_lengkap ?></td>
                    </tr>
                    <tr>
                        <td>Jenis Kelamin</td>
                        <td><?php echo $ds1->jenis_kelamin ?></td>
                    </tr>
                    <tr>
                        <td>Tempat Lahir</td>
                        <td><?php echo $ds1->tmpt_lahir ?></td>
                    </tr>
                    <tr>
                        <td>Tanggal Lahir</td>
                        <td><?php echo $ds1->tgl_lahir ?></td>
                    </tr>
                    <tr>
                        <td>Agama</td>
                        <td><?php echo $ds1->agama ?></td>
                    </tr>
                    <tr>
                        <td>Berat Badan</td>
                        <td><?php echo $ds1->berat_bdn ?></td>
                    </tr>
                    <tr>
                        <td>Tinggi Badan</td>
                        <td><?php echo $ds1->tinggi_bdn ?></td>
                    </tr>
                    <tr>
                        <td>Golongan Darah</td>
                        <td><?php echo $ds1->golongan_darah ?></td>
                    </tr>
                    <tr>
                        <td>Penyakit</td>
                        <td><?php echo $ds1->penyakit ?></td>
                    </tr>
                    <tr>
                        <td>Alergi Makanan</td>
                        <td><?php echo $ds1->alergi_makanan ?></td>
                    </tr>
                    <tr>
                        <td>Alamat Rumah</td>
                        <td><?php echo $ds1->alamat_rumah ?></td>
                    </tr>
                    <tr>
                        <td>Jarak Rumah Ke Sekolah</td>
                        <td><?php echo $ds1->jarak_rumah_kesekolah ?></td>
                    </tr>
                    <?php } ?>

                    <?php foreach ($cari as $ds2) { ?>
                    <tr>
                        <td colspan="3"><b>ASAL MULA ANAK</b></td>
                    </tr>
                    <tr>
                        <td>Masuk Sebagai</td>
                        <td><?php echo $ds2->masuk_sbg ?></td>
                    </tr>
                    <tr>
                        <td>Asal anak</td>
                        <td><?php echo $ds2->asal_anak ?></td>
                    </tr>
                    <tr>
                        <td>Nama TK</td>
                        <td><?php echo $ds2->nama_tk ?></td>
                    </tr>
                    <tr>
                        <td>Alamat TK</td>
                        <td><?php echo $ds2->alamat_tk ?></td>
                    </tr>
                    <tr>
                        <td>Nama Sekolah Asal</td>
                        <td><?php echo $ds2->nama_sklh_asal ?></td>
                    </tr>
                    <tr>
                        <td>Tanggal</td>
                        <td><?php echo $ds2->tanggal ?></td>
                    </tr>
                    <tr>
                        <td>Dari Kelas</td>
                        <td><?php echo $ds2->dari_kls ?></td>
                    </tr>
                    <?php } ?>

                    <?php foreach ($cari as $ds3) { ?>
                    <tr>
                        <td colspan="3"><b>DATA ORANGTUA / WALI</b></td>
                    </tr>
                    <tr>
                        <td>Nama Ayah</td>
                        <td><?php echo $ds3->nama_ayah ?></td>
                    </tr>
                    <tr>
                        <td>Tempat Lahir Ayah</td>
                        <td><?php echo $ds3->tmpt_lahir_ayah ?></td>
                    </tr>
                    <tr>
                        <td>Tanggal Lahir Ayah</td>
                        <td><?php echo $ds3->tgl_lahir_ayah ?></td>
                    </tr>
                    <tr>
                        <td>Pekerjaan Ayah</td>
                        <td><?php echo $ds3->pekerjaan_ayah ?></td>
                    </tr>
                    <tr>
                        <td>Pendidikan Ayah</td>
                        <td><?php echo $ds3->pendidikan_ayah ?></td>
                    </tr>
                    <tr>
                        <td>Penghasilan Ayah</td>
                        <td><?php echo $ds3->penghasilan_ayah ?></td>
                    </tr>
                    <tr>
                        <td>Tlp/HP Ayah</td>
                        <td><?php echo $ds3->no_hp_ayah ?></td>
                    </tr>
                        <td>Nama Ibu</td>
                        <td><?php echo $ds3->nama_ibu ?></td>
                    </tr>
                    <tr>
                        <td>Tempat Lahir Ibu</td>
                        <td><?php echo $ds3->tmpt_lahir_ibu ?></td>
                    </tr>
                    <tr>
                        <td>Tanggal Lahir Ibu</td>
                        <td><?php echo $ds3->tgl_lahir_ibu ?></td>
                    </tr>
                    <tr>
                        <td>Pekerjaan Ibu</td>
                        <td><?php echo $ds3->pekerjaan_ibu ?></td>
                    </tr>
                    <tr>
                        <td>Pendidikan Ibu</td>
                        <td><?php echo $ds3->pendidikan_ibu ?></td>
                    </tr>
                    <tr>
                        <td>Penghasilan Ibu</td>
                        <td><?php echo $ds3->penghasilan_ibu ?></td>
                    </tr>
                    <tr>
                        <td>Tlp/HP Ibu</td>
                        <td><?php echo $ds3->no_hp_ibu ?></td>
                    </tr>
                    <?php } ?>

                   
                </tbody>
            </table>
            <a href="JavaSCript:window.print()"><button class="btn btn-primary mt-4"><i class="fa fa-print fa-fw"></i>PRINT</button></a>
        </div>

        </section>
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