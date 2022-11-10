<?php
    class Model_tendik extends CI_Model{
        public function getAkun($id_pegawai){
            $query = $this->db->query(
            "SELECT peg.nama, ten.no_pegawai FROM tendik AS ten 
            LEFT JOIN pegawai AS peg
            ON ten.id_pegawai = peg.id_pegawai
            WHERE ten.id_pegawai = ".$id_pegawai);  
            return $query -> row_array();
        }
    }