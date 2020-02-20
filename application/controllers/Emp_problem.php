<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Emp_problem extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Emp_problem_model');
    }

    public function index()
    {   
        $data['query']=$this->Emp_problem_model->show_problem();

        $this->load->view('Employee/Header_emp');
        $this->load->view('Employee/Emp_problem_view', $data);
        $this->load->view('Employee/Footer_emp');
    } 

    public function index_2()
    {   
        $data['query']=$this->Emp_problem_model->show_problem();

        $this->load->view('Employee/Header_emp');
        $this->load->view('Employee/Emp_problem_view_2', $data);
        $this->load->view('Employee/Footer_emp');
    } 
}

/* End of file Hello.php */
