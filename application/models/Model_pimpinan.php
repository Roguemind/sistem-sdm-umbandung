<?php
    class Model_pimpinan extends CI_Model{
        public function getDataDosen(){
            $this->db->select('*');
            $this->db->from('dosen');
            $this->db->join('pegawai', 'pegawai.id_pegawai = dosen.id_pegawai');
            $query = $this->db->get(); 
            return $query->result_array();
        }

        public function getDataTendik(){
            $this->db->select('*');
            $this->db->from('tendik');
            $this->db->join('pegawai', 'pegawai.id_pegawai = tendik.id_pegawai');
            $query = $this->db->get(); 
            return $query->result_array();
        }
    }