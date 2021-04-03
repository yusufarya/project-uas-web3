<div class="container-fluid">
	<div class="card">
		<div class="card-header">Dokumen</div>
		<div class="card-body">
			<?php foreach ($lamar as $l) : ?>
				<table class="table">
					<tr>
						<td>Email</td>
						<td><strong><?= $l->email ?></strong></td>
					</tr>
					<tr>
						<td>Attachment</td>
						<td><strong><?= $l->attachment ?></strong></td>
					</tr>
					<tr>
						<td>Tanggal Lamar</td>
						<td><strong><?= $l->tgl_lamar ?></strong></td>
					</tr>
					<tr>
						<td>Kode Loker</td>
						<td><strong><?= $l->kd_loker ?></strong></td>
					</tr>

				</table>
				<a class="btn btn-info" href="<?= base_url('data') ?>">Kembali</a>
			<?php endforeach ; ?>
		</div>
	</div>

	</div>
</div>