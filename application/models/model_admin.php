<?php
class Model_admin extends CI_Model
{
    public function getUnit()
    {
        return $this->db->get('unit')->result_array();
    }

    public function getJabatan()
    {
        return $this->db->get('jabatan')->result_array();
    }

    public function simpanDataPegawai($dataPegawai)
    {
        return $this->db->insert('pegawai', $dataPegawai);
    }

    public function simpanDataTendik($dataTendik)
    {
        return $this->db->insert('tendik', $dataTendik);
    }

    public function simpanDataUnit($dataUnit)
    {
        return $this->db->insert('unit', $dataUnit);
    }

    public function simpanDataJabatan($dataJabatan)
    {
        return $this->db->insert('jabatan', $dataJabatan);
    }
    public function tambahSk($dataSk)
    {
        return $this->db->insert('arsip_tendik', $dataSk);
    }
}
