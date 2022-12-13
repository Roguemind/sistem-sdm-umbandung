<?php
class Model_pegawai extends CI_Model
{
    private $table = "pegawai";

    public function getPegawai()
    {        
        // $this->db->select('*');
        // $this->db->from('pegawai');
        // $this->db->join('dosen', 'pegawai.id_pegawai = dosen.id_pegawai'); 
        // $this->db->join('tendik', 'pegawai.id_pegawai = tendik.id_pegawai'); 
        // $query = $this->db->get();
        
        return $this->db->get('pegawai')->result_array();
    }

    public function savePegawai($data){
        return $this->db->insert($this->table, $data);
    }

    public function getPegawaiById($id){
        return $this->db->get_where($this->table, ["nik" => $id])->row();
    }

    public function editPegawai($id, $data){
        return $this->db->update($this->table, $data, array('nik' => $id));
    }
    
    public function deletePegawai($id)
    {
    return $this->db->delete($this->table, array("nik" => $id));
    }
}
