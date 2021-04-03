<?php

class Dashboard extends CI_Controller
{

	public function index()
	{
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['title'] = 'Projek-UAS Univ-BSI || Penerimaan Karyawan';
		$this->load->view('template/header', $data);
		$this->load->view('template/sidebar');
		$this->load->view('template/topbar');
		$this->load->view('template/dashboard');
		$this->load->view('template/footer');
	}

	public function loker()
	{
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['loker'] = $this->db->get_where('loker')->result_array();
		$data['title'] = 'Projek-UAS Univ-BSI || Penerimaan Karyawan';
		$this->load->view('template/header', $data);
		$this->load->view('template/sidebar');
		$this->load->view('template/topbar');
		$this->load->view('loker');
		$this->load->view('template/footer');
	}
}