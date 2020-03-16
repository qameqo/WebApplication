<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Emp_problem extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Emp_problem_model');
        $this->load->model('Emp_rental_model');
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

    public function index_3()
    {   
        $data['query']=$this->Emp_problem_model->show_problem();

        $this->load->view('Employee/Header_emp');
        $this->load->view('Employee/Emp_problem_view_3', $data);
        $this->load->view('Employee/Footer_emp');
    } 

    public function index_4()
    {   
        $data['query']=$this->Emp_rental_model->show_rental();

        $this->load->view('Employee/Header_emp');
        $this->load->view('Employee/Emp_problem_view_4', $data);
        $this->load->view('Employee/Footer_emp');
    } 

    public function show($id_Problem)
    {
        
        $data['rs']=$this->Emp_problem_model->show($id_Problem);

        // echo '<pre>';
        // print_r($data);
        // echo '</pre>';
        // exit;

        $this->load->view('Employee/Header_emp');
        $this->load->view('Employee/Emp_problem_detail_view', $data);
        $this->load->view('Employee/Footer_emp');        
        
    }

    public function hand_over($id_Problem)
    {
        $data['query']=$this->Emp_problem_model->hand_over($id_Problem);

        // echo '<pre>';
        // print_r($data);
        // echo '</pre>';
        // exit;

        $this->load->view('Employee/Header_emp');
        $this->load->view('Employee/Emp_hand_over_view', $data);
        $this->load->view('Employee/Footer_emp');
    }

    public function hand_over_2($id_Problem)
    {
        $data['query']=$this->Emp_problem_model->hand_over($id_Problem);

        // echo '<pre>';
        // print_r($data);
        // echo '</pre>';
        // exit;

        $this->load->view('Employee/Header_emp');
        $this->load->view('Employee/Emp_hand_over_view_2', $data);
        $this->load->view('Employee/Footer_emp');
    }

    public function work()
    {
        $this->Emp_problem_model->work();
    }

    public function reserve_car($idRental)
    {
        $data['query']=$this->Emp_problem_model->reserve_car($idRental);

        // echo '<pre>';
        // print_r($data);
        // echo '</pre>';
        // echo $idRental;
        // exit;

        $this->load->view('Employee/Header_emp');
        $this->load->view('Employee/Emp_car_rental_view_4_1', $data);
        $this->load->view('Employee/Footer_emp');
    }

    public function change_car()
    {
        $this->Emp_problem_model->change_car();
    }
    
}

/* End of file Hello.php */
