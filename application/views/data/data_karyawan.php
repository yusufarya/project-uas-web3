<div class="container-fluid">

	<?= $this->session->flashdata('pesan'); ?>
	<h3 class="display4">Data Pelamar</h3>
	<table class="table table-hover table-bordered">
		<thead>
			<tr>
				<th>#</th>
				<th>Nama Lengkap</th>
				<th>Jenis Kelamin</th>
				<th>Tempat Lahir</th>
				<th>Tanggal Lahir</th>
				<th>Kota</th>
				<th>No Telp</th>
				<th>Email</th>
				<th>Aksi</th>
			</tr>
		</thead>
		<tbody>
			<?php 
			$no = 1;
			foreach ($karyawan as $k) :
			?>
			<tr>
				<td scope="row"><?= $no++ ?></td>
				<td><?= $k['name']; ?></td>
				<td><?= $k['jenis_kel']; ?></td>
				<td><?= $k['tempat_lahir']; ?></td>
				<td><?= $k['tanggal_lahir']; ?></td>
				<td><?= $k['kota']; ?></td>
				<td><?= $k['no_telp'] ?></td>
				<td><?= $k['email']; ?></td>
				<td><?php echo anchor('data/detail_pelamar/'.$k['id'], '<div class="btn btn-dark btn-sm"><i class="fas fa-detail"> Detail</i></div>') ?></td>
			</tr>
			<?php endforeach; ?>
		</tbody>
		
	</table>

	<div class="container">
		<?= $this->session->flashdata('pesan1'); ?>
		<!-- card data table -->
		<div class="card">
			<div class="card-header">Pelamar yang sudah mengirimkan dokumen</div>
			<div class="card-body">
				<table class="table">
					<thead>
						<tr>
							<th>Kode lamar</th>
							<th>Email</th>
							<th>Tanggal lamar</th>		
							<th>Dokumen</th>
							<th colspan="2">Aksi</th>
						</tr>
					</thead>
					
					<?php
					$no = 1;
					foreach ($lamar as $l) : ?>
					<tr>
						<td><?= $no++ ?></td>
						<td><?= $l['email'] ?></td>
						<td><?= $l['tgl_lamar'] ?></td>
						<td><?= $l['attachment'] ?></td>
						<td><?php echo anchor('data/dokumen_lamar/'.$l['id'], '<div class="btn btn-info btn-sm"><i class="fas fa-search-plus"></i> Detail</div>') ?></td>
						<td><?php echo anchor('data/terima/'.$l['id'], '<div class="btn btn-primary btn-sm"><i class="fas fa-book"></i> Terima</div>') ?></td>
					</tr>
					<?php endforeach; ?>
				</table>
			</div>
		<!-- End card -->

		</div>
	<!-- End container -->
	</div>
	<hr class="devider m-3"><br>

<!-- End Container-fluid -->
</div>
