<?php

class m_riwayatreward extends CI_model
{
    public function tampil_data()
    {
        return $this->db->get('riawayat_reward');
    }
    public function input_data($data)
    {
        $this->db->insert('riawayat_reward', $data);
    }
    public function hapus_data($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }
}
