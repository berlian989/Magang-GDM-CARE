<?php

class m_barang extends CI_model
{
    public function tampil_data()
    {
        return $this->db->get('barang');
    }
}
