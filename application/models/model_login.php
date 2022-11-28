<?php
class model_login extends CI_Model
{
    public function cekUsername($username)
    {
        return $this->db->get_where('account', array('username' => $username));
    }

    public function cekPassword($username, $password)
    {
        return $this->db->get_where('account', array('username' => $username, 'password' => $password));
    }   

    public function aksesDB($role, $account_uid)
    {
        $this->db->select('*');
        $this->db->from('account');
        $this->db->join($role, $role . '.no_pegawai = account.no_pegawai');
        $this->db->join('pegawai', 'pegawai.id_pegawai = ' . $role . '.id_pegawai');
        $this->db->where('account.no_pegawai = ' . $account_uid);
        $query = $this->db->get();
        return $query;
    }
}
