<?php

class Murid extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Murid_model');
    }

    public function index()
    {
        $data['murid'] = $this->Murid_model->viewMurid();
        $this->load->view('Murid', $data);
    }
    public function tambah()
    {
        $validation = $this->form_validation;

        $validation->set_rules('nama','Nama','required');
        $validation->set_rules('nisn','NISN','required');
        $validation->set_rules('kelas','Kelas','required');
        $validation->set_rules('alamat','Alamat','required');

        if($validation->run() == FALSE)
        {
            $this->load->view('tambah');
        }else {
            $this->Murid_model->tambahMurid();
            redirect('murid');
        }

    }

    public function hapus($id)
    {
        $this->Murid_model->hapus($id);
        redirect('murid');
    }

    public function ubah($id)
    {
        $validation = $this->form_validation;
        $data['murid'] = $this->Murid_model->getByld($id);

        $validation->set_rules('nama', 'Nama', 'required');
        $validation->set_rules('nisn', 'NISN', 'required');
        $validation->set_rules('kelas', 'Kelas', 'required');
        $validation->set_rules('alamat', 'Alamat', 'required');

        if($validation->run() == FALSE)  
        {
            $this->load->view('ubah', $data);
        }else{
            $this->Murid_model->ubahMurid();
            redirect('murid');           
        }
    }
}