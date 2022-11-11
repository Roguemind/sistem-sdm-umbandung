<?php
    class Model_dosen extends CI_Model{
        public function getAccDosen($id_pegawai){
            $query = $this->db->query(
            "SELECT peg.nama, ten.no_pegawai FROM dosen AS dos 
            LEFT JOIN pegawai AS peg
            ON dos.id_pegawai = peg.id_pegawai
            WHERE dos.id_pegawai = ".$id_pegawai);  
            return $query -> row_array();
        }
    }