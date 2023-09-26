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

    function get_one($nrp)
    {
        $sql = "SELECT * FROM mhs WHERE nrp = ?";
        $data = $this->db->query($sql, array($nrp));
        return $data->result();
    }

    function update($data)
    {
        $sql = "UPDATE mhs 
                SET nama = ?, jenis_kelamin = ?, alamat = ? 
                WHERE nrp = ?";
        $this->db->query($sql, array($data['nama'], $data['jenis_kelamin'], $data['alamat'], $data['nrp']));
    }
}
