<?php
class Users extends CI_Controller
{
    public function __construct()
    {
         parent::__construct();
         $this->load->model('Users_model');
    }
    
    public function index()
    {
        $this->load->view('template/header') ;
        $this->load->view('template/nav') ;
        $this->load->view('template/footer') ;
        $this->load->view('users/index') ;
    } 


    public function add()
    {
        
        $this->form_validation->set_rules('emp_no',        'Employee Number',  'required|trim');
        $this->form_validation->set_rules('last_name',     'last Name',        'required|trim');
        $this->form_validation->set_rules('first_name',    'First Name',       'required|trim');
        $this->form_validation->set_rules('user_level',    'User Level',       'required|trim');

            if($this->form_validation->run() == TRUE)
            {
                $data = array (
                    'emp_no'        =>  $this->input->post('emp_no'),
                    'last_name'     =>  $this->input->post('last_name'),
                    'first_name'    =>  $this->input->post('first_name'),
                    'middle_name'   =>  $this->input->post('middle_name'),
                    'user_level'    =>  $this->input->post('user_level'),
                    'pword'         =>  md5('abc123!@#'),
                    'created'       =>  'users',
                    'date_deleted'  =>  date('Y-m-d')
                );

                $result = $this->Users_model->add($data);
                
                if($result==true) {
                {
                    $this->session->set_flashdata('success', 'Employee Successfully Added!');
                    redirect('users/index');
                }
                } else {
                    $this->session->set_flashdata('err', 'Employee Registration Failed!');
                }
                
                //redirect('users/add');
            }

        $this->load->view('template/header') ;
        $this->load->view('template/nav') ;
        $this->load->view('template/footer') ;
        $this->load->view('users/add') ;
    }
}