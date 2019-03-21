<?php
 class Home extends CI_Controller{

    public function index(){
        $this->load->view('template/header');
        $this->load->view('admin/dashboard');
        $this->load->view('template/sidebar');
        $this->load->view('template/footer');        

    }
    public function nilaisiswaipa(){
        $this->load->view('template/header');
        $this->load->view('admin/nilaisiswaipa');
        $this->load->view('template/sidebar');
        $this->load->view('template/footer');        

         
    }
    public function nilaisiswaips(){
        $this->load->view('template/header');
        $this->load->view('admin/nilaisiswaips');
        $this->load->view('template/sidebar');
        $this->load->view('template/footer');                 
    }
    public function addsiswa(){
        $this->load->view('template/header');
        $this->load->view('admin/addsiswa');
        $this->load->view('template/sidebar');
        $this->load->view('template/footer'); 
    }
    public function addguru(){
        $this->load->view('template/header');
        $this->load->view('admin/addguru');
        $this->load->view('template/sidebar');
        $this->load->view('template/footer'); 
    }
    public function statusspp(){
        $this->load->view('template/header');
        $this->load->view('admin/statusspp');
        $this->load->view('template/sidebar');
        $this->load->view('template/footer'); 
    }
    public function pengumuman(){
        $this->load->view('template/header');
        $this->load->view('admin/pengumuman');
        $this->load->view('template/sidebar');
        $this->load->view('template/footer'); 
    }
    public function listsiswa(){
        $this->load->view('template/header');
        $this->load->view('admin/listsiswa');
        $this->load->view('template/sidebar');
        $this->load->view('template/footer'); 
    }
    public function listguru(){
        $this->load->view('template/header');
        $this->load->view('admin/listguru');
        $this->load->view('template/sidebar');
        $this->load->view('template/footer'); 
    }

 }