<div class="container-fluid">
  <h4 class="display-6"><i>WE ARE LOOKING FOR</i></h4>
	<table class="table table-hover">
   <tr>
     <th>Kode</th>
     <th>Loker</th>
     <th>Kualifikasi</th>
     <th>job desk</th>
     <th>Pendidikan</th>
     <th>Aktif</th>
   </tr> 
    <?php
    $no = 1;
    foreach ($loker as $l) {
    ?>
   <tr>
     <td><?= $l['kd_loker'] ?></td>
     <td><?= $l['judul_loker'] ?></td>
     <td><?= $l['kualifikasi'] ?></td>
     <td><?= $l['job_desk'] ?></td>
     <td><?= $l['pendidikan'] ?></td>
     <td><?= $l['aktif'] ?></td>
   </tr>
  <?php } ?>
  </table>
<br>
</div>
<!-- End container-fluid -->
</div>