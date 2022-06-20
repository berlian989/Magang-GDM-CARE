<?php

class m_customer extends CI_model
{
    public function tampil_data()
    {
        return $this->db->get('customer');
    }
    public function tambah_data()
    {
        return $this->db->get('customer');
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
    public function hapus_data($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }
    public function tampil_datapoin($id_user)
    {
        $sql="SELECT SUM(`Total_bayar`) as point FROM detail_transaksi left join transaksi on 
        detail_transaksi.id_transaksi = transaksi.id_transaksi WHERE id_cust=$id_user";
        $result= $this->db->query($sql);
        return $result->row()->point;
    }
    public function tampil_datapointukar($id_user)
    {
        $sql="SELECT SUM(`point_di_tukar`) as point FROM riawayat_reward left join customer on 
        riawayat_reward.id_cust = customer.id_cust WHERE riawayat_reward.id_cust=$id_user";
        $result= $this->db->query($sql);
        return $result->row()->point;
    }
}
