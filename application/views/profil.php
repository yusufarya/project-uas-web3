<div class="container">
	<?= $this->session->flashdata('pesan'); ?>
	<h3>Profil Saya</h3>
	<div class="card" style="width: 58rem;">
	  <img src="<?= base_url('assets/img/aaa.png'); ?>" height="205px;" width="250px;" alt="...">
	  <div class="card-body">
	    <h5 class="card-title"><b><?= $user; ?></b></h5>
	    <table class="table table-hover">
	    	<tr>
	    		<td><b>Email</b></td>
	    		<td><?= $karyawan['email'] ?></td>
	    	</tr>
	    	<tr>
	    		<td><b>No Telpon</b></td>
	    		<td><?= $karyawan['no_telp'] ?></td>
	    	</tr>
	    	<tr>
	    		<td><b>Alamat</b></td>
	    		<td><?= $karyawan['alamat'] ?></td>
	    	</tr>
	    	<tr>
	    		<td><b>Tempat Lahir</b></td>
	    		<td><?= $karyawan['tempat_lahir'] ?></td>
	    	</tr>
	    	<tr>
	    		<td><b>Tanggal Lahir</b></td>
	    		<td><?= $karyawan['tanggal_lahir'] ?></td>
	    	</tr>
	    	<tr>
	    		<td><b>Kota Asal</b></td>
	    		<td><?= $karyawan['kota'] ?></td>
	    	</tr>
	    	<tr>
	    		<td><b>Kenegaraan</b></td>
	    		<td><?= $karyawan['negara'] ?></td>
	    	</tr>
	    	<tr>
	    		<td><b>Kode Pos</b></td>
	    		<td><?= $karyawan['kode_pos'] ?></td>
	    	</tr>
	    	<tr>
	    		<td><b>Jenis Kelamin</b></td>
	    		<td><?= $karyawan['jenis_kel'] ?></td>
	    	</tr>
	    	<tr>
	    		<td><b>Tinggi Badan</b></td>
	    		<td><?= $karyawan['tinggi_badan'] ?></td>
	    	</tr>
	    	<tr>
	    		<td><b>Berat Badan</b></td>
	    		<td><?= $karyawan['berat_badan'] ?></td>
	    	</tr>
	    	
	    </table>
	    <a href="<?= base_url('home/update_cv') ?>" class="btn btn-primary">Update CV</a>
	  </div>
	</div>
</div>
<!-- End container -->
</div>