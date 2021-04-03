<?php 

class Home extends CI_Controller
{
	
	// function __construct(argument)
	// {
		
	// }

	public function index()
	{
		if ($this->session->userdata('email')) {
			$user = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();

			$data['user'] = $user['name'];
			$this->load->view('template/user/header', $data);
			$this->load->view('template/user/topbar', $data);
			$this->load->view('home');
			$this->load->view('template/user/footer');
		} else {
			$data['user'] = 'Pengunjung';
			$this->load->view('template/user/header', $data);
			$this->load->view('template/user/topbar', $data);
			$this->load->view('home');
			$this->load->view('template/user/footer');
		}
	}

	public function profile_perusahaan()
	{
		$user = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();

		$data['user'] = $user['name'];
		$this->load->view('template/user/header', $data);
		$this->load->view('template/user/topbar', $data);
		$this->load->view('profile_perusahaan');
		$this->load->view('template/user/footer');	
	}

	public function galeri()
	{
		$user = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
		$data['user'] = $user['name'];
		$this->load->view('template/user/header', $data);
		$this->load->view('template/user/topbar', $data);
		$this->load->view('galeri');
		$this->load->view('template/user/footer');
	}

	public function lowongan()
	{
		$user = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
		$data['loker'] = $this->db->get_where('loker')->result_array();
		$data['user'] = $user['name'];
		$this->load->view('template/user/header', $data);
		$this->load->view('template/user/topbar', $data);
		$this->load->view('lowongan');
		$this->load->view('template/user/footer');
	}

	public function tentang_kami()
	{
		$user = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
		$data['user'] = $user['name'];
		$this->load->view('template/user/header', $data);
		$this->load->view('template/user/topbar', $data);
		$this->load->view('tentang_kami');
		$this->load->view('template/user/footer');	
	}

	public function info()
	{
		$user = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
		$data['terima'] = $this->db->get_where('terima')->result_array();
		$data['user'] = $user['name'];
		$this->load->view('template/user/header', $data);
		$this->load->view('template/user/topbar', $data);
		$this->load->view('info', $data);
		$this->load->view('template/user/footer');	
	}

	public function profil()
	{
		$user = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
		$data['karyawan'] = $this->db->get_where('karyawan', ['email' => $this->session->userdata('email')])->row_array();
		$data['user'] = $user['name'];
		$this->load->view('template/user/header', $data);
		$this->load->view('template/user/topbar', $data);
		$this->load->view('profil', $data);
		$this->load->view('template/user/footer');	
	}

	public function update_cv()
	{
		$user = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
		$data['karyawan'] = $this->db->get_where('karyawan', ['email' => $this->session->userdata('email')])->row_array();

		$data['user'] = $user['name'];
		$this->load->view('template/user/header', $data);
		$this->load->view('template/user/topbar', $data);
		$this->load->view('update_cv', $data);
		$this->load->view('template/user/footer');	
	}

	function logout(){
	    $this->session->sess_destroy();
	    redirect(base_url().'home');
	  }
}