<?php
class Model_dosen extends CI_Model
{
    public function getProFak($account_uid)
    {
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

    public function cekJAD($account_uid)
    {
        $this->db->select('aktivasi');
        $this->db->from('jad');
        $this->db->join('dosen', 'dosen.id_pegawai = jad.id_pegawai');
        $this->db->join('account', 'account.no_pegawai = dosen.no_pegawai');
        $this->db->where('account.no_pegawai = ' . $account_uid);
        $query = $this->db->get();
        return $query;
    }

    public function pengajuanJAD($account_uid)
    {
        $this->db->set('id_pegawai', $account_uid);
        $this->db->set('aktivasi', 0);
        return $this->db->insert('jad');
    }
<<<<<<< Updated upstream
    public function getPengajuan()
    {
        return $this->db->get('pengajuan')->result_array();
=======

    public function getArsip($role,$account_uid)
    {
        $this->db->select('*');
        $this->db->from('arsip_'.$role);
        $this->db->join($role, $role . '.id_prodi = arsip_'.$role.'.id_prodi');
        $this->db->join('prodi', 'prodi.id_prodi = arsip_dosen.id_prodi');
        $this->db->join('account', 'account.no_pegawai ='.$role.'.no_pegawai');
        $this->db->where('arsip_dosen.id_prodi = dosen.id_prodi');
        $query = $this->db->get();
        return $query->result_array();
>>>>>>> Stashed changes
    }
}
