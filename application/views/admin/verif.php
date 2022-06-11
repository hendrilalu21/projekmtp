<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verifikasi Siswa</title>
</head>
<body>
    <div class="content-wrapper container">
        <div class="row ml-3">
            <div class="col-lg-6">
                <h2 class="page-header">Verifikasi Data Siswa </h2>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Form Edit dan Verifikasi siswa
                    </div>
                                    <!-- /.panel-heading -->
                    <div class="panel-body">
                        <div class="table-responsive">
                        <?php foreach ($verifikasi as $vrf) { ?>
                            <form role="form" method="post" action="<?php echo base_url().'c_verif/update'; ?>">
                                <table class="table table-striped table-bordered table-hover">
                                    <tbody>
                                    
                                        <tr>
                                            <td>Nama</td>
                                            <td>
                                                <fieldset disabled>
                                                <input class="form-control" type="text" name="nama_siswa" value="<?php echo $vrf->nama_lengkap ?>" required=""></fieldset>
                                                <input class="form-control "  type="hidden" name="kode_pendaftaran" value="<?php echo $vrf->kode_pendaftaran ?>"/>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Kode Pendaftaran</td>
                                            <td>
                                                <fieldset disabled>
                                                <input class="form-control" type="text" name="kode_pendaftaran"  value="<?php echo $vrf->kode_pendaftaran ?>" required="" />
                                                </fieldset>
                                            </td>
                                        </tr>
                                       
                                        <tr>
                                            <td>Status Siswa</td>
                                            <td>
                                                <select name="status" class="form-control" >
                                                <option value="">-PILIH-</option>
                                                <?php if($vrf->status=='Belum diverifikasi'):?>
                                                    <option value="Belum diverifikasi" selected>Belum diverifikasi</option>
                                                    <option value="diterima">diterima</option>
                                                    <option value="tidak diterima">tidak diterima</option>
                                                <?php elseif($vrf->status=='diterima'):?>
                                                    <option value="Belum diverifikasi">Belum diverifikasi</option>
                                                    <option value="diterima" selected>diterima</option>
                                                    <option value="tidak diterima">tidak Diterima</option>
                                                <?php elseif($vrf->status=='tidak diterima'):?>
                                                    <option value="Belum diverifikasi">Belum diverifikasi</option>
                                                    <option value="diterima">diterima</option>
                                                    <option value="tidak diterima" selected>tidak diterima</option>
                                                <?php endif;?>
                                                </select>
                                            </td>
                                         </tr>
                                    </tbody>
                                </table>
                                <button type="submit" class="btn btn-primary">Update</button>
                                <a href="<?php echo base_url('c_semua_siswa') ?>" class="btn btn-danger">Kembali</a>
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