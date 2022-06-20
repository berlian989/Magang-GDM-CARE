<?php

class m_admin extends CI_model
{
    public function tampil_data()
    {
        return $this->db->get('pegawai');
    }
    public function input_data($data)
    {
        $this->db->insert('pegawai', $data);
    }
    public function hapus_data($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }
    public function edit_data($where, $table)
    {
        return $this->db->get_where($table, $where);
    }
    public function update_data($where, $data, $table)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }
    public function tukar_hadiah($where, $table)
    {
        $this->db->where($where);
        $this->db->update($table);
    }
}
