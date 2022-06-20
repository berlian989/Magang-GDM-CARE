<?php
defined('BASEPATH') or exit('No direct script access allowed');

class user extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        if (!$this->session->userdata('email')) {
            redirect('http://localhost/pm/auth');
        }
    }
    public function index()
    {
        $data['title'] = 'Home';
        $data['login'] = $this->db->get_where('customer', ['email'=>
        $this->session->userdata('email')])->row_array();
        $this->load->view('page/head', $data);
        $this->load->view('page/sidebar', $data);
        $this->load->view('page/navbar');
        $this->load->view('user/home', $data);
        $this->load->view('page/footer');
    }
    public function history()
    {
        $data['title'] = 'History';
        $data['login'] = $this->db->get_where('customer', ['email'=>
        $this->session->userdata('email')])->row_array();
        $data['transaksi'] = $this->db->get_where('transaksi', ['transaksi.id_cust'=>
        $this->session->userdata('id_cust')])->row_array();
        if ($data['transaksi']==null) {
            $data['hsltrans']= $this->db->get_where('transaksi', ['transaksi.id_cust'=>
            $this->session->userdata('id_cust')])->result_array();
        } else {
            $data['hsltrans'] = $this->m_transaksi->tampil_datauser($data['transaksi']['id_cust'])->result();
        }

        $this->load->view('page/headtable', $data);
        $this->load->view('page/sidebar', $data);
        $this->load->view('page/navbar');
        $this->load->view('user/riwayat', $data);
        $this->load->view('page/footer');
    }
    public function riwayatreward()
    {
        $data['title'] = 'History';
        $data['login'] = $this->db->get_where('customer', ['email'=>
        $this->session->userdata('email')])->row_array();
        $data['riawayat_reward'] = $this->db->get_where('riawayat_reward', ['riawayat_reward.id_cust'=>
        $this->session->userdata('id_cust')])->result_array();
        
        $this->load->view('page/headtable', $data);
        $this->load->view('page/sidebar', $data);
        $this->load->view('page/navbar');
        $this->load->view('user/riwayatreward', $data);
        $this->load->view('page/footer');
    }

    public function reward()
    {
        $data['hadiah']= $this->m_hadiah->tampil_data()->result();
        $data['title'] = 'Reward';
        $data['login'] = $this->db->get_where('customer', ['email'=>
        $this->session->userdata('email')])->row_array();
        $id_user = $data['login']['id_cust'];
        $data['pointcust']= $this->m_customer->tampil_datapoin($id_user);
        $data['hasilpembagian']=$data['pointcust']/10000;
        $data['pointcust1']= $this->m_customer->tampil_datapointukar($id_user);
        $data['hasil']=$data['hasilpembagian']-$data['pointcust1'];
        $this->db->set('poin', $data['hasil']);
        $this->db->where('email', $this->session->userdata('email'));
        $this->db->update('customer');
        $this->load->view('page/head', $data);
        $this->load->view('page/sidebar', $data);
        $this->load->view('page/navbar');
        $this->load->view('user/reward', $data);
        $this->load->view('page/footer');
    }

    public function tukar_hadiah($id)
    {
        $data['login'] = $this->db->get_where('customer', ['email'=>
        $this->session->userdata('email')])->row_array();
        $data['poinbarang'] = $this->db->get_where('hadiah', ['id_hadiah'=>$id])->row_array();
        $poinuser = $data['login']['poin'];
        $id_user = $data['login']['id_cust'];
        $poinbarang = $data['poinbarang']['point_hadiah'];
        $namabarang =$data['poinbarang']['nama_hadiah'];
        $id_cust=$this->session->userdata('id_cust');
        
        if ($poinuser >= $poinbarang) {
            $hasil= $poinuser-$poinbarang;
            $this->db->set('poin', $hasil);
            $this->db->where('email', $this->session->userdata('email'));
            $this->db->update('customer');

            $data = [
                'Nama_hadiah'=>$namabarang,
                'tanggal_penukaran'=>time(),
                'point_di_tukar'=>$poinbarang,
                'Status'=>"Belum Dikonfirmasi",
                'id_cust'=>$id_cust
            ];

            $this->db->insert('riawayat_reward', $data);

            $this->session->set_flashdata('massage', '<div class="alert alert-success" role="alert" style="text-align:center">
        Penukaran Berhasil</div>');
            redirect('user/reward');
        } else {
            $this->session->set_flashdata('massage', '<div class="alert alert-danger" role="alert" style="text-align:center">
            Point Anda Kurang</div>');
            redirect('user/reward');
        }
    }

    public function support()
    {
        $data['title'] = 'Support';
        $data['login'] = $this->db->get_where('customer', ['email'=>
        $this->session->userdata('email')])->row_array();
        $this->load->view('page/head', $data);
        $this->load->view('page/sidebar', $data);
        $this->load->view('page/navbar');
        $this->load->view('user/support', $data);
        $this->load->view('page/footer');
    }
    public function editprofile()
    {
        $data['title'] = 'Edit Profile';
        $data['login'] = $this->db->get_where('customer', ['email'=>
        $this->session->userdata('email')])->row_array();

        $this->form_validation->set_rules(
            'name',
            'Nama Lengkap',
            'required',
            ['required' => 'Isi nama']
        );

        if ($this->form_validation->run() == false) {
            $this->load->view('page/head', $data);
            $this->load->view('page/sidebar', $data);
            $this->load->view('page/navbar');
            $this->load->view('user/editprofile', $data);
            $this->load->view('page/footer');
        } else {
            $name =     $this->input->post('name');
            $email =    $this->input->post('email');
            $tgll =     $this->input->post('tgl_lahir');
            $tmpl =     $this->input->post('tempat_lahir');
            $gender =   $this->input->post('gender');
            $notlp =    $this->input->post('notlp');
            $alamat =   $this->input->post('alamat');


            $upload_image =  $_FILES['image']['name'];

            if ($upload_image) {
                $config['allowed_types']='gif|jpg|png';
                $config['max_size'] ='2048';
                $config['upload_path'] ='./assets/img/hadiah/';

                $this->load->library('upload', $config);

                if ($this->upload->do_upload('image')) {
                    $new_gambar = $this->upload->data('file_name');
                    $this->db->set('gambar', $new_gambar);
                } else {
                    echo $this->upload->display_errors();
                }
            }

            $this->db->set('nama_lengkap', $name);
            $this->db->set('tgl_lahir', $tgll);
            $this->db->set('tempat_lahir', $tmpl);
            $this->db->set('jenis_kelamin', $gender);
            $this->db->set('no_telp', $notlp);
            $this->db->set('alamat', $alamat);
            $this->db->where('email', $email);
            $this->db->update('customer');

            $this->session->set_flashdata('massage', '<div class="alert alert-success" role="alert" style="text-align:center">
            Data berhasil di edit </div>');
            redirect('http://localhost/pm/user/editprofile');
        }
    }
    public function editpassword()
    {
        $data['title'] = 'Edit Password';
        $data['login'] = $this->db->get_where('customer', ['email'=>
        $this->session->userdata('email')])->row_array();

        $this->form_validation->set_rules('pass', 'Password', 'required|trim');
        $this->form_validation->set_rules('pass1', 'Password', 'required|trim|matches[pass2]');
        $this->form_validation->set_rules('pass2', 'Password', 'required|trim|matches[pass1]');

        if ($this->form_validation->run() == false) {
            $this->load->view('page/head', $data);
            $this->load->view('page/sidebar', $data);
            $this->load->view('page/navbar');
            $this->load->view('user/editpassword', $data);
            $this->load->view('page/footer');
        } else {
            $password =  $this->input->post('pass');
            $pass1 =  $this->input->post('pass1');
            
            if (!password_verify($password, $data['login']['password']) or $password != $data['login']['password']) {
                $this->session->set_flashdata('massage', '<div class="alert alert-success" role="alert" style="text-align:center">
            Current Password Salah </div>');
                redirect('http://localhost/pm/user/editpassword');
            } else {
                if ($password==$pass1) {
                    $this->session->set_flashdata('massage', '<div class="alert alert-success" role="alert" style="text-align:center">
                     Password baru Sama Dengan password lama  </div>');
                    redirect('http://localhost/pm/user/editpassword');
                } else {
                    $password_hash = password_hash($this->input->post('pass1'), PASSWORD_DEFAULT);
                        
                    $this->db->set('password', $password_hash);
                    $this->db->where('email', $this->session->userdata('email'));
                    $this->db->update('customer');
                    $this->session->set_flashdata('massage', '<div class="alert alert-success" role="alert" style="text-align:center">
                        password berhasil di ubah </div>');
                    redirect('http://localhost/pm/user/editpassword');
                }
            }
        }
    }
}
