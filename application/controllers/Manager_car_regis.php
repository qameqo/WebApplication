<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Manager_car_regis extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Manager_car_regis_model');
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

    public function add_status_no()
    {
        $this->Manager_car_regis_model->add_status_no();
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
}

/* End of file Hello.php */
