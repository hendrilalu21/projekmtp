<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pengaturan Pengumuman</title>
</head>
<body>
    <div class="content-wrapper container">
        <div class="row ml-3">
            <div class="col-lg-6 mt-2">
                <h2 class="page-header">Pengaturan Pengumuman</h2>
                <?php echo $this->session->flashdata('pesan_pengumuman') ?>
                <div class="panel panel-default">
                    
                                    <!-- /.panel-heading -->
                    <div class="panel-body">
                        <div class="table-responsive">
                        <?php foreach ($atur_info as $ai) { ?>
                            <form role="form" method="post" action="<?php echo base_url().'c_pengaturan_pengumuman/update'; ?>">
                                <table class="table table-striped table-bordered table-hover">
                                    <tbody>
                                       
                                        <tr>
                                            <td><b>Pengaturan Aktif/Tidak Kunci Masuk</b></td>
                                            <td>
                                            <!-- <select class="form-control" name="status_siswa">
                                                <option>Belum diverifikasi</option>
                                                <option>Diterima</option>
                                                <option>Tidak Diterima</option>
                                                </select> -->
                                                <select name="opsi" class="form-control" >
                                                <option value="">-PILIH-</option>
                                                <?php if($ai->opsi=='Buka'):?>
                                                    <option value="Buka" selected>Buka</option>
                                                    <option value="Tutup">Tutup</option>
                                                <?php elseif($ai->opsi=='Tutup'):?>
                                                    <option value="Buka">Buka</option>
                                                    <option value="Tutup" selected>Tutup</option>
                                                <?php endif;?>
                                                </select>
                                            </td>
                                         </tr>
                                    </tbody>
                                </table>
                                <button type="submit" class="btn btn-primary">Update</button>
                            </form>
                            <?php } ?>
                        </div>
                         <!-- /.table-responsive -->
                    </div>
                    <!-- /.panel-body -->
                </div>
                <!-- /.panel -->
            </div>
        </div>
    </div>
</body>
</html>