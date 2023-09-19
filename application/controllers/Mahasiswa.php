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

    function form()
    {
        $data['judul'] = "INPUT DATA MAHASISWA";
        $this->load->view('v_form', $data);
    }

    function insert()
    {
        if ($this->input->post()) {
            $data_input_user = $this->input->post();
            //print_r($data_input_user);
            //exit;
            $this->MahasiswaModel->insert_mahasiswa($data_input_user);
            redirect('mahasiswa/index');
        }
    }
}
