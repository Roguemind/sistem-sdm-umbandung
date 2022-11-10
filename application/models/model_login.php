<?php
class model_login extends CI_Model{
    public function cekUsername($username){
        return $this->db->get_where('account', array('username' => $username));
    }

    public function cekPassword($username, $password){
        return $this->db->get_where('account', array('username' => $username, 'password' => $password));
    }
    
    public function aksesDB($role, $account_uid){
        $query = $this->db->query(
            "SELECT pegawai.nama FROM account
            FULL OUTER JOIN $role
            ON account.no_pegawai = $role.no_pegawai 
            FULL OUTER JOIN pegawai
            ON account.id_pegawai = pegawai.id_pegawai
            WHERE account.no_pegawai = $account_uid");   
            return $query;
    }
}
?>