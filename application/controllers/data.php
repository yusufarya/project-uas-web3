<?php 

class Data extends CI_Controller
{
	
	// function __construct(argument)
	// {
		
	// }

	public function index()
	{
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['karyawan'] = $this->db->get_where('karyawan')->result_array();
		$data['lamar'] = $this->db->get_where('lamar')->result_array();

		$data['title'] = 'Data Pelamar';
		$this->load->view('template/header', $data);
		$this->load->view('template/sidebar');
		$this->load->view('template/topbar');
		$this->load->view('data/data_karyawan', $data);
		$this->load->view('template/footer');
	}

	public function detail_pelamar($id)
	{
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['karyawan'] = $this->ModelKaryawan->detail_pelamar($id);

		$data['title'] = 'Detail Pelamar';

		$this->load->view('template/header', $data);
		$this->load->view('template/sidebar');
		$this->load->view('template/topbar');
		$this->load->view('data/detail_pelamar', $data);
		$this->load->view('template/footer');
	}

	public function dokumen_lamar($id)
	{
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['lamar'] = $this->ModelLamar->dokumen($id);

		$data['title'] = 'Dokumen Pelamar';

		$this->load->view('template/header', $data);
		$this->load->view('template/sidebar');
		$this->load->view('template/topbar');
		$this->load->view('data/dokumen', $data);
		$this->load->view('template/footer');
		
	}

	public function terima()
	{
		$email = $this->input->post('email', true);
		$id = $this->uri->segment(3);
		$l = $this->db->query("select*from lamar where id='$id'")->row();
		
		if ($lamar = $this->db->query("select*from lamar where id='$id'") == false) {
			
			$this->session->set_flashdata('pesan1', '<div class="alert alert-danger alert-message" role="alert">Pelamar ini sudah masuk di daftar terima</div>');
			redirect(base_url('data'));
		} else {
			$data = [
			'id' => $id,
			'name' => $l->name,
			'email' => $l->email,
			'jenis_kel' => $l->jenis_kel,
			'tgl_lamar' => $l->tgl_lamar	
		];	

		$this->db->insert('terima', $data);
		$this->session->set_flashdata('pesan', '<div class="alert alert-success alert-message" role="alert">Berhasil..! Data Pelamar Di terima...</div>');	
		redirect(base_url('data'));
		}
	}

	public function keputusan()
	{
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['terima'] = $this->db->get_where('terima')->result_array();

		$data['title'] = 'Data keputusan';
		$this->load->view('template/header', $data);
		$this->load->view('template/sidebar');
		$this->load->view('template/topbar');
		$this->load->view('data/keputusan', $data);
		$this->load->view('template/footer');
	}

	public function download($id)
	{
		$this->load->library('dompdf_gen');

		$data['terima'] = $this->ModelTerima->bukti($id);
		
		$this->load->view('laporan/bukti_interview', $data);

		$paper_size = 'A5'; // ukuran kertas
		$orientation = 'landscape'; // type format kertas
		$html = $this->output->get_output();

		$this->dompdf->set_paper($paper_size, $orientation);
		// Convert to pdf
		$this->dompdf->load_html($html);
		$this->dompdf->render();
		$this->dompdf->stream("bukti_interview.pdf", array('Attachment' => 0));
		// nama pdf yg di hasilkan
	}
}