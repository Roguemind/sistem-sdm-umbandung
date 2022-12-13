<?php
class Model_master extends CI_Model
{
    public function aksesDB($role, $account_uid)
    {
        $this->db->select('*');
        $this->db->from('account');
        $this->db->join($role, $role . '.no_pegawai = account.no_pegawai');
        $this->db->join('pegawai', 'pegawai.nik = ' . $role . '.nik');
        $this->db->where('account.no_pegawai = ' . $account_uid);
        $query = $this->db->get();
        return $query->row_array();
    }

    public function setProfile($id, $data)
    {
        $this->db->where('nik', $id);
        $query = $this->db->get('pegawai',$data);
        return $query->row_array();
    }

    public function updateProfile($data, $uid)
    {
        $this->db->set($data);
        $this->db->where('nik',$uid);
        return $this->db->update('pegawai');
    }
}
