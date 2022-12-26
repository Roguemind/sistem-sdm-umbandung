<?php
class Model_master extends CI_Model
{
    public function aksesDB($role, $uid)
    {
        $this->db->select('*');
        $this->db->from('account');
        if($role == 'dosen'){
            $this->db->join('dosen','dosen.id_pegawai = account.id_pegawai');
            $this->db->join('pegawai', 'pegawai.nik = dosen.nik');
            $this->db->join('jabatan_dosen', 'jabatan_dosen.id_jabatan = dosen.id_jabatan');
            $this->db->join('prodi', 'prodi.id_prodi = dosen.id_prodi');
            $this->db->join('unit', 'unit.id_unit = prodi.id_fakultas');
        }
        else if($role == 'tendik'){
            $this->db->join('tendik','tendik.id_pegawai = account.id_pegawai');
            $this->db->join('pegawai', 'pegawai.nik = tendik.nik');
            $this->db->join('jabatan_tendik', 'jabatan_tendik.id_jabatan = tendik.id_jabatan');
            $this->db->join('unit', 'unit.id_unit = tendik.id_unit');
        }
        else if($role == 'admin'){
            $this->db->join('tendik','tendik.id_pegawai = account.id_pegawai');
            $this->db->join('pegawai', 'pegawai.nik = tendik.nik');
            $this->db->join('jabatan_tendik', 'jabatan_tendik.id_jabatan = tendik.id_jabatan');
            $this->db->join('unit', 'unit.id_unit = tendik.id_unit');
        }
        $this->db->where('account.id_pegawai = ' . $uid);
        $query = $this->db->get();
        return $query->row_array();
    }

    public function getRekamPendidikan($role,$id){
        $this->db->select('*');
        $this->db->from('account');
        if($role == 'dosen'){
            $this->db->join('dosen','dosen.id_pegawai = account.id_pegawai');
            $this->db->join('pegawai', 'pegawai.nik = dosen.nik');
        }
        else if($role == 'tendik'){
            $this->db->join('tendik','tendik.id_pegawai = account.id_pegawai');
            $this->db->join('pegawai', 'pegawai.nik = tendik.nik');
        }
        else if($role == 'admin'){
            $this->db->join('tendik','tendik.id_pegawai = account.id_pegawai');
            $this->db->join('pegawai', 'pegawai.nik = tendik.nik');
        }
        $this->db->join('rekam_pendidikan','rekam_pendidikan.nik = pegawai.nik');
        $this->db->where('account.id_pegawai = '.$role.'.id_pegawai');
        $query = $this->db->get();
        return $query->result_array();
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
