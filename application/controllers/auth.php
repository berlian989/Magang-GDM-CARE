<?php
defined('BASEPATH') or exit('No direct script access allowed');

class auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }
    public function index()
    {
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email');
        if ($this->form_validation->run() == false) {
            $data['title'] = 'Login';
            $this->load->view('login', $data);
        } else {
            $this->_login();
        }
    }

    private function _login()
    {
        $email=$this->input->post('email');
        $password=$this->input->post('pass');
        $user = $this->db->get_where('customer', ['email'=>$email])->row_array();
        $admin = $this->db->get_where('pegawai', ['email'=>$email])->row_array();
        if ($user or $admin) {
            if ($user['is_active'] == 1 or $admin) {
                if (password_verify($password, $user['password']) or $user['password']==$password) {
                    $data = [
                        'email' => $user['email'],
                        'id_cust' => $user['id_cust'],
                    ];
                    $this->session->set_userdata($data);
                    redirect('user');
                } elseif ($admin['password']==$password or password_verify($password, $admin['password'])) {
                    $data = [
                        'email' => $admin['email']
                    ];
                    $this->session->set_userdata($data);
                    redirect('admin');
                } else {
                    $this->session->set_flashdata('massage', '<div class="alert alert-danger" role="alert" style="text-align:center">
                Password Salah </div>');
                    redirect('auth');
                }
            } else {
                $this->session->set_flashdata('massage', '<div class="alert alert-danger" role="alert" style="text-align:center">
                Akun Belum Aktif </div>');
                redirect('auth');
            }
        } else {
            $this->session->set_flashdata('massage', '<div class="alert alert-danger" role="alert" style="text-align:center">
            Email/Password Anda Salah </div>');
            redirect('auth');
        }
    }
    public function regis()
    {
        $this->form_validation->set_rules('email', 'Email', 'is_unique[customer.email]|is_unique[pegawai.email]', [
            'is_unique' => 'Email Sudah Terdaftar !'
            ]);
        $this->form_validation->set_rules('pass1', 'Password', 'required|trim|matches[pass]');
        $this->form_validation->set_rules('pass', 'Password', 'required|trim|matches[pass1]', [
            'matches' => 'Password Tidak Sama !'
            ]);
        $this->form_validation->set_rules('notelp', 'Notelp', 'is_unique[customer.no_telp]', [
            'is_unique' => 'Nomor Sudah Terdaftar !'
            ]);
        
        if ($this->form_validation->run() == false) {
            $data['title'] = 'User Registration';
            $this->load->view('registrasi', $data);
        } else {
            $data = [
                'nama_lengkap' => $this->input->post('name', true),
                'email' => htmlspecialchars($this->input->post('email', true)),
                'password' => password_hash($this->input->post('pass'), PASSWORD_DEFAULT),
                'is_active'=>0,
                'gambar'=>'profile.jpg',
                'tgl_lahir'=>'2000-00-00',
                'no_telp' => $this->input->post('notelp', true),
                'date_create' =>time()
            ];
            
            $this->db->insert('customer', $data);
            $this->session->set_flashdata('massage', '<div class="alert alert-success" role="alert" style="text-align:center">
            Akun Anda Berhasil di buat </div>');
            redirect('auth');
        }
    }
    public function lupapass()
    {
        $this->load->view('lupapass');
    }


    public function logout()
    {
        $this->session->unset_userdata('email');

        $this->session->set_flashdata('massage', '<div class="alert alert-success" role="alert" style="text-align:center">
            Berhasil Sign Out </div>');
        redirect('auth');
    }
}
