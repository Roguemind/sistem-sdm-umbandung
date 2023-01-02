<?php
class model_login extends CI_Model
{
    public function cekUsername($username)
    {
        return $this->db->get_where('account', array('username' => $username));
    }

    public function cekPassword($username, $password)
    {
        return $this->db->get_where('account', array('username' => $username, 'password' => md5($password)));
    }

    public function aksesDB($role, $account_uid)
    {
        $this->db->select('*');
        $this->db->from('account');
        $this->db->join($role, $role . '.id_pegawai = account.id_pegawai');
        $this->db->join('pegawai', 'pegawai.nik = ' . $role . '.nik');
        $this->db->where('account.id_pegawai = ' . $account_uid);
        $query = $this->db->get();
        return $query;
    }
}
