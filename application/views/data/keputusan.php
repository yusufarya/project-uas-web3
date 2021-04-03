<div class="container-fluid">
	<div class="card" style="background: #F8F8FF;">
		<div class="card-body" style="padding: 8px;">
			<H4>Data keputusan pelamar yang di terima untuk mengikuti tes dan interview</H4>
		</div>

		<table class="table table-bordered " style="background: #FFF">
			<tr>
				<th>#</th>
				<th>Nama</th>
				<th>Email</th>
				<th>Jenis Kelamin</th>
				<th>Tanggal Lamar</th>
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
			</tr>
		<?php endforeach; ?>
		</table>
	</div>

	</div>
</div>