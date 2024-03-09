<?php
class Dashboard extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }
    public function index()
    {
        $this->load->view('template/header');
        $this->load->view('template/footer');
        $this->load->view('template/nav');

    }
    
}
    