<?php
class Model_master extends CI_Model
{
    public function aksesDB($role, $uid)
    {
        $this->db->select('*');
        $this->db->from('account');
        if($role == 'dosen'){
            $this->db->join('dosen','dosen.id_pegawai = account.no_pegawai');
            $this->db->join('pegawai', 'pegawai.no_pegawai = dosen.no_pegawai');
            $this->db->join('jabatan_dosen', 'jabatan_dosen.id_jabatan = dosen.id_jabatan');
            $this->db->join('prodi', 'prodi.id_prodi = dosen.id_prodi');
            $this->db->join('unit', 'unit.id_unit = prodi.id_fakultas');
        }
        else if($role == 'tendik'){
            $this->db->join('tendik','tendik.id_pegawai = account.no_pegawai');
            $this->db->join('pegawai', 'pegawai.no_pegawai = tendik.no_pegawai');
            $this->db->join('jabatan_tendik', 'jabatan_tendik.id_jabatan = tendik.id_jabatan');
            $this->db->join('unit', 'unit.id_unit = tendik.id_unit');
        }
        else if($role == 'admin'){
            $this->db->join('tendik','tendik.id_pegawai = account.no_pegawai');
            $this->db->join('pegawai', 'pegawai.no_pegawai = tendik.no_pegawai');
            $this->db->join('jabatan_tendik', 'jabatan_tendik.id_jabatan = tendik.id_jabatan');
            $this->db->join('unit', 'unit.id_unit = tendik.id_unit');
        }
        $this->db->where('account.no_pegawai = ' . $uid);
        $query = $this->db->get();
        return $query->row_array();
    }

    public function getRekamPendidikan($role,$id){
        $this->db->select('*');
        $this->db->from('account');
        if($role == 'dosen'){
            $this->db->join('dosen','dosen.id_pegawai = account.no_pegawai');
            $this->db->join('pegawai', 'pegawai.no_pegawai = dosen.no_pegawai');
        }
        else if($role == 'tendik'){
            $this->db->join('tendik','tendik.id_pegawai = account.no_pegawai');
            $this->db->join('pegawai', 'pegawai.no_pegawai = tendik.no_pegawai');
        }
        else if($role == 'admin'){
            $this->db->join('tendik','tendik.id_pegawai = account.no_pegawai');
            $this->db->join('pegawai', 'pegawai.nik = tendik.nik');
        }
        $this->db->join('rekam_pendidikan','rekam_pendidikan.no_pegawai = pegawai.no_pegawai');
        $this->db->where('account.no_pegawai = '.$role.'.no_pegawai');
        $query = $this->db->get();
        return $query->result_array();
    }

    public function setProfile($id, $data)
    {
        $this->db->where('no-pegawai', $id);
        $query = $this->db->get('pegawai',$data);
        return $query->row_array();
    }

    public function updateProfile($data, $uid)
    {
        $this->db->set($data);
        $this->db->where('no_pegawai',$uid);
        return $this->db->update('pegawai');
    }
}
