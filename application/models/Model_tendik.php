<?php
class Model_tendik extends CI_Model
{

    public function getPegawaiTendik()
    {
        $this->db->select('*');
        $this->db->from('pegawai');
        $this->db->join('tendik', 'pegawai.no_pegawai = tendik.no_pegawai');
        $query = $this->db->get();

        return $query->result_array();
    }


    public function getAccTendik($no_pegawai)
    {
        $query = $this->db->query(
            "SELECT peg.nama, ten.id_pegawai FROM tendik AS ten 
            LEFT JOIN pegawai AS peg
            ON ten.no_pegawai = peg.no_pegawai
            WHERE ten.no_pegawai = " . $no_pegawai
        );
        return $query->row_array();
    }

    public function getUnit($account_uid)
    {
        $this->db->select('*');
        $this->db->from('account');
        $this->db->join('tendik', 'tendik.id_pegawai = account.no_pegawai');
        $this->db->join('unit', 'unit.id_unit = tendik.id_unit');
        $this->db->where('account.no_pegawai = ' . $account_uid);
        $query = $this->db->get();
        return $query->row_array();
    }

    public function getJabatan($account_uid)
    {
        $this->db->select('*');
        $this->db->from('account');
        $this->db->join('tendik', 'tendik.id_pegawai = account.no_pegawai');
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
