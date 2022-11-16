<?php
    class Model_master extends CI_Model{
        public function aksesDB($role, $account_uid){
            $this->db->select('*');
            $this->db->from('account');
            $this->db->join($role, $role.'.no_pegawai = account.no_pegawai');
            $this->db->join('pegawai', 'pegawai.id_pegawai = '.$role.'.id_pegawai');
            $this->db->where('account.no_pegawai = '.$account_uid);
            $query = $this->db->get(); 
            return $query;
        }

        public function getUnit(){
            $this->db->select('*');
            $this->db->from('unit');
            $query = $this->db->get(); 
            return $query -> result_array();
        }
    }