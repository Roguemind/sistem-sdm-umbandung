<?php
class Model_tendik extends CI_Model
{
    public function getAccTendik($id_pegawai)
    {
        $query = $this->db->query(
            "SELECT peg.nama, ten.no_pegawai FROM tendik AS ten 
            LEFT JOIN pegawai AS peg
            ON ten.id_pegawai = peg.id_pegawai
            WHERE ten.id_pegawai = " . $id_pegawai
        );
        return $query->row_array();
    }

    public function getArsip_tendik($role)
    {
        $this->db->select('*');
        $this->db->from('arsip_tendik');
        $this->db->join($role, $role . '.id_unit = arsip_tendik.id_unit');
        $query = $this->db->get();
        return $query->result_array();
    }

    public function simpancuti($datacuti)
    {
        return $this->db->insert('pengajuan', $datacuti);
    }
}
