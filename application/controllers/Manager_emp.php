<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Manager_emp extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Manager_emp_model');
        // Your own constructor code
    }

    public function index()
    {
        $data['query']=$this->Manager_emp_model->show_emp();

        $this->load->view('Header_manage');
        $this->load->view('Manager_emp_view');
        $this->load->view('Footer_manage');
        $this->load->view('Modal_view');
    }

    public function add_emp()
    {
        $this->Manager_emp_model->add_emp();
    }
}

/* End of file Hello.php */
