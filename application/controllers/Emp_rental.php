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

    public function index_2()
    {   
        $data['query']=$this->Emp_rental_model->show_rental();

        // echo '<pre>';
        // print_r($data);
        // echo '</pre>';

        // exit; 

        $this->load->view('Employee/Header_emp');
        $this->load->view('Employee/Emp_car_rental_view_2', $data);
        $this->load->view('Employee/Footer_emp');
    } 

    public function index_3()
    {   
        $data['query']=$this->Emp_rental_model->show_rental();

        // echo '<pre>';
        // print_r($data);
        // echo '</pre>';

        // exit; 

        $this->load->view('Employee/Header_emp');
        $this->load->view('Employee/Emp_car_rental_view_3', $data);
        $this->load->view('Employee/Footer_emp');
    } 

    public function index_4()
    {   
        $data['query']=$this->Emp_rental_model->show_rental();

        // echo '<pre>';
        // print_r($data);
        // echo '</pre>';

        // exit; 

        $this->load->view('Employee/Header_emp');
        $this->load->view('Employee/Emp_car_rental_view_4', $data);
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
        $this->load->view('Script_manager_emp');
        
    }

    public function not_passed_rent($id)
    {
        // $data['rs']=$this->Manager_car_regis_model->read($idCarregis);

        $data['id'] = $id;

        // echo '<pre>';
        // print_r($data);
        // echo '</pre>';

        // exit;
        $this->load->view('Employee/Header_emp');
        $this->load->view('Employee/Emp_car_rental_not_passed_view',$data);
        $this->load->view('Employee/Footer_emp');
        $this->load->view('Script_manager_emp');
    }

    public function add_status()
    {
        $this->Emp_rental_model->add_status();
    }

    public function add_status_2()
    {
        $this->Emp_rental_model->add_status_2();
    }

    public function add_status_22()
    {
        $this->Emp_rental_model->add_status_22();
    }

    public function add_status_3()
    {
        $this->Emp_rental_model->add_status_3();
    }

    public function add_status_33()
    {
        $this->Emp_rental_model->add_status_33();
    }

    public function add_status_4()
    {
        $this->Emp_rental_model->add_status_4();
    }

    public function add_not_passed_rent()
    {
        $this->Emp_rental_model->add_not_passed_rent();
    }

}

/* End of file Hello.php */
