<!DOCTYPE html>
<html>
<head>
	<title>Semua Siswa</title>
</head>

<body>
	<div class="content-wrapper">
        <div class="container">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <br>
                        <h2 class="page-header">Data Semua siswa</h2>
                        <div class="panel panel-default">
                            <hr>
                            <a href="<?=site_url('c_tambah_siswa/tampil_tambah')?>" class="btn btn-primary mb-3">Tambah Siswa</a>
                            <?php echo $this->session->flashdata('pesan_update') ?>
                            <?php echo $this->session->flashdata('pesan_tambah') ?>
                            <?php echo $this->session->flashdata('pesan') ?>
                            <div class="panel-body">
                                <table  width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama siswa</th>
                                            <th>Kode Pendaftaran</th>
                                            <th>Status Siswa</th>
                                            <th>Tanggal Pendaftaran</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <?php 

                                        $no = 1;
                                        foreach ($semua_siswa as $to) : ?>
                                        
                                        <tr class="odd gradeX">
                                            <td><?php echo $no++ ?></td>
                                            <td><?php echo $to->nama_lengkap ?></td>
                                            <td><?php echo $to->kode_pendaftaran ?></td>
                                            <td><?php 
                                                if ($to->status == "Belum diverifikasi"){
                                                    echo "<span class='badge badge-warning'> Belum diverifikasi </span>";
                                                } elseif($to->status == "diterima") {
                                                    echo "<span class='badge badge-success'> Diterima </span>";
                                                } elseif($to->status == "tidak diterima") {
                                                    echo "<span class='badge badge-danger'> Tidak diterima </span>";
                                                }
                                                ?>
                                            </td>
                                            <td><?php echo $to->tgl_pendaftaran ?></td>
                                            <td>
                                                <a href="<?php echo base_url('c_detail_siswa/index/').$to->kode_pendaftaran ?>" class="btn btn-sm btn-success"><i class="fas fa-eye"></i></a>
                                                <a href="<?php echo base_url('c_semua_siswa/delete_siswa/').$to->kode_pendaftaran ?>" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></a>
                                                <a href="<?php echo base_url('c_verif/index/').$to->kode_pendaftaran ?>" class="btn btn-sm btn-primary"><i class="fas fa-edit"></i></a>
                                            </td>
                                        </tr>

                                        <?php endforeach; ?>
                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>