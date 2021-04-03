<div class="container">
	<h4><i class="fa fa-book"></i> Update CV</h4><hr>
		<form action="<?= base_url('member/pelamar'); ?>" method="post">
			<div class="form-group">
				<label>Nama</label>
				<input type="text" name="name" class="form-control" value="<?= $karyawan['name'] ?>">
			</div>
			<div class="form-group">
				<label>Email</label>
				<input type="text" name="email" class="form-control" value="<?= $karyawan['email'] ?>">
			</div>
			<div class="form-group">
				<label>No Telp</label>
				<input type="text" name="no_telp" class="form-control" value="<?= $karyawan['no_telp'] ?>">
			</div>
			<div class="form-group">
				<label>Alamat Lengkap</label>
				<textarea class="form-control" name="alamat" rows="3">....</textarea>
			</div>
			<div class="form-group">
				<label>Tempat Lahir</label>
				<input type="text" name="tempat_lahir" class="form-control" value="<?= $karyawan['tempat_lahir'] ?>">
			</div>
			<div class="form-group">
				<label>Tanggal Lahir</label>
				<input type="text" name="tanggal_lahir" class="form-control" placeholder="0000-00-00" value="<?= $karyawan['tanggal_lahir'] ?>">
			</div>
			<div class="form-group">
				<label>Kota Asal</label>
				<input type="text" name="kota" class="form-control" value="<?= $karyawan['kota'] ?>">
			</div>
			<div class="form-group">
				<label>Kenegaraan</label>
				<input type="text" name="negara" class="form-control" value="<?= $karyawan['negara'] ?>">
			</div>
			<div class="form-group">
				<label>Kode Pos</label>
				<input type="text" name="kode_pos" class="form-control" value="<?= $karyawan['kode_pos'] ?>">
			</div>
			<div class="form-group">
				<label>Jenis Kelamin</label>
				<input type="text" name="jenis_kel" class="form-control" value="<?= $karyawan['jenis_kel'] ?>">
			</div>
			<div class="form-group">
				<label>Tinggi Badan</label>
				<input type="text" name="tinggi_badan" class="form-control" value="<?= $karyawan['tinggi_badan'] ?>">
			</div>
			<div class="form-group">
				<label>Berat Badan</label>
				<input type="text" name="berat_badan" class="form-control" value="<?= $karyawan['berat_badan'] ?>">
			</div>

			<button type="submit" class="btn btn-primary btn-lg">Kirim</button>
		</form>
	
</div>