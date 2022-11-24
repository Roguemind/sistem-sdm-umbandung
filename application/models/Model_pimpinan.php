<?php
    class Model_pimpinan extends CI_Model{
        public function getDataDosen(){
            $this->db->select('*, pegawai.nama as namapeg, unit.nama_unit as unitkerja');
            $this->db->from('dosen');
            $this->db->join('pegawai', 'pegawai.id_pegawai = dosen.id_pegawai');
            $this->db->join('unit', 'unit.id_unit = dosen.id_unit');
            $query = $this->db->get(); 
            return $query->result_array();
        }

        public function getDataTendik(){
            $this->db->select('* , pegawai.nama as namapeg, unit.nama_unit as unitkerja');
            $this->db->from('tendik');
            $this->db->join('pegawai', 'pegawai.id_pegawai = tendik.id_pegawai');
            $this->db->join('unit', 'unit.id_unit = tendik.id_unit');
            $query = $this->db->get(); 
            return $query->result_array();
        }
    }