<!DOCTYPE html>
<html>
<head>
	<title>Cetak buki</title>
	<style type="text/css">
		button {
			padding: 5px;
			color: white;
		}
	</style>
</head>
<body>

<hr>
<h3 align="center">PT. SUMBERMULIA HASILGUNA</h3><hr>
<p>Perihal : Panggilan Interview 
<?php foreach ($terima as $t) : ?>
	<table>
		<tr>
			<td>Nama 			</td>
			<td><?= $t->name ?></td>
		</tr>	
		<tr>
			<td>Jenis Kelamin	</td>
			<td><?= $t->jenis_kel ?></td>
		</tr>
		<tr>
			<td>Email			</td>
			<td><?= $t->email ?></td>
		</tr>
		<tr>
			<td>Tanggal lamar 	</td>
			<td><?= $t->tgl_lamar ?></td>
		</tr><br>
	</table><hr><br>
	<p>Berdasarkan dokumen yang kami terima pada tanggal <?= $t->tgl_lamar ?>, kami mengundang sdr untuk mengikuti interview pada tanggal 03-08-2020</p><br>
	<p>Diharapkan membawa CV dan berkas pelengkap. <br>
<?php endforeach; ?>
<br><br><br>
<button style="background: blue;" align="center">IT GALERI</button>
</body>
</html>