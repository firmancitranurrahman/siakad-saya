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


 }