<?php
class Model_pegawai extends CI_Model
{
    private $table = "pegawai";

    public function getPegawaiDosen()
    {
        $this->db->select('*');
        $this->db->from($this->table);
        $this->db->join('dosen', $this->table.'.nik = dosen.nik');
        $this->db->join('prodi', 'prodi.id_prodi = dosen.id_prodi');
        $this->db->join('jabatan_dosen', 'jabatan_dosen.id_jabatan = dosen.id_jabatan');
        $query = $this->db->get();

        return $query->result_array();
    }

    public function getPegawaiTendik()
    {
        $this->db->select('*');
        $this->db->from($this->table);
        $this->db->join('tendik', $this->table.'.nik = tendik.nik');
        $query = $this->db->get();

        return $query->result_array();
    }

    public function getRekamPendidikan($id){
        $this->db->select('*');
        $this->db->from('rekam_pendidikan');
        $this->db->join($this->table, $this->table.'.nik = rekam_pendidikan.nik');
        $this->db->where('rekam_pendidikan.nik ='. $id);
        $query = $this->db->get();
        return $query->result_array();
    }

    public function getProfilDosen($id){
        $this->db->select('*');
        $this->db->from('dosen');
        $this->db->join($this->table, $this->table.'. nik = dosen.nik');
        $this->db->join('prodi', 'prodi.id_prodi = dosen.id_prodi');
        $this->db->join('unit', 'prodi.id_fakultas = unit.id_unit');
        $this->db->join('jabatan_dosen', 'jabatan_dosen.id_jabatan = dosen.id_jabatan');
        $this->db->where('dosen.id_pegawai = ' . $id);
        $query = $this->db->get();
        return $query->row_array();
    }

    public function getProfilTendik($id){
        $this->db->select('*');
        $this->db->from('tendik');
        $this->db->join($this->table, $this->table.'.no_pegawai = tendik.no_pegawai');
        $this->db->join('unit', 'unit.id_unit = tendik.id_unit');
        $this->db->join('jabatan_tendik', 'jabatan_tendik.id_jabatan = tendik.id_jabatan');
        $this->db->where('tendik.id_pegawai = ' . $id);
        $query = $this->db->get();
        return $query->row_array();
    }


    public function savePegawai($data)
    {
        return $this->db->insert($this->table, $data);
    }

    public function saveDosen($data)
    {
        return $this->db->insert('dosen', $data);
    }

    public function saveTendik($data)
    {
        return $this->db->insert('tendik', $data);
    }

    public function getPegawaiById($id)
    {
        return $this->db->get_where($this->table, ["nik" => $id])->row();
    }

    public function editPegawai($id, $data)
    {
        return $this->db->update($this->table, $data, array('nik' => $id));
    }

    public function deletePegawai($id)
    {
        return $this->db->delete($this->table, array("nik" => $id));
    }

    public function deleteDosen($id)
    {
        return $this->db->delete('dosen', array("nik" => $id));
    }

    public function deleteTendik($id)
    {
        return $this->db->delete('tendik', array("nik" => $id));
    }

    public function getFakultas()
    {
        $this->db->select('*');
        $this->db->from('unit');
        $this->db->like('id_unit','FK');
        $query = $this->db->get();
        return $query->result_array();
    }

    public function getUnit()
    {
        return $this->db->get('unit')->result_array();
    }

    public function getProdi()
    {
        return $this->db->get('prodi')->result_array();
    }

    public function getJabatanDosen(){
        return $this->db->get('jabatan_dosen')->result_array();
    }

    public function getJabatanTendik(){
        return $this->db->get('jabatan_tendik')->result_array();
    }
}
