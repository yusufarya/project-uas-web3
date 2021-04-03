<div class="container">
	<!-- card from css bootstrap -->
	<div class="card">
		<div class="card-header"><b>Detail Pelamar</b></div>
		<div class="card-body">
			<?php foreach ($karyawan as $k) : ?>
			<table class="table table-hover">
				<tr>
					<td>Nama</td>
					<td><strong><?= $k->name ?></strong></td>
				</tr>
				<tr>
					<td>Jenis Kelamin</td>
					<td><strong><?= $k->jenis_kel ?></strong></td>
				</tr>
				<tr>
					<td>Tempat Lahir</td>
					<td><strong><?= $k->tempat_lahir ?></strong></td>
				</tr>
				<tr>
					<td>Tanggal Lahir</td>
					<td><strong><?= $k->tanggal_lahir ?></strong></td>
				</tr>
				<tr>
					<td>Alamat</td>
					<td><strong><?= $k->alamat ?></strong></td>
				</tr>
				<tr>
					<td>Kota</td>
					<td><strong><?= $k->kota ?></strong></td>
				</tr>
				<tr>
					<td>Negara</td>
					<td><strong><?= $k->negara ?></strong></td>
				</tr>
				<tr>
					<td>Kode Pos</td>
					<td><strong><?= $k->kode_pos ?></strong></td>
				</tr>
				<tr>
					<td>No Telp</td>
					<td><strong><?= $k->no_telp ?></strong></td>
				</tr>
				<tr>
					<td>Tinggi Badan</td>
					<td><strong><?= $k->tinggi_badan ?></strong></td>
				</tr>
				<tr>
					<td>Berat Badan</td>
					<td><strong><?= $k->berat_badan ?></strong></td>
				</tr>
				<tr>
					<td colspan="2" align="center"> <a href="<?= base_url('data') ?>" class="btn btn-dark">  Kembali </td>
				</tr>
			</table>
		<?php endforeach; ?>
		</div>
	</div>
		

	</div>
</div>