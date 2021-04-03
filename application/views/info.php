<div class="container-fluid">
	<div class="card">
		<div class="card-body">
			<b>Data keputusan pelamar yangg di terima untuk mengikuti tes dan interview</b>
		</div>

		<table class="table table-bordered">
			<tr>
				<th>#</th>
				<th>Nama</th>
				<th>Email</th>
				<th>Jenis Kelamin</th>
				<th>Tanggal Lamar</th>
				<th>Aksi</th>
			</tr>
			<?php 
			$no = 1; 
			foreach ($terima as $t) : ?>
			<tr>
				<td><?= $no++ ?></td>
				<td><?= $t['name'] ?></td>
				<td><?= $t['email'] ?></td>
				<td><?= $t['jenis_kel'] ?></td>
				<td><?= $t['tgl_lamar'] ?></td>
				<td><?php echo anchor('data/download/'.$t['id'], '<div class="btn btn-info btn-sm"><i class="fas fa-download"></i> Cetak Bukti</div>') ?></td>
			</tr>
		<?php endforeach; ?>
		</table>
	</div><br><hr><br><br><br><br><br><br><br><br><br><br><br><br><br>

</div>
</div>