<?php

class Mahasiswa extends CI_controller{

    public function __construct(){
        parent::__construct();
        $this->load->model('Mahasiswa_model');
        $this->load->library('form_validation');
    }


    public function index(){
        $data['judul'] = "Mahasiswa page";
        $data['mahasiswa'] = $this->Mahasiswa_model->getAllMahasiswa();
        $this->load->view("templates/header", $data);
        $this->load->view("mahasiswa/index", $data);
        $this->load->view("templates/footer");
    }

    public function tambah(){
        $data['judul'] = "Tambah data mahasiswa";

        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('nrp', 'Nrp', 'required|numeric');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
        $this->form_validation->set_rules('jurusan', 'Jurusan', 'required');
        if ($this->form_validation->run() == FALSE){
            $this->load->view("templates/header", $data);
            $this->load->view("mahasiswa/tambah");
            $this->load->view("templates/footer");
        }else{
            $this->Mahasiswa_model->insert();
            $this->session->set_flashdata('flash', 'Ditambahkan');
            redirect('mahasiswa');
        }
        
    }

    public function hapus($id){
        $this->Mahasiswa_model->delete($id);
        $this->session->set_flashdata('flash', 'Dihapus');
        redirect('mahasiswa');
    }


}