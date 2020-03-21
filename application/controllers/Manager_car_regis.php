<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Manager_car_regis extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Manager_car_regis_model');
        $this->load->model('Emp_rental_model');
        $this->load->model('Emp_problem_model');

    }

    public function index()
    {
        $data['query']=$this->Manager_car_regis_model->show_car_regis();

        // echo '<pre>';
        // print_r($data);
        // echo '</pre>';

        // exit;

        $this->load->view('Manager/Header_manage');
        $this->load->view('Manager/Manager_car_regis_view', $data);
        $this->load->view('Manager/Footer_manage');
        $this->load->view('Script_manager_emp');
        $this->load->view('Modal_view');
    }

    public function show($idCarregis)
    {
        $data['rs']=$this->Manager_car_regis_model->read($idCarregis);

        // echo '<pre>';
        // print_r($data);
        // echo '</pre>';

        // exit;

        $this->load->view('Manager/Header_manage');
        $this->load->view('Manager/Manager_car_regis_show_view', $data);
        $this->load->view('Manager/Footer_manage');
        $this->load->view('Script_manager_emp');
        $this->load->view('Modal_view');
        
    }

    public function add_status()
    {
        $this->Manager_car_regis_model->add_status();
    }

    public function add_status_2()
    {
        $this->Manager_car_regis_model->add_status_2();
    }

    public function add_status_3()
    {
        $this->Manager_car_regis_model->add_status_3();
    }

    public function add_status_6()
    {
        $this->Manager_car_regis_model->add_status_6();
    }

    public function not_passed($id)
    {
        // $data['rs']=$this->Manager_car_regis_model->read($idCarregis);

        $data['id'] = $id;

        // echo '<pre>';
        // print_r($data);
        // echo '</pre>';

        // exit;
        $this->load->view('Manager/Header_manage');
        $this->load->view('Manager/Manager_car_regis_not_passed_view',$data);
        $this->load->view('Manager/Footer_manage');
        $this->load->view('Script_manager_emp');
        $this->load->view('Modal_view');
    }

    public function add_not_passed()
    {
        $this->Manager_car_regis_model->add_not_passed();
    }

    // --------------------------------------------------------------------------------------------------------------------------

    public function index_2()
    {
        $data['query']=$this->Manager_car_regis_model->show_car_regis();

        // echo '<pre>';
        // print_r($data);
        // echo '</pre>';

        // exit;

        $this->load->view('Manager/Header_manage');
        $this->load->view('Manager/Manager_car_regis_view_2', $data);
        $this->load->view('Manager/Footer_manage');
        $this->load->view('Script_manager_emp');
        $this->load->view('Modal_view');

    }
    public function index_3()
    {
        $data['query']=$this->Emp_rental_model->show_rental();

        // echo '<pre>';
        // print_r($data);
        // echo '</pre>';

        // exit;

        $this->load->view('Manager/Header_manage');
        $this->load->view('Manager/Manager_car_rental_view', $data);
        $this->load->view('Manager/Footer_manage');
        $this->load->view('Script_manager_emp');
        $this->load->view('Modal_view');

    }
    public function index_4()
    {
        $data['query']=$this->Emp_rental_model->show_rental();

        // echo '<pre>';
        // print_r($data);
        // echo '</pre>';

        // exit;

        $this->load->view('Manager/Header_manage');
        $this->load->view('Manager/Manager_car_rental_view_2', $data);
        $this->load->view('Manager/Footer_manage');
        $this->load->view('Script_manager_emp');
        $this->load->view('Modal_view');

    }
    public function index_5()
    {
        $data['query']=$this->Manager_car_regis_model->show_repair();

        // echo '<pre>';
        // print_r($data);
        // echo '</pre>';

        // exit;

        $this->load->view('Manager/Header_manage');
        $this->load->view('Manager/Manager_car_repair_view', $data);
        $this->load->view('Manager/Footer_manage');
        $this->load->view('Script_manager_emp');
        $this->load->view('Modal_view');

    }

    public function index_6()
    {

        $data['query']=$this->Emp_problem_model->show_problem();

        $this->load->view('Manager/Header_manage');
        $this->load->view('Employee/Emp_problem_view_3', $data);
        $this->load->view('Manager/Footer_manage');
        $this->load->view('Script_manager_emp');
        $this->load->view('Modal_view');

    }

    public function detail_repair($id_Repair)
    {
        // $this->Manager_car_regis_model->detail_repair();

        $data['rs']=$this->Manager_car_regis_model->detail_repair($id_Repair);

        // echo '<pre>';
        // print_r($data);
        // echo '</pre>';

        // exit;

        $this->load->view('Manager/Header_manage');
        $this->load->view('Manager/Manager_car_price_repair_view', $data);
        $this->load->view('Manager/Footer_manage');
        $this->load->view('Script_manager_emp');
        $this->load->view('Modal_view');

    }

    public function show_rental($idRental)
    {
        $data['rs']=$this->Emp_rental_model->read_rental($idRental);

        // echo '<pre>';
        // print_r($data);
        // echo '</pre>';

        // exit;

        $this->load->view('Manager/Header_manage');
        $this->load->view('Manager/Manager_car_rental_show_view', $data);
        $this->load->view('Manager/Footer_manage');
        $this->load->view('Script_manager_emp');
        
    }

    public function del_car($idCarregis)
    {
        $this->Manager_car_regis_model->del_car($idCarregis);
    }

    public function del_rental($idRental)
    {
        $this->Manager_car_regis_model->del_rental($idRental);
    }

    public function add_status_13()
    {
        $this->Manager_car_regis_model->add_status_13();
    }


}

/* End of file Hello.php */
