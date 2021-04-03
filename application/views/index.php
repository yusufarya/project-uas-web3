<!-- Begin Page Content --> 
<div class="container-fluid"> 
	<div class="row">         
		<div class="col-lg-6 justify-content-x">             
			<?= $this->session->flashdata('pesan'); ?>         
		</div>     
	</div>     


    <!-- Page Heading -->             
    <h1 class="h3 mb-2 text-gray-800"><?= $heading; ?></h1> 

	<div class="card mt-3 mb-3" style="max-width: 540px;">         
		<div class="row no-gutters">             
			<div class="col-md-4">                 
				<img src="<?= base_url('assets/img/aaa.png') ?>" class="card-img" alt="...">             
			</div>             
				<div class="col-md-8">                 
					<div class="card-body">                     
						<h5 class="card-title"><?= $user['name']; ?></h5>                     
						<p class="card-text"><?= $user['email']; ?></p>                     
						<p class="card-text"><small class="text-muted">Jadi member sejak: <br><b><?= date('d F Y', $user['date_created']); ?></b></small></p>
					</div><br>
					<!-- <div class="btn btn-info ml-0 my-2 ml-3">
						<a href="<?= base_url('user/ubahProfil'); ?>" class="text text-white"><i class="fas fa-user-edit"></i> Ubah Profil</a>
					</div> -->
				</div>         
		</div>     
	</div>
</div>

</div>

<br><hr>