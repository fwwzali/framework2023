<?php

class MahasiswaModel extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }

    function get_mahasiswa()
    {
        $sql = "SELECT * FROM mhs";
        $data = $this->db->query($sql);
        return $data->result();
    }
}
