<div class="container">
	<?= $this->session->flashdata('pesan'); ?>

	<h4>Upload Dokumen</h4>
	<hr><br>

	<?= form_open_multipart('member/lamar'); ?>
		<div class="form-group">
			<label>Nama</label>
			<input type="text" name="name" class="form-control" placeholder="Nama lengkap...">
			<?= form_error('name', '<small class="text-danger pl-3">', '</small>'); ?>
		</div>
		<div class="form-group">
			<label>Email</label>
			<input type="text" name="email" class="form-control" value="<?= $karyawan['email'] ?>">
			<?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
		</div>
		<div class="form-group">
			<label>Jenis Kelamin</label>
			<div class="form-check">
			  <input class="form-check-input" type="radio" name="jenis_kel" id="jenis_kel" value="Laki-laki" checked>
			  <label class="form-check-label" for="jenis_kel">
			    Laki - laki
			  </label>
			</div>
			<div class="form-check">
			  <input class="form-check-input" type="radio" name="jenis_kel" id="jenis_kel" value="Perempuan">
			  <label class="form-check-label" for="jenis_kel">
			    Perempuan
			  </label>
			</div>
		</div>
		<div class="form-group">
			<label>Upload File</label>
			<div class="custom-file">                                
				<input type="file" class="custom-file-input" id="attachment" name="attachment">
				<label class="custom-file-label" for="attachment">Upload(harus berformat docx)</label> 
			</div>
		</div>
		<div class="form-group">
	    <label for="exampleFormControlSelect1">Pilih Loker</label>
	    <select class="form-control" id="kd_loker" name="kd_loker">
	      <option>1</option>
	      <option>2</option>
	      <option>3</option>
	      <option>4</option>
	    </select>
	  </div>
		<button type="submit" class="btn btn-primary">Kirim</button>
		<br><hr><br><br><br><br>
	<?= form_close(); ?>
</div>

</div>
