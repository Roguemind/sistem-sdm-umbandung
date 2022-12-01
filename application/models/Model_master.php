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

    public function setProfile($id, $data)
    {
        $this->db->where('id_pegawai', $id);
        $query = $this->db->get('pegawai',$data);
        return $query->row_array();
    }

    public function updateProfile($data, $uid)
    {
        $this->db->set($data);
        $this->db->where('id_pegawai',$uid);
        return $this->db->update('pegawai');
    }

    public function getArsip($role,$account_uid)
    {
        $this->db->select('*');
        $this->db->from('arsip_'.$role);
        $this->db->join($role, $role . '.id_unit = arsip_'.$role.'.id_unit');
        $this->db->join('account', 'account.no_pegawai ='.$role.'.no_pegawai');
        $this->db->where('account.no_pegawai = ' . $account_uid);
        $query = $this->db->get();
        return $query->result_array();
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
}
