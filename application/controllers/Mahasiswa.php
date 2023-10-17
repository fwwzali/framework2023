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
        $this->load->view('mahasiswa/v_mahasiswa', $data);
    }

    function insert()
    {
        if ($this->input->post()) {
            $data_input_user = $this->input->post();
            $result = $this->MahasiswaModel->insert_mahasiswa($data_input_user);

            if ($result > 0) {
                //sukses
                $this->session->set_flashdata('msg', '<div class="alert alert-success" role="alert">
                Success! Data berhasil disimpan
              </div>
              ');
            } else {
                //err
                $this->session->set_flashdata('msg', '<div class="alert alert-danger" role="alert">
                Error! Data gagal disimpan
              </div>
              ');
            }

            redirect('mahasiswa/index');
        } else {
            $data['judul'] = "INPUT DATA MAHASISWA";
            $this->load->view('v_form', $data);
        }
    }

    public function update($nrp = null)
    {
        if ($this->input->post()) {
            //proses update
            $update_data = $this->input->post();
            $this->MahasiswaModel->update($update_data);
            redirect('mahasiswa');
        } else {
            $data['judul'] = "UPDATE DATA MAHASISWA";
            $data['mahasiswa'] = $this->MahasiswaModel->get_one($nrp);
            $this->load->view('v_update', $data);
        }
    }

    function delete($nrp)
    {
        $this->MahasiswaModel->delete($nrp);
        redirect('mahasiswa');
    }
}
