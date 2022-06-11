<!DOCTYPE html>
<html>
<head>
	<title>Semua Siswa</title>
</head>

<body>
	<div class="content-wrapper">
        <div class="container">
            <table class="table table-stdiped table-bordered table-hover">
                <tbody>
                    <?php foreach ($detail_siswa as $ds1) { ?>
                    <tr>
                        <td>Nomor Pendaftaran</td>
                        <td><b><?php echo $ds1->kode_pendaftaran ?></b></td>
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

                    <?php foreach ($detail_siswa as $ds2) { ?>
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

                    <?php foreach ($detail_siswa as $ds3) { ?>
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

                    <?php foreach ($detail_siswa as $ds4) { ?>
                    <tr>
                        <td colspan="3"><b>CATATAN KHUSUS SISWA</b></td>
                    </tr>
                    <tr>
                        <td colspan="3">
                            <p>Kedekatan dengan SD Unggulan Aisyiyah / Muhammadiyah</p>
                        </td>
                    </tr>
                    <tr>
                        <td>Nama 1</td>
                        <td><?php echo $ds4->nama_1 ?></td>
                    </tr>
                    <tr>
                        <td>Kelas 1</td>
                        <td><?php echo $ds4->kelas_1 ?></td>
                    </tr>
                    <tr>
                        <td>Nama 2</td>
                        <td><?php echo $ds4->nama_2 ?></td>
                    </tr>
                    <tr>
                        <td>Kelas 2</td>
                        <td><?php echo $ds4->kelas_2 ?></td>
                    </tr>
                    <tr>
                        <td colspan="3">
                            <p>Mempunyai Hubungan kekerabatan dengan keluarga SDUA Bantul (Putra Guru/Karyawan</p>
                        </td>
                    </tr>
                    <tr>
                        <td>Hubungan</td>
                        <td><?php echo $ds4->hubungan ?></td>
                    </tr>
                    <tr>
                        <td colspan="3">
                            <p>Orang Tua Pimpinan Aktif Muhammadiyah/Ortom</p>
                        </td>
                    </tr>
                    </tr>
                        <td>1.</td>
                        <td><?php echo $ds4->ortu_1 ?></td>
                    </tr>
                    <tr>
                        <td>2.</td>
                        <td><?php echo $ds4->ortu_2 ?></td>
                    </tr>
                    <tr>
                        <td>Lain-lain</td>
                        <td><?php echo $ds4->dll ?></td>
                    </tr>
                    <tr>
                        <td>Riwayat Kesehatan</td>
                        <td><?php echo $ds4->riwayat_kesehatan ?></td>
                    </tr>
                    <tr>
                        <td>Akte Kelahiran</td>
                        <!-- <td><?php echo $ds4->akte_kelahiran ?></td> -->
                        <td><img src="<?php echo base_url(); ?>assets/akte/<?php echo $ds4->akte_kelahiran ?>" width="240" height="150"></td>
                    </tr>
                    <!-- <tr>
                        <td>Ijazah</td>
                      
                        <td><img src="<?php echo base_url(); ?>assets/akte/<?php echo $ds4->ijazah ?>" width="240" height="150"></td>
                    </tr> -->
                    <?php } ?>
                </tbody>
            </table>
            <a href="<?php echo base_url('c_semua_siswa') ?>" class="btn btn-danger mb-4">Kembali</a>
        </div>
    </div>
</body>
</html>