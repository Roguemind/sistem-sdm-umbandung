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
    public function getArsipTendik()
    {
        return $this->db->get('arsip_tendik')->result_array();
    }
    public function getPengajuan()
    {
        return $this->db->get('pengajuan')->result_array();
    }

    public function getPengajuanbyId()
    {
        $this->db->select('*');
        $this->db->from('pengajuan');
        $this->db->join('pegawai', 'pengajuan' . '.id_pegawai = pegawai.id_pegawai');
        $query = $this->db->get();
        return $query->result_array();
    }

    public function simpanDataprodi($dataprodi)
    {
        return $this->db->insert('prodi', $dataprodi);
    }
    public function simpanDatajad($datajad)
    {
        return $this->db->insert('jad', $datajad);
    }
    public function getjad()
    {
        $this->db->select('*');
        $this->db->from('jad');
        $query = $this->db->get();
        return $query->result_array();
    }
    public function tambahlembur($datalembur)
    {
        return $this->db->insert('lembur', $datalembur);
    }
    public function simpanDatafakultas($datafakultas)
    {
        return $this->db->insert('fakultas', $datafakultas);
    }
    public function getlembur()
    {
        return $this->db->get('lembur')->result_array();
    }
}
