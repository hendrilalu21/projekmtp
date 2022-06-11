<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Dashboard</title>
</head>

  <!-- /.navbar -->

  

  <!-- Content Wrapper. Contains page content -->
  <body>
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0 text-dark">Dashboard</h1>
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->

      <!-- Main content -->
      <section class="content">
        <div class="container-fluid">
          <!-- Small boxes (Stat box) -->
          <div class="row">
            
            <!-- ./col -->
            <div class="col-lg-3 col-6">
              <!-- small box -->
              <div class="small-box bg-primary">
                <div class="inner">
                  <!-- <h3>53<sup style="font-size: 20px">%</sup></h3> -->
                  <br>
                  <p>Pengumuman</p>
                </div>
                <div class="icon">
                  <i class="fas fa-bullhorn"></i>
                </div>
                <a href="<?=site_url('c_pengaturan_pengumuman')?>" class="small-box-footer">View Details <i class="fas fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <div class="col-lg-3 col-6">
              <!-- small box -->
              <div class="small-box bg-danger">
                <div class="inner" >
                  <!-- <h3>150</h3> -->
                  <br>
                  <p>Siswa Tidak Diterima</p>
                </div>
                <div class="icon">
                  <i class="fas fa-user-times"></i>
                </div>
                <a href="<?=site_url('c_siswa_ditolak')?>" class="small-box-footer">View Details <i class="fas fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
              <!-- small box -->
              <div class="small-box bg-success">
                <div class="inner">
                  <!-- <h3>44</h3> -->
                    <br>
                  <p>Siswa Diterima</p>
                </div>
                <div class="icon">
                  <i class="fas fa-user-check"></i>
                </div>
                <a href="<?=site_url('c_siswa_diterima')?>" class="small-box-footer">View Details <i class="fas fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
              <!-- small box -->
              <div class="small-box bg-warning">
                <div class="inner">
                  <!-- <h3>65</h3> -->
                  <br>
                  <p>Siswa Belum diverifikasi</p>
                </div>
                <div class="icon">
                  <i class="fas fa-user-edit"></i>
                </div>
                <a href="<?=site_url('c_belum_verifikasi')?>" class="small-box-footer">View Details <i class="fas fa-arrow-circle-right"></i></a>
              </div>
            </div>

          </div>
        </div>
      </section>
    </div>
  </body>
</html>
