<?php

class Member extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }
    public function index()
    {
        $this->_login();
    }

    private function _login()
    {
        $email = htmlspecialchars($this->input->post('email', true));
        $password = $this->input->post('password', true); 
 
        $user = $this->ModelUser->cekData(['email' => $email])->row_array(); 

        // jika usernya ada
        if($user); {
            // jika usernya aktif
            if($user['is_active'] == 1) {
                // cek password
                if(password_verify($password, $user['password'])) {
                    $data = [
                        'email' => $user['email'],
                        'role_id' => $user['role_id'],
                        'id_user' => $user['id'],
                        'name' => $user['name']
                    ];
                    $this->session->set_userdata($data);
                    if ($user['role_id'] == 2) {
                        redirect('home');    
                    } else {
                        redirect('dashboard');
                    }
                    
                } else {
                    $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-message" role="alert">Password salah!!</div>');
                    redirect('home'); 
                }
            } else {
                $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-message" role="alert">Anda harus login!!</div>');
                redirect('home'); 
            }
        }
    }
    public function daftar()
    {
         $this->form_validation->set_rules('name', 'Nama Lengkap', 'required', [
            'required' => 'Nama Belum diis!!'
         ]);
         $this->form_validation->set_rules('email', 'Alamat Email', 'required|trim|valid_email|is_unique[user.email]', [
            'valid_email' => 'Email Tidak Benar!!',
            'required' => 'Email Belum diisi!!',
            'is_unique' => 'Email Sudah Terdaftar!'
         ]);
         $this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[3]|matches[password2]', [
            'matches' => 'Password Tidak Sama!!',
            'min_length' => 'Password Terlalu Pendek'
         ]);
         $this->form_validation->set_rules('password2', 'Ketik ulang password', 'required|trim|matches[password1]');

         if ($this->form_validation->run() == false) {
            $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-message" role="alert">Proses gagal. Mohon lakukan penginputan yang benar</div>');
             redirect('home');
         }

        $email = $this->input->post('email', true);
        $data = [
            'name' => htmlspecialchars($this->input->post('name', true)),
            'email' => htmlspecialchars($email),
            'image' => 'default.jpg',
            'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
            'role_id' => 2,
            'is_active' => 1,
            'date_created' => time()
            ];
            $this->ModelUser->simpanData($data);
            $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-message" role="alert">Selamat!! akun
                member anda sudah dibuat, Silahkan Login</div>');
            redirect(base_url('home'));
    }

    public function pelamar()
    {
        $email = $this->input->post('email', true);
        $data = [
            'name'          => htmlspecialchars($this->input->post('name', true)),
            'email'         => htmlspecialchars($email),
            'no_telp'       => $this->input->post('no_telp', true),
            'alamat'        => $this->input->post('alamat', true),
            'tempat_lahir'  => $this->input->post('tempat_lahir', true),
            'tanggal_lahir' => $this->input->post('tanggal_lahir', true),
            'kota'          => $this->input->post('kota', true),
            'negara'        => $this->input->post('negara', true),
            'kode_pos'      => $this->input->post('kode_pos', true),
            'jenis_kel'     => $this->input->post('jenis_kel', true),
            'tinggi_badan'  => $this->input->post('tinggi_badan', true),
            'berat_badan'   => $this->input->post('berat_badan', true),
        ];

        $this->db->insert('karyawan',$data);
        $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-message" role="alert">Berhasil. Silahkan Kirim Dokumen Anda...</div>');
            redirect('member/lamar');
    }

    public function lamar()
    {
        $user = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
        $data['karyawan'] = $this->db->get_where('karyawan', ['email' => $this->session->userdata('email')])->row_array();
        $data['user'] = $user['name'];

        $this->form_validation->set_rules('name', 'Nama lengkap', 'required|trim',[
            'required' => 'Nama anda harus diisi!'
        ]);

        $this->form_validation->set_rules('email', 'Alamat Email', 'required|trim',[
            'required' => 'Email tidak boleh kosong!'
        ]);

        if ($this->form_validation->run() == false) {
            $this->load->view('template/user/header', $data);
            $this->load->view('template/user/topbar', $data);
            $this->load->view('lamar', $data);
            $this->load->view('template/user/footer');
        }else {
            $email = $this->input->post('email');
            $attachment = $_FILES['attachment']['name'];

            if ($attachment) {

                $config['upload_path'] = './assets/pelamar/';
                $config['allowed_types'] = 'JPG|PNG|docx|pdf';

                $this->load->library('upload', $config);

                if ($this->upload->do_upload('attachment')) {
                   
                    $attachment = $this->upload->data('file_name');
                }

                $data = [
                    'name'      => $this->input->post('name'),
                    'email'     => htmlspecialchars($email),
                    'tgl_lamar' => date('Y-m-d'),
                    'attachment'=> $attachment,
                    'jenis_kel' => $this->input->post('jenis_kel'),
                    'kd_loker'  => $this->input->post('kd_loker')
                ];

                $this->db->insert('lamar', $data);
                $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-message" role="alert">Selamat..! Data anda berhasil dikirim...</div>');
                redirect('home');
            }
        }
    }

    public function logout()
    {
        $this->session->unset_userdata('email');
        $this->session->unset_userdata('role_id'); 
 
        $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-message" role="alert">Anda telah logout!!</div>');
        redirect('home');
    }
}