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

    function insert_mahasiswa($data)
    {
        $sql = "INSERT INTO mhs VALUES (?,?,?,?)";
        $this->db->query($sql, array($data['nrp'], $data['nama'], $data['jenis_kelamin'], $data['alamat']));
    }
}
