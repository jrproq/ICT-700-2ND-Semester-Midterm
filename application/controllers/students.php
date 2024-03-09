<?php
class Students extends CI_Controller
{
    public function __construct()
    {
         parent::__construct();
         $this->load->model("students_model");
    }
    
    public function index()
    {
        
        $data['students'] = $this->students_model->rows();

        $this->load->view('students/index', $data);
        
    } 


    public function add()
    {
        
        $this->form_validation->set_rules('student_no',         'Student Number',   'required|trim');
        $this->form_validation->set_rules('last_name',       'last Name',        'required|trim');
        $this->form_validation->set_rules('first_name',      'First Name',       'required|trim');
        $this->form_validation->set_rules('middle_name',      'MIddle Name',       'required|trim');
        $this->form_validation->set_rules('education_level', 'Student Level',    'required|trim');
        $this->form_validation->set_rules('final_grade', 'Student Level',    'required|trim');
        $this->form_validation->set_rules('midterm_grade', 'Student Level',    'required|trim');

            if($this->form_validation->run() == TRUE)
            {
                $data = array (
                    'education_level' =>  $this->input->post('education_level'),
                    'student_no'         =>  $this->input->post('student_no'),
                    'midterm_grade'       =>  $this->input->post('midterm_grade'),
                    'last_name'       =>  $this->input->post('last_name'),
                    'first_name'       =>  $this->input->post('first_name'),
                    'final_grade'      =>  $this->input->post('final_Grade'),
                    'middle_name'     =>  $this->input->post('middle_name'),
                    'date_deleted'    =>  date('Y-m-d')
                );

                $result = $this->students_model->add($data);
                
                if($result==true) {
                {
                    $this->session->set_flashdata('success', 'Students Successfully Added!');
                    redirect('students/index');
                }
                } else {
                    $this->session->set_flashdata('err', 'Students Registration Failed!');
                }
                
                //redirect('students/add');
            }

        $this->load->view('template/footer') ;
        $this->load->view('students/add') ;
    }
}