<?php

class Guru extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Guru_model');
    }

    public function index ()
    {
        $data['guru'] = $this->Guru_model->viewGuru();
        $this->load->view('Guru',$data);
    }
}

