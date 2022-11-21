<?php
class Model_admin extends CI_Model
{
    public function simpanDataPegawai($dataPegawai)
    {
        $this->db->insert('pegawai', $dataPegawai);
    }
    public function simpanDataUnit($dataUnit)
    {
        $this->db->insert('unit', $dataUnit);
    }

    public function simpanDataJabatan($dataJabatan)
    {
        $this->db->insert('jabatan', $dataJabatan);
    }
}
