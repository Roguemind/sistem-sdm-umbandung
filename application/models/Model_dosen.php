<?php
class Model_dosen extends CI_Model
{
    public function getProFak($account_uid){
        $this->db->select('*');
        $this->db->from('account');
        $this->db->join('dosen', 'dosen.no_pegawai = account.no_pegawai');
        $this->db->join('prodi', 'prodi.id_prodi = dosen.id_prodi');
        $this->db->join('fakultas', 'fakultas.id_fakultas = prodi.id_fakultas');
        $this->db->where('account.no_pegawai = ' . $account_uid);
        $query = $this->db->get();
        return $query->row_array();
    }

    public function getJabatan($account_uid)
    {
        $this->db->select('*');
        $this->db->from('account');
        $this->db->join('dosen', 'dosen.no_pegawai = account.no_pegawai');
        $this->db->join('jabatan', 'jabatan.id_jabatan = dosen.id_jabatan');
        $this->db->where('account.no_pegawai = ' . $account_uid);
        $query = $this->db->get();
        return $query->row_array();
    }

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
}
