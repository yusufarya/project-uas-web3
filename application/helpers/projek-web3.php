<?php 

function cek_login()
{
	$ci = get_instance();

	if (!$ci->session->userdata('email')) {
		$ci->session->set_flashdata('pesan', '<div class="allert allert-danger" role="allert">Akses ditolak. Anda belum login!! </div>');
		redricert('auth');
	}else{
		 $role_id = $ci->session->userdata('role_id'); 
	}
}