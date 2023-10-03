<?php

class MahasiswaModel extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }

    function get_mahasiswa()
    {
        //pakai RAW SQL
        //---------------
        // $sql = "SELECT * FROM mhs";
        // $data = $this->db->query($sql);
        // return $data->result();

        //pakai Query Builder
        return $this->db->get('mhs')->result();
        // SELECT * FROM mhs
    }

    function insert_mahasiswa($data)
    {
        //$sql = "INSERT INTO mhs VALUES (?,?,?,?)";
        //$this->db->query($sql, array($data['nrp'], $data['nama'], $data['jenis_kelamin'], $data['alamat']));

        $insert_data = array(
            'nrp' => $data['nrp'],
            'nama' => $data['nama'],
            'jenis_kelamin' => $data['jenis_kelamin'],
            'alamat' => $data['alamat']
        );

        $this->db->insert('mhs', $insert_data);
    }

    function get_one($nrp)
    {
        // $sql = "SELECT * FROM mhs WHERE nrp = ?";
        // $data = $this->db->query($sql, array($nrp));
        // return $data->result();

        //return $this->db->get_where('mhs', array('nrp' => $nrp))->result();
        $this->db->where('nrp', $nrp);
        return $this->db->get('mhs')->result();
    }

    function update($data)
    {
        // $sql = "UPDATE mhs 
        //         SET nama = ?, jenis_kelamin = ?, alamat = ? 
        //         WHERE nrp = ?";
        // $this->db->query($sql, array($data['nama'], $data['jenis_kelamin'], $data['alamat'], $data['nrp']));

        $data_update = array(
            'nama' => $data['nama'],
            'jenis_kelamin' => $data['jenis_kelamin'],
            'alamat' => $data['alamat']
        );

        $this->db->where('nrp', $data['nrp']);
        $this->db->update('mhs', $data_update);
    }

    function delete($nrp)
    {
        // $sql = "DELETE FROM mhs WHERE nrp = ?";
        // $this->db->query($sql, array($nrp));

        $this->db->where('nrp', $nrp);
        $this->db->delete('mhs');
    }
}
