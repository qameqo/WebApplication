<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Emp_rental extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Emp_rental_model');
    }

    public function index()
    {   
        $data['query']=$this->Emp_rental_model->show_rental();

        // echo '<pre>';
        // print_r($data);
        // echo '</pre>';

        // exit; 

        $this->load->view('Employee/Header_emp');
        $this->load->view('Employee/Emp_car_rental_view', $data);
        $this->load->view('Employee/Footer_emp');
    } 

    public function show_rental($idRental)
    {
        $data['rs']=$this->Emp_rental_model->read_rental($idRental);

        // echo '<pre>';
        // print_r($data);
        // echo '</pre>';

        // exit;

        $this->load->view('Employee/Header_emp');
        $this->load->view('Employee/Emp_car_rental_show_view', $data);
        $this->load->view('Employee/Footer_emp');
        
    }

}

/* End of file Hello.php */
