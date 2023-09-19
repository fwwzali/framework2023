<?php

class Mahasiswa extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('MahasiswaModel');
    }

    //menampilkan data mahasiswa
    function index()
    {
        //ambil data dari model
        $data['judul'] = "Data Mahasiswa";
        $data['mhs'] = $this->MahasiswaModel->get_mahasiswa();
        //ambil template tampilan dari view
        $this->load->view('v_mahasiswa', $data);
    }
}
