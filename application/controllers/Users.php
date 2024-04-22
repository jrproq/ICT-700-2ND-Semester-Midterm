<?php
class Users extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("users_model");
    }
    public function login()

    {

        $this->load->view('users/footer');
    }
    public function index()
    {
        $data['users'] = $this->users_model->rows();
        $this->load->view('users/login.index');

        $this->load->view('template/footer');
        $this->load->view('users/index', $data);
        $this->load->view('users/footer');
    }


    public function add()
    {
        $this->form_validation->set_rules('user_level',      'User Level',     'required|trim');
        $this->form_validation->set_rules('employee_no',      'Employee Number',     'required|trim');
        $this->form_validation->set_rules('first_name',         'First Name',     'required|trim');
        $this->form_validation->set_rules('middle_name',        'Middle Name',     'required|trim');
        $this->form_validation->set_rules('last_name',          'Last Name',     'required|trim');

        if ($this->form_validation->run() == TRUE) {
            $data = array(
                'id'        =>      'users',
                'userLevel'        => $this->input->post('user_level'),
                'firstName'     => $this->input->post('first_name'),
                'middleName'    => $this->input->post('middle_name'),
                'lastName'      => $this->input->post('last_name'),
                'employee_no'   => $this->input->post('employee_no'),
                'pword'         => md5('1231@aws2'),
                'created'       => 'users',
                'date_created'  => date('Y-m-d')
            );

            $result = $this->users_model->add($data);

            if ($result == TRUE) {
                $this->session->set_flashdata('success', 'Employee Successfully Created!');
                redirect('users/index');
            } else {
                $this->session->set_flashdata('err', 'Employee Registration Failed!');
            }
        }





        $this->load->view('users/add');
    }
    public function edit($id)
    {
        $this->load->model("users_model");
        $data['users'] = $this->users_model->edituser($id);
        $this->load->view('users/edit', $data);
    }
    public function update($id)
    {
        $this->form_validation->set_rules('user_level',      'User Level',     'required|trim');
        $this->form_validation->set_rules('employee_no',      'Employee Number',     'required|trim');
        $this->form_validation->set_rules('first_name',         'First Name',     'required|trim');
        $this->form_validation->set_rules('middle_name',        'Middle Name',     'required|trim');
        $this->form_validation->set_rules('last_name',          'Last Name',     'required|trim');

        if ($this->form_validation->run()) {

            $data = array(
                'userLevel'        => $this->input->post('user_level'),
                'firstName'     => $this->input->post('first_name'),
                'middleName'    => $this->input->post('middle_name'),
                'lastName'      => $this->input->post('last_name'),
                'employee_no'   => $this->input->post('employee_no'),
                'date_updated'  => date('Y-m-d'),
                'updated'       => 'users   '
            );


            $this->load->model("users_model");
            $this->users_model->updateuser($data, $id);


            $this->session->set_flashdata('success', 'Employee Successfully Updated!');


            redirect('users/index');
        } else {
            // If form validation fails, load the edit view again with validation errors
            $this->edit($id);
        }
    }
    public function delete()
    {
        $id = $this->input->post('id');
        $this->users_model->deleteuser($id);
        $this->session->set_flashdata('successDelete', 'User Successfully Deleted');
        redirect(site_url('users'));
    }
}
