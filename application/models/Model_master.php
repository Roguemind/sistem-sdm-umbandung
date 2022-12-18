<?php
class Model_master extends CI_Model
{
    public function aksesDB($role, $uid)
    {
        $this->db->select('*');
        $this->db->from('account');
        if($role == 'dosen'){
            $this->db->join('dosen','dosen.no_pegawai = account.no_pegawai');
            $this->db->join('pegawai', 'pegawai.nik = dosen.nik');
            $this->db->join('jabatan_dosen', 'jabatan_dosen.nik = dosen.nik');
            $this->db->join('prodi', 'prodi.id_prodi = dosen.id_prodi');
            $this->db->join('unit', 'unit.id_unit = prodi.id_fakultas');
        }
        else if($role == 'tendik'){
            $this->db->join('tendik','tendik.no_pegawai = account.no_pegawai');
            $this->db->join('pegawai', 'pegawai.nik = tendik.nik');
            $this->db->join('jabatan_tendik', 'jabatan_tendik.id_jabatan = tendik.id_jabatan');
            $this->db->join('unit', 'unit.id_unit = tendik.id_unit');
        }
        else if($role == 'admin'){
            $this->db->join('tendik','tendik.no_pegawai = account.no_pegawai');
            $this->db->join('pegawai', 'pegawai.nik = tendik.nik');
            $this->db->join('jabatan_tendik', 'jabatan_tendik.id_jabatan = tendik.id_jabatan');
            $this->db->join('unit', 'unit.id_unit = tendik.id_unit');
        }
        $this->db->where('account.no_pegawai = ' . $uid);
        $query = $this->db->get();
        return $query->row_array();
    }

    public function setProfile($id, $data)
    {
        $this->db->where('nik', $id);
        $query = $this->db->get('pegawai',$data);
        return $query->row_array();
    }

    public function updateProfile($data, $uid)
    {
        $this->db->set($data);
        $this->db->where('nik',$uid);
        return $this->db->update('pegawai');
    }
}
