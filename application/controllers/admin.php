<?php
defined('BASEPATH') or exit('No direct script access allowed');

class admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if (!$this->session->userdata('email')) {
            redirect('http://localhost/pm/auth');
        }
    }

    public function index()
    {
        $data['title'] = 'Management Customer';
        $data['customer']= $this->m_customer->tampil_data()->result();
        $data['login'] = $this->db->get_where('pegawai', ['email'=>
        $this->session->userdata('email')])->row_array();
        $this->load->view('page/headtable', $data);
        $this->load->view('page/sidebaradmin', $data);
        $this->load->view('page/navbar');
        $this->load->view('admin/index', $data);
        $this->load->view('page/footer');
    }

    public function editbiodatauser()
    {
        $data['title'] = 'Management Customer';
        $data['customer']= $this->m_customer->tampil_data()->result();
        $data['login'] = $this->db->get_where('pegawai', ['email'=>
        $this->session->userdata('email')])->row_array();
        $this->load->view('page/headtable', $data);
        $this->load->view('page/sidebaradmin', $data);
        $this->load->view('page/navbar');
        $this->load->view('admin/editbiodatauser', $data);
        $this->load->view('page/footer');
    }

    public function updatebiouser($id)
    {
        $data['title'] = 'Management Customer';
        $where = array('id_cust' => $id);
        $data['customer'] = $this->m_customer->edit_data($where, '
        customer')->result();
        $data['login'] = $this->db->get_where('pegawai', ['email'=>
        $this->session->userdata('email')])->row_array();
        $this->load->view('page/head', $data);
        $this->load->view('page/sidebaradmin', $data);
        $this->load->view('page/navbar');
        $this->load->view('admin/updatebiouser', $data);
        $this->load->view('page/footer');
    }

    public function update_biouser()
    {
        $id = $this->input->post('id');

        $upload_image =  $_FILES['image']['name'];

        if ($upload_image) {
            $config['allowed_types']='gif|jpg|png';
            $config['max_size'] ='2048';
            $config['upload_path'] ='./assets/img/Profile/';

            $this->load->library('upload', $config);

            if ($this->upload->do_upload('image')) {
                $new_gambar = $this->upload->data('file_name');
                $this->db->set('gambar', $new_gambar);
            } else {
                echo $this->upload->display_errors();
            }
        }

        $data = [
        'nama_lengkap' =>   $this->input->post('name'),
        'email' =>          $this->input->post('email'),
        'tgl_lahir' =>      $this->input->post('tgl_lahir'),
        'tempat_lahir' =>  $this->input->post('tempat_lahir'),
        'jenis_kelamin' =>   $this->input->post('gender'),
        'no_telp' =>  $this->input->post('notlp'),
        'alamat' =>   $this->input->post('alamat'),
        'password' => password_hash($this->input->post('pass'), PASSWORD_DEFAULT)
        ];

        $where = array('id_cust' => $id);
        $this->m_customer->update_data($where, $data, '
        customer');
        $this->session->set_flashdata('massage', '<div class="alert alert-success" role="alert" style="text-align:center">
        Data berhasil di update</div>');
        redirect('admin/editbiodatauser');
    }

    public function hapususer($id)
    {
        $where = array('id_cust' => $id);
        $this->m_customer->hapus_data($where, 'customer');
        $this->session->set_flashdata('massage', '<div class="alert alert-success" role="alert" style="text-align:center">
        Data berhasil di delete</div>');
        redirect('admin/editbiodatauser');
    }


    public function aktif($id)
    {
        $aktif=1;
        $this->db->set('is_active', $aktif);
        $this->db->where('id_cust', $id);
        $this->db->update('customer');
        redirect('admin/index');
    }

    public function nonaktif($id)
    {
        $aktif=0;
        $this->db->set('is_active', $aktif);
        $this->db->where('id_cust', $id);
        $this->db->update('customer');
        redirect('admin/index');
    }

    public function adminmanagementpage()
    {
        $data['title'] = 'Management Admin';
        $data['idad'] = 0;
        $data['admin']= $this->m_admin->tampil_data()->result();
        $data['login'] = $this->db->get_where('pegawai', ['email'=>
        $this->session->userdata('email')])->row_array();
        $this->load->view('page/headtable', $data);
        $this->load->view('page/sidebaradmin', $data);
        $this->load->view('page/navbar');
        $this->load->view('admin/adminmanagementpage', $data);
        $this->load->view('page/footer');
    }

    public function tambah_admin()
    {
        $data = [
            'id_pegawai' =>    $this->input->post('id_ad', true),
            'nama_lengkap' =>    $this->input->post('nama', true),
            'email' =>   $this->input->post('email', true),
            'password' =>  $this->input->post('pass', true),
            'alamat' =>    $this->input->post('alamat', true),
            'no_telp' =>   $this->input->post('notlp', true),
            'password' => password_hash($this->input->post('pass'), PASSWORD_DEFAULT)
        ];
        
        $this->m_admin->input_data($data);
        $this->session->set_flashdata('massage', '<div class="alert alert-success" role="alert" style="text-align:center">
        Data berhasil di tambah</div>');
        redirect('admin/adminmanagementpage');
    }
    public function hapus_admin($id)
    {
        $where = array('id_pegawai' => $id);
        $this->m_admin->hapus_data($where, 'pegawai');
        $this->session->set_flashdata('massage', '<div class="alert alert-success" role="alert" style="text-align:center">
        Data berhasil di delete</div>');
        redirect('admin/adminmanagementpage');
    }

    public function edit_admin($id)
    {
        $data['title'] = 'Management Admin';
        $where = array('id_pegawai' => $id);
        $data['admin'] = $this->m_admin->edit_data($where, '
        pegawai')->result();
        $data['login'] = $this->db->get_where('pegawai', ['email'=>
        $this->session->userdata('email')])->row_array();
        $this->load->view('page/head', $data);
        $this->load->view('page/sidebaradmin', $data);
        $this->load->view('page/navbar');
        $this->load->view('admin/editadmin', $data);
        $this->load->view('page/footer');
    }

    public function updateadmin()
    {
        $id = $this->input->post('id');

        $data = [
        'Nama_Lengkap' =>   $this->input->post('name'),
        'email' =>          $this->input->post('email'),
        'no_telp' =>  $this->input->post('notlp'),
        'alamat' =>   $this->input->post('alamat'),
        'password' => password_hash($this->input->post('pass'), PASSWORD_DEFAULT)
        ];

        $where = array('id_pegawai' => $id);
        $this->m_customer->update_data($where, $data, '
        pegawai');
        $this->session->set_flashdata('massage', '<div class="alert alert-success" role="alert" style="text-align:center">
        Data berhasil di update</div>');
        redirect('admin/adminmanagementpage');
    }


    public function editreward()
    {
        $data['title'] = 'Edit Reward';
        $data['hadiah']= $this->m_hadiah->tampil_data()->result();
        $data['login'] = $this->db->get_where('pegawai', ['email'=>
        $this->session->userdata('email')])->row_array();
        $this->load->view('page/headtable', $data);
        $this->load->view('page/sidebaradmin', $data);
        $this->load->view('page/navbar');
        $this->load->view('admin/editreward', $data);
        $this->load->view('page/footer');
    }
    public function tambah_hadiah()
    {
        $upload_image =  $_FILES['image']['name'];

        if ($upload_image) {
            $config['allowed_types']='gif|jpg|png';
            $config['max_size'] ='2048';
            $config['upload_path'] ='./assets/img/hadiah/';

            $this->load->library('upload', $config);

            if ($this->upload->do_upload('image')) {
                $new_gambar = $this->upload->data('file_name');
            } else {
                echo $this->upload->display_errors();
            }
        }
        
        $data = [
            'nama_hadiah' =>    $this->input->post('nama', true),
            'point_hadiah' =>   $this->input->post('poin', true),
            'gambar_hadiah' =>  $new_gambar
        
        
        ];

        $this->m_hadiah->input_data($data);
        $this->session->set_flashdata('massage', '<div class="alert alert-success" role="alert" style="text-align:center">
        Data berhasil di tambah</div>');
        redirect('admin/editreward');
    }
    public function hapus_hadiah($id)
    {
        $where = array('id_hadiah' => $id);
        $this->m_hadiah->hapus_data($where, 'hadiah');
        $this->session->set_flashdata('massage', '<div class="alert alert-success" role="alert" style="text-align:center">
        Data berhasil di delete</div>');
        redirect('admin/editreward');
    }

    public function edit_hadiah($id)
    {
        $data['title'] = 'Edit Reward';
        $where = array('id_hadiah' => $id);
        $data['hadiah'] = $this->m_hadiah->edit_data($where, '
        hadiah')->result();
        $data['login'] = $this->db->get_where('pegawai', ['email'=>
        $this->session->userdata('email')])->row_array();
        $this->load->view('page/head', $data);
        $this->load->view('page/sidebaradmin', $data);
        $this->load->view('page/navbar');
        $this->load->view('admin/updatereward', $data);
        $this->load->view('page/footer');
    }

    public function update_hadiah()
    {
        $upload_image =  $_FILES['image']['name'];
        if ($upload_image) {
            $config['allowed_types']='gif|jpg|png';
            $config['max_size'] ='2048';
            $config['upload_path'] ='./assets/img/hadiah/';

            $this->load->library('upload', $config);

            if ($this->upload->do_upload('image')) {
                $new_gambar = $this->upload->data('file_name');
            } else {
                echo $this->upload->display_errors();
            }
        }
        
        $data = [
            'nama_hadiah' =>    $this->input->post('nama', true),
            'point_hadiah' =>   $this->input->post('poin', true),
            'gambar_hadiah' =>  $new_gambar
        ];
        $id = $this->input->post('id');
        $where = array('id_hadiah' => $id);
        $this->m_hadiah->update_data($where, $data, 'hadiah');
        $this->session->set_flashdata('massage', '<div class="alert alert-success" role="alert" style="text-align:center">
        Data berhasil di update</div>');
        redirect('admin/editreward');
    }
    public function managementtransaksi()
    {
        $data['title'] = 'Management Transaksi';
        $data['idtrans'] = 0;
        $data['admin']= $this->m_admin->tampil_data()->result();
        $data['customer']= $this->m_customer->tampil_data()->result();
        $data['barang']= $this->m_barang->tampil_data()->result();
        $data['login'] = $this->db->get_where('pegawai', ['email'=>
        $this->session->userdata('email')])->row_array();
        $data['atransaksi']= $this->m_transaksi->tampil_data()->result();
        $this->load->view('page/headtable', $data);
        $this->load->view('page/sidebaradmin', $data);
        $this->load->view('page/navbar');
        $this->load->view('admin/transaksimanagement', $data);
        $this->load->view('page/footer');
    }

    public function tambah_trans()
    {
        $data = [
            'id_transaksi' =>    $this->input->post('idtrans', true),
            'id_pegawai' =>    $this->input->post('id_peg', true),
            'id_cust' =>   $this->input->post('id_cus', true),
            'tanggal' =>  $this->input->post('tgl_trans', true)
        ];
        $data1 = [
            'id_transaksi' =>    $this->input->post('idtrans', true),
            'id_barang' =>    $this->input->post('id_bar', true),
            'Qty' =>    $this->input->post('quan', true),
            'Disc' =>    $this->input->post('dis', true),
            'Total_Bayar' =>   $this->input->post('tobi', true)
        ];
        
        $this->m_transaksi->input_datatr($data);
        $this->m_transaksi->input_datadt($data1);
        $this->session->set_flashdata('massage', '<div class="alert alert-success" role="alert" style="text-align:center">
        Data berhasil di tambah</div>');
        redirect('admin/managementtransaksi');
    }

    public function edit_transaksi($id)
    {
        $data['title'] = 'Management Transaksi';
        $where = array('id_transaksi' => $id);
        $data['admin']= $this->m_admin->tampil_data()->result();
        $data['customer']= $this->m_customer->tampil_data()->result();
        $data['barang']= $this->m_barang->tampil_data()->result();
        $data['atransaksi'] = $this->m_transaksi->edit_data($where, 'transaksi')->result();
        $data['atransaksi1'] = $this->m_transaksi->edit_data($where, 'detail_transaksi')->result();
        $data['login'] = $this->db->get_where('pegawai', ['email'=>
        $this->session->userdata('email')])->row_array();
        $this->load->view('page/head', $data);
        $this->load->view('page/sidebaradmin', $data);
        $this->load->view('page/navbar');
        $this->load->view('admin/updatetrans', $data);
        $this->load->view('page/footer');
    }

    public function update_transaksi()
    {
        $data = [
            'id_transaksi' =>    $this->input->post('id', true),
            'id_pegawai' =>    $this->input->post('id_peg', true),
            'id_cust' =>   $this->input->post('id_cus', true),
            'tanggal' =>  $this->input->post('tgl_trans', true)
        ];
        $data1 = [
            'id_transaksi' =>    $this->input->post('id', true),
            'id_barang' =>    $this->input->post('id_bar', true),
            'Qty' =>    $this->input->post('quan', true),
            'Disc' =>    $this->input->post('dis', true),
            'Total_Bayar' =>   $this->input->post('tobi', true)
        ];
        $id = $this->input->post('id');
        $where = array('id_transaksi' => $id);
        $this->m_transaksi->update_data($where, $data, 'transaksi');
        $this->m_transaksi->update_data1($where, $data1, 'detail_transaksi');
        $this->session->set_flashdata('massage', '<div class="alert alert-success" role="alert" style="text-align:center">
        Data berhasil di update</div>');
        redirect('admin/managementtransaksi');
    }
    public function transaksi_reward()
    {
        $data['title'] = 'Management Transaksi';
        $data['riwayatreward']= $this->m_riwayatreward->tampil_data()->result();
        $data['login'] = $this->db->get_where('pegawai', ['email'=>
        $this->session->userdata('email')])->row_array();
        $this->load->view('page/headtable', $data);
        $this->load->view('page/sidebaradmin', $data);
        $this->load->view('page/navbar');
        $this->load->view('admin/transaksireward', $data);
        $this->load->view('page/footer');
    }
    public function konfirmasi($id)
    {
        $aktif="Sudah Dikonfirmasi";
        $this->db->set('Status', $aktif);
        $this->db->where('id_rr', $id);
        $this->db->update('riawayat_reward');
        redirect('admin/transaksi_reward');
    }
    public function hapustransreward($id)
    {
        $where = array('id_rr' => $id);
        $this->m_customer->hapus_data($where, 'riawayat_reward');
        $this->session->set_flashdata('massage', '<div class="alert alert-success" role="alert" style="text-align:center">
        Data berhasil di delete</div>');
        redirect('admin/transaksi_reward');
    }
}