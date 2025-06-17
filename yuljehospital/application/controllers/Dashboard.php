<?php
defined('BASEPATH')OR exit('No direct script acsess allowed');

class Dashboard extends CI_Controller{
    public function index(){
        $data['content']= '<h1> Selamat Datang System Web Rumah Sakir Angker Ngeri </h1>';
        $this->load->view('Tamplates/header');
        $this->load->view('dashboard', $data);
        $this->load->view('Tamplates/footer');
    }
}