<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Emp_car extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Manager_car_regis_model');
    }

    public function index()
    {   
        $data['query']=$this->Manager_car_regis_model->show_car_regis_emp();

        $this->load->view('Header_emp');
        $this->load->view('Emp_car_regis_view', $data);
        $this->load->view('Footer_emp');
    } 

    public function index_2()
    {   
        $data['query']=$this->Manager_car_regis_model->show_car_regis();

        $this->load->view('Header_emp');
        $this->load->view('Emp_car_regis_view_2', $data);
        $this->load->view('Footer_emp');
    } 

    public function show($idCarregis)
    {
        //$this->db->get('Table', limit, offset);
        
        $data['rs']=$this->Manager_car_regis_model->read($idCarregis);

        // echo '<pre>';
        // print_r($data);
        // echo '</pre>';

        // exit;

        $this->load->view('Header_emp');
        $this->load->view('Emp_car_regis_show_view', $data);
        $this->load->view('Footer_emp');
        $this->load->view('Script_manager_emp');
        $this->load->view('Modal_view');
    }
    
    public function add_status_2()
    {
        $this->Manager_car_regis_model->add_status_2();
    }

   
}

/* End of file Hello.php */
