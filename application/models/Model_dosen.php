<?php
class Model_dosen extends CI_Model
{
    public function getPegawaiDosen()
    {
        $this->db->select('*');
        $this->db->from($this->table);
        $this->db->join('dosen', $this->table . '.nik = dosen.nik');
        $this->db->join('prodi', 'prodi.id_prodi = dosen.id_prodi');
        $this->db->join('jabatan_dosen', 'jabatan_dosen.id_jabatan = dosen.id_jabatan');
        $query = $this->db->get();

        return $query->result_array();
    }

    public function getProFak($account_uid)
    {
        $this->db->select('*');
        $this->db->from('account');
        $this->db->join('dosen', 'dosen.id_pegawai = account.id_pegawai');
        $this->db->join('prodi', 'prodi.id_prodi = dosen.id_prodi');
        $this->db->join('fakultas', 'fakultas.id_fakultas = prodi.id_fakultas');
        $this->db->where('account.no_pegawai = ' . $account_uid);
        $query = $this->db->get();
        return $query->row_array();
    }

    public function getRekamPendidikan($role, $account_uid)
    {
        $this->db->select('*');
        $this->db->from('rekam_pendidikan');
        $this->db->join($role, $role . '.nik = rekam_pendidikan.nik');
        $this->db->join('account', 'account.id_pegawai = ' . $role . '.id_pegawai');
        $this->db->where('account.id_pegawai = ' . $account_uid);
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
        $this->db->from('pengajuan_jad');
        $this->db->join('dosen', 'dosen.nidn = pengajuan_jad.id_dosen');
        $this->db->join('account', 'account.id_pegawai = dosen.id_pegawai');
        $this->db->where('account.id_pegawai = ' . $account_uid);
        $query = $this->db->get();
        return $query;
    }

    public function pengajuanJAD($account_uid)
    {
        $this->db->set('id_pegawai', $account_uid);
        $this->db->set('aktivasi', 0);
        return $this->db->insert('jad');
    }
    public function getPengajuan()
    {
        return $this->db->get('pengajuan')->result_array();
    }

    public function getArsip($role, $account_uid)
    {
        $this->db->select('*');
        $this->db->from('arsip_' . $role);
        $this->db->join($role, $role . '.id_prodi = arsip_' . $role . '.id_prodi');
        $this->db->join('prodi', 'prodi.id_prodi = arsip_dosen.id_prodi');
        $this->db->join('account', 'account.id_pegawai =' . $role . '.id_pegawai');
        $this->db->where('arsip_dosen.id_prodi = dosen.id_prodi');
        $query = $this->db->get();
        return $query->result_array();
    }

    public function getviewPdf($file)
    {
        $this->db->select('*');
        $this->db->from('pengajuan');
        $this->db->join($file,$file . '.id_pegawai = pengajuan.id_pegawai');
        $query = $this->db->get();
        return $query->result_array();
    }
    

}
