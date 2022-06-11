<div class="content-wrapper">
	<section class="content">
		<?php foreach ($verif_semua_siswa as $vss) { ?>

		<form action="<?php echo base_url().'c_semua_siswa/update'; ?>" method="post">
			<div class="form-group">
				<label>Nama</label>
				<input type="hidden" name="id" class="form-control" value="<?php echo $vss->kode_pendaftaran ?>">
				<!-- <fieldset disabled="disabled"> -->
                    <input type="text" name="nama_lengkap" class="form-control" value="<?php echo $vss->nama_lengkap ?>">
                <!-- </fieldset> -->
			</div>

			<div class="form-group">
				<label>Kode Pendaftaran</label>
				<fieldset disabled="disabled">
                    <input type="text" name="kode_pendaftaran" class="form-control" value="<?php echo $vss->kode_pendaftaran ?>">
                </fieldset>
			</div>

			<div class="form-group">
				<label>status siswa</label>

                

				<select name="status" class="form-control" >
                    <!-- <option value=""><?php echo $vss->status ?></option>
                    <option value="Belum diverifikasi">Belum diverifikasi</option>
                    <option value="Diterima">Diterima</option>
                    <option value="Tidak Diterima">Tidak Diterima</option> -->

                    <option value="">-PILIH-</option>
                    <?php if($vss->status=='Belum diverifikasi'):?>
                        <option value="Belum diverifikasi" selected>Belum diverifikasi</option>
                        <option value="diterima">diterima</option>
                        <option value="tidak diterima">tidak diterima</option>
                    <?php elseif($vss->status=='diterima'):?>
                        <option value="Belum diverifikasi">Belum diverifikasi</option>
                        <option value="diterima" selected>diterima</option>
                        <option value="tidak diterima">tidak Diterima</option>
                    <?php elseif($vss->status=='tidak diterima'):?>
                        <option value="Belum diverifikasi">Belum diverifikasi</option>
                        <option value="diterima">diterima</option>
                        <option value="tidak diterima" selected>tidak diterima</option>
                    <?php endif;?>
                    
                    <!-- <option value="<?php echo $vss->kode_pendaftaran;?>"><?php echo $vss->status_siswa;?></option> -->
                    
                </select>
			</div>
			<button type="submit" class="btn btn-primary">UPDATE</button>
		</form>

		<?php } ?>
	</section>
</div>