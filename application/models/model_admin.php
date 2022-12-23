<?php
class Model_admin extends CI_Model
{
    public function aksesDB($account_uid)
    {
        $this->db->select('*');
        $this->db->from('account');
        $this->db->join('tendik', 'tendik.id_pegawai = account.no_pegawai');
        $this->db->join('pegawai', 'pegawai.no_pegawai = tendik.no_pegawai');
        $this->db->join('jabatan_tendik', 'jabatan_tendik.id_jabatan = tendik.id_jabatan');
        $this->db->join('unit', 'unit.id_unit = tendik.id_unit');
        $this->db->where('account.no_pegawai = ' . $account_uid);
        $query = $this->db->get();
        return $query->row_array();
    }

    public function getRekamPendidikan($role, $account_uid)
    {
        $this->db->select('*');
        $this->db->from('rekam_pendidikan');
        $this->db->join($role, $role . '.no_pegawai = rekam_pendidikan.no_pegawai');
        $this->db->join('account', 'account.no_pegawai = ' . $role . '.no_pegawai');
        $this->db->where('account.no_pegawai = ' . $account_uid);
        $query = $this->db->get();
        return $query->result_array();
    }

    public function getProdi()
    {
        return $this->db->get('prodi')->result_array();
    }

    public function getUnit()
    {
        return $this->db->get('unit')->result_array();
    }

    public function getJabatan()
    {
        return $this->db->get('jabatan')->result_array();
    }

    public function insertPegawai($dataPegawai)
    {
        return $this->db->insert('pegawai', $dataPegawai);
    }

    public function deletePegawai($uid)
    {
        return $this->db->delete('pegawai', array('nik' => $uid));
    }

    //Model Data Dosen

    public function getDataDosen()
    {
        $this->db->select('*');
        $this->db->from('dosen');
        $this->db->join('pegawai', 'pegawai.no_pegawai = dosen.no_pegawai');
        $this->db->join('prodi', 'prodi.id_prodi = dosen.id_prodi');
        $query = $this->db->get();
        return $query->result_array();
    }

    public function aksesDataDosen($uid)
    {
        $this->db->select('*');
        $this->db->from('dosen');
        $this->db->join('pegawai', 'pegawai.no-pegawai = dosen.no_pegawai');
        $this->db->join('prodi', 'prodi.id_prodi = dosen.id_prodi');
        $this->db->join('fakultas', 'fakultas.id_fakultas = prodi.id_fakultas');
        $this->db->where('dosen.id_pegawai = ' . $uid);
        $query = $this->db->get();
        return $query->row_array();
    }

    public function getProFak_Dosen($account_uid)
    {
        $this->db->select('*');
        $this->db->from('dosen');
        $this->db->join('prodi', 'prodi.id_prodi = dosen.id_prodi');
        $this->db->join('fakultas', 'fakultas.id_fakultas = prodi.id_fakultas');
        $this->db->where('dosen.no_pegawai = ' . $account_uid);
        $query = $this->db->get();
        return $query->row_array();
    }

    public function getJabatan_Dosen($account_uid)
    {
        $this->db->select('*');
        $this->db->from('dosen');
        $this->db->join('jabatan', 'jabatan.id_jabatan = dosen.id_jabatan');
        $this->db->where('dosen.no_pegawai = ' . $account_uid);
        $query = $this->db->get();
        return $query->row_array();
    }

    public function insertDosen($data)
    {
        return $this->db->insert('dosen', $data);
    }

    public function updateDosen($data, $uid)
    {
        $this->db->set($data);
        $this->db->where('no_pegawai', $uid);
        return $this->db->update('dosen');
    }

    public function deleteDosen($uid)
    {
        return $this->db->delete('dosen', array('nik' => $uid));
    }

    //Model data tendik
    public function getDataTendik()
    {
        $this->db->select('*');
        $this->db->from('tendik');
        $this->db->join('pegawai', 'pegawai.no_pegawai = tendik.no_pegawai');
        $this->db->join('unit', 'unit.id_unit = tendik.id_unit');
        $query = $this->db->get();
        return $query->result_array();
    }


    public function aksesDataTendik($uid)
    {
        $this->db->select('*');
        $this->db->from('tendik');
        $this->db->join('pegawai', 'pegawai.no_pegawai = tendik.no_pegawai');
        $this->db->join('unit', 'unit.id_unit = tendik.id_unit');
        $this->db->join('jabatan', 'jabatan.id_jabatan = tendik.id_jabatan');
        $this->db->where('tendik.id_pegawai = ' . $uid);
        $query = $this->db->get();
        return $query->row_array();
    }

    public function getJabatan_Tendik($account_uid)
    {
        $this->db->select('*');
        $this->db->from('tendik');
        $this->db->join('jabatan', 'jabatan.id_jabatan = tendik.id_jabatan');
        $this->db->where('tendik.id_pegawai = ' . $account_uid);
        $query = $this->db->get();
        return $query->row_array();
    }

    public function insertTendik($data)
    {
        return $this->db->insert('tendik', $data);
    }

    public function updateTendik($data, $uid)
    {
        $this->db->set($data);
        $this->db->where('no_pegawai', $uid);
        return $this->db->update('tendik');
    }

    public function deleteTendik($uid)
    {
        return $this->db->delete('tendik', array('nik' => $uid));
    }

    public function simpanDataPegawai($dataPegawai)
    {
        return $this->db->insert('pegawai', $dataPegawai);
    }

    public function simpanDataTendik($dataTendik)
    {
        return $this->db->insert('tendik', $dataTendik);
    }

    public function simpanDataUnit($dataUnit)
    {
        return $this->db->insert('unit', $dataUnit);
    }

    public function simpanDataJabatan($dataJabatan)
    {
        return $this->db->insert('jabatan', $dataJabatan);
    }
    public function tambahBerkas($role, $dataBerkas)
    {
        return $this->db->insert('arsip_'.$role, $dataSk);
    }

    public function getArsipDosen()
    {
        $this->db->select('*');
        $this->db->from('arsip_dosen');
        $this->db->join('prodi', 'prodi.id_prodi = arsip_dosen.id_prodi');
        $query = $this->db->get();
        return $query->result_array();
    }

    public function uploadBerkasDosen($data)
    {
        return $this->db->insert('arsip_dosen', $data);
    }

    public function getArsipTendik()
    {
        $this->db->select('*');
        $this->db->from('arsip_tendik');
        $this->db->join('unit', 'unit.id_unit = arsip_tendik.id_unit');
        $query = $this->db->get();
        return $query->result_array();
    }
    public function getPengajuan()
    {
        return $this->db->get('pengajuan')->result_array();
    }

    public function getPengajuanbyId()
    {
        $this->db->select('*');
        $this->db->from('pengajuan');
        $this->db->join('pegawai', 'pengajuan' . '.no_pegawai = pegawai.no_pegawai');
        $query = $this->db->get();
        return $query->result_array();
    }

    public function simpanDataprodi($dataprodi)
    {
        return $this->db->insert('prodi', $dataprodi);
    }
    public function simpanDatajad($datajad, $uid)
    {
        $this->db->set($datajad);
        $this->db->where('id_jad', $uid);
        return $this->db->update('jad');
    }
    public function getJAD()
    {
        $this->db->select('*');
        $this->db->from('jad');
        $this->db->join('dosen', 'dosen.no_pegawai = jad.no_pegawai');
        $this->db->join('pegawai', 'pegawai.no_pegawai = dosen.id_pegawai');
        $this->db->join('prodi', 'prodi.id_prodi = dosen.id_prodi');
        $query = $this->db->get();
        return $query->result_array();
    }
    public function tambahlembur($datalembur)
    {
        return $this->db->insert('lembur', $datalembur);
    }
    public function simpanDatafakultas($datafakultas)
    {
        return $this->db->insert('fakultas', $datafakultas);
    }
    public function getlembur()
    {
        return $this->db->get('lembur')->result_array();
    }
}
