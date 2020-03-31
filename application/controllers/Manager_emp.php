<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Manager_emp extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Manager_emp_model');
    }

    public function index()
    {
        $data['query']=$this->Manager_emp_model->show_employee();

        // echo '<pre>';
        // print_r($data);
        // echo '</pre>';

        // exit;

        $this->load->view('Manager/Header_manage');
        $this->load->view('Manager/Manager_emp_view', $data);
        $this->load->view('Manager/Footer_manage');
        $this->load->view('Script_manager_emp');
        $this->load->view('Modal_view', $data);
    }

    public function edit($id_Employee)
    {
        $data['rs_edit']=$this->Manager_emp_model->read($id_Employee);

        // echo '<pre>';
        // print_r($data);
        // echo '</pre>';

        // exit;

        $this->load->view('Manager/Header_manage');
        $this->load->view('Manager/Manager_emp_edit_view', $data);
        $this->load->view('Manager/Footer_manage');
    }

    public function show($id_Employee)
    {
        $data['rs_edit']=$this->Manager_emp_model->read($id_Employee);

        // echo '<pre>';
        // print_r($data);
        // echo '</pre>';

        // exit;

        $this->load->view('Manager/Header_manage');
        $this->load->view('Manager/Manager_emp_show_view', $data);
        $this->load->view('Manager/Footer_manage');
        $this->load->view('Script_manager_emp');
        $this->load->view('Modal_view');
    }
    

    public function add_emp()
    {
        $this->Manager_emp_model->add_emp();
    }

    public function edit_emp()
    {
        $this->Manager_emp_model->edit_emp();

        // echo '<pre>';
        // print_r($_POST);
        // echo '</pre>';
    }

    public function del_emp($id_Employee)
    {
        $this->Manager_emp_model->del_emp($id_Employee);
    }

    public function add_emp_type()
    {
        $this->Manager_emp_model->add_emp_type();
    }

}

/* End of file Hello.php */
