<?php
class Model_master extends CI_Model
{
    public function aksesDB($role, $account_uid)
    {
        $this->db->select('*');
        $this->db->from('account');
        $this->db->join($role, $role . '.no_pegawai = account.no_pegawai');
        $this->db->join('pegawai', 'pegawai.id_pegawai = ' . $role . '.id_pegawai');
        $this->db->where('account.no_pegawai = ' . $account_uid);
        $query = $this->db->get();
        return $query->row_array();
    }

    public function getUnit($role, $account_uid)
    {
        $this->db->select('*');
        $this->db->from('account');
        $this->db->join($role, $role . '.no_pegawai = account.no_pegawai');
        $this->db->join('unit', 'unit.id_unit = ' . $role . '.id_unit');
        $this->db->where('account.no_pegawai = ' . $account_uid);
        $query = $this->db->get();
        return $query->row_array();
    }

    public function getJabatan($role, $account_uid)
    {
        $this->db->select('*');
        $this->db->from('account');
        $this->db->join($role, $role . '.no_pegawai = account.no_pegawai');
        $this->db->join('jabatan', 'jabatan.id_jabatan = ' . $role . '.id_jabatan');
        $this->db->where('account.no_pegawai = ' . $account_uid);
        $query = $this->db->get();
        return $query->row_array();
    }

    public function setProfile($id, $data)
    {
        $this->db->where('id_pegawai', $id);
        $query = $this->db->get('pegawai',$data);
        return $query->row_array();
    }

    public function updateProfile($data, $uid){
        $this->db->set($data);
        $this->db->where($uid);
        return $this->db->update('pegawai');
    }
}
