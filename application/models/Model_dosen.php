<?php
class Model_dosen extends CI_Model
{
    public function getArsip_Dosen($role)
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

    public function simpanDataprodi($dataprodi)
    {
        return $this->db->insert('prodi', $dataprodi);
    }
    public function simpanDatajad($datajad)
    {
        return $this->db->insert('jad', $datajad);
    }
    public function simpanDatafakultas($datafakultas)
    {
        return $this->db->insert('fakultas', $datafakultas);
    }
}
