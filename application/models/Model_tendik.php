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

    public function getUnit($account_uid)
    {
        $this->db->select('*');
        $this->db->from('account');
        $this->db->join('tendik', 'tendik.no_pegawai = account.no_pegawai');
        $this->db->join('unit', 'unit.id_unit = tendik.id_unit');
        $this->db->where('account.no_pegawai = ' . $account_uid);
        $query = $this->db->get();
        return $query->row_array();
    }

    public function getJabatan($account_uid)
    {
        $this->db->select('*');
        $this->db->from('account');
        $this->db->join('tendik', 'tendik.no_pegawai = account.no_pegawai');
        $this->db->join('jabatan', 'jabatan.id_jabatan = tendik.id_jabatan');
        $this->db->where('account.no_pegawai = ' . $account_uid);
        $query = $this->db->get();
        return $query->row_array();
    }

    public function simpancuti($datacuti)
    {
        return $this->db->insert('pengajuan', $datacuti);
    }
    public function getPengajuan()
    {
        return $this->db->get('pengajuan')->result_array();
    }

    public function tambahlembur($datalembur)
    {
        return $this->db->insert('lembur', $datalembur);
    }
}
