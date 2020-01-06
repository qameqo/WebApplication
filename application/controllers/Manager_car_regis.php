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

        $this->load->view('Header_manage');
        $this->load->view('Manager_car_regis_view', $data);
        $this->load->view('Footer_manage');
        $this->load->view('Script_manager_emp');
        $this->load->view('Modal_view');
    }

    public function edit($id_Car_price)
    {
        $data['rs_edit']=$this->Manager_car_regis_model->read($id_Car_price);

        // echo '<pre>';
        // print_r($data);
        // echo '</pre>';

        // exit;

        $this->load->view('Header_manage');
        $this->load->view('Manager_car_price_edit_view', $data);
        $this->load->view('Footer_manage');
        $this->load->view('Script_manager_emp');
        $this->load->view('Modal_view');
    }

    public function add_car_price()
    {
        $this->Manager_car_regis_model->add_car_price();
    }

    public function edit_car_price()
    {
        $this->Manager_car_regis_model->edit_car_price();

        // echo '<pre>';
        // print_r($_POST);
        // echo '</pre>';
    }

    public function del_car_price($id_Car_price)
    {
        $this->Manager_car_regis_model->del_car_price($id_Car_price);
    }

}

/* End of file Hello.php */
