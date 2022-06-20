<?php

class m_transaksi extends CI_model
{
    public function tampil_data()
    {
        $this->db->distinct('*');
        $this->db->from('transaksi a');
        $this->db->join('customer b', 'b.id_cust = a.id_cust', 'left');
        $this->db->join('detail_transaksi c', 'c.id_transaksi = a.id_transaksi', 'left');
        $this->db->join('barang d', 'd.id_barang = c.id_barang', 'left');
        return $this->db->get();
    }
    public function tampil_datatras()
    {
        return $this->db->get('transaksi');
    }
    public function tampil_datauser($id)
    {
        $this->db->distinct('*');
        $this->db->from('transaksi a');
        $this->db->join('detail_transaksi c', 'c.id_transaksi = a.id_transaksi');
        $this->db->join('barang d', 'd.id_barang = c.id_barang');
        $this->db->where('a.id_cust', $id);
        return $this->db->get();
    }
    public function input_datatr($data)
    {
        $this->db->insert('transaksi', $data);
    }
    public function input_datadt($data1)
    {
        $this->db->insert('detail_transaksi', $data1);
    }
    public function edit_data($where, $table1)
    {
        return $this->db->get_where($table1, $where);
    }
    public function update_data($where, $data, $table)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }
    public function update_data1($where, $data1, $table)
    {
        $this->db->where($where);
        $this->db->update($table, $data1);
    }
}
