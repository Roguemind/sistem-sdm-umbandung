<?php
class model_login extends CI_Model{
    public function cekUsername($username){
        return $this->db->get_where('account', array('username' => $username));
    }

    public function cekPassword($username, $password){
        return $this->db->get_where('account', array('username' => $username, 'password' => $password));
    }
    
    public function aksesDB($role, $account_uid){
        $this->db->select('*');
        $this->db->from('account');
        $this->db->join($role, $role.'.no_pegawai = account.no_pegawai');
        $this->db->join('pegawai', 'pegawai.id_pegawai = '.$role.'.id_pegawai');
        $this->db->where('account.no_pegawai = '.$account_uid);
        $query = $this->db->get(); 
        return $query;
    }
}
?>

Teguh -> Dosen
Role = dosen
tabel = Dosen

SELECT * FROM account 
JOIN dosen 
ON dosen.no_pegawai = account.no_pegawai 
JOIN pegawai 
ON pegawai.id_pegawai = dosen.id_pegawai 
WHERE account.no_pegawai = 200102102

aksesDB($this->session->userdata('role'),$this->session->userdata('no_pegawai'))->row_array();
join('database_tujuan','database_tujuan.kolom = tabel')
dosen.no_pegawai 