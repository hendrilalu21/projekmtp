<!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="<?=site_url('admin')?>" class="brand-link">
      <img src="<?php echo base_url() ?>assets_admin/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">SDUA</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

          <li class="nav-item">
            <a href="<?=site_url('admin')?>" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>

          <!-- <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-address-card"></i>
              <p>
                 Data Siswa
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?=site_url('c_tambah_siswa')?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Tambah Siswa</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?=site_url('c_semua_siswa')?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Semua Siswa</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?=site_url('c_siswa_diterima')?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Diterima</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?=site_url('c_siswa_ditolak')?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Tidak Diterima</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?=site_url('c_belum_verifikasi')?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Belum Diverifikasi</p>
                </a>
              </li>
            </ul>
          </li> -->

          <li class="nav-item">
            <a href="<?=site_url('c_semua_siswa')?>" class="nav-link">
              <i class="nav-icon fas fa-users"></i>
              <p>
                Data Semua Siswa
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="<?=site_url('c_belum_verifikasi')?>" class="nav-link">
              <i class="nav-icon fas fa-user-edit"></i>
              <p>
                Siswa Belum diverifikasi
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="<?=site_url('c_siswa_diterima')?>" class="nav-link">
              <i class="nav-icon fas fa-user-check"></i>
              <p>
                Siswa diterima
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="<?=site_url('c_siswa_ditolak')?>" class="nav-link">
              <i class="nav-icon fas fa-user-times"></i>
              <p>
                Siswa Tidak diterima
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="<?=site_url('c_pengaturan_daftar')?>" class="nav-link">
              <i class="nav-icon fas fa-book-open"></i>
              <p>
                Buka Tutup Pendaftaran
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="<?=site_url('c_pengaturan_pengumuman')?>" class="nav-link">
              <i class="nav-icon fas fa-bullhorn"></i>
              <p>
                Pengumuman
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="<?=site_url('c_tambah_siswa/tampilan_form_download')?>" class="nav-link">
              <i class="nav-icon far fa-id-badge"></i>
              <p>
                Download Akte
              </p>
            </a>
          </li>

         
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>