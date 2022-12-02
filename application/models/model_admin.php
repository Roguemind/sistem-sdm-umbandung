<?php
class Model_admin extends CI_Model
{
    public function aksesDB($account_uid)
    {
        $this->db->select('*');
        $this->db->from('account');
        $this->db->join('tendik', 'tendik.no_pegawai = account.no_pegawai');
        $this->db->join('pegawai', 'pegawai.id_pegawai = tendik.id_pegawai');
        $this->db->where('account.no_pegawai = ' . $account_uid);
        $query = $this->db->get();
        return $query->row_array();
    }

    public function getRekamPendidikan($role,$account_uid)
    {
        $this->db->select('*');
        $this->db->from('rekam_pendidikan');
        $this->db->join($role, $role . '.id_pegawai = rekam_pendidikan.id_pegawai');
        $this->db->join('account', 'account.no_pegawai = '.$role.'.no_pegawai');
        $this->db->where('account.no_pegawai = ' . $account_uid);
        $query = $this->db->get();
        return $query->result_array();
    }

    public function getUnit()
    {
        return $this->db->get('unit')->result_array();
    }

    public function getJabatan()
    {
        return $this->db->get('jabatan')->result_array();
    }

    public function getDataDosen(){
        $this->db->select('*');
        $this->db->from('dosen');
        $this->db->join('pegawai', 'pegawai.id_pegawai = dosen.id_pegawai');
        $this->db->join('prodi', 'prodi.id_prodi = dosen.id_prodi');
        $query = $this->db->get(); 
        return $query->result_array();
    }

    public function getDataTendik(){
        $this->db->select('* , pegawai.nama as namapeg, unit.nama_unit as unitkerja');
        $this->db->from('tendik');
        $this->db->join('pegawai', 'pegawai.id_pegawai = tendik.id_pegawai');
        $this->db->join('unit', 'unit.id_unit = tendik.id_unit');
        $query = $this->db->get(); 
        return $query->result_array();
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
        return $this->db->get('jad')->result_array();
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
