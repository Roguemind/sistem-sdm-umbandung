<?php
class Model_dosen extends CI_Model
{
    function get_data()
    {
        return $this->db->get('dosen');
    }
}
