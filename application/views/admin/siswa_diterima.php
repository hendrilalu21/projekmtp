<!DOCTYPE html>
<html>
<head>
	<title>Siswa diTerima</title>
</head>

<body>
	<div class="content-wrapper">
        <div class="container">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <br>
                        <h2 class="page-header">Data Siswa di Terima</h2>
                        <div class="panel panel-default">
                            <hr>
                            <div class="panel-body">
                                <table  width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama siswa</th>
                                            <th>Kode Pendaftaran</th>
                                            <th>Tanggal Pendaftaran</th>
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
                                            <td><?php echo $to->tgl_pendaftaran?></td>
                                            <td>
                                                <a href="<?php echo base_url('c_detail_siswa/index/').$to->kode_pendaftaran ?>" class="btn btn-sm btn-success"><i class="fas fa-eye"></i></a>
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