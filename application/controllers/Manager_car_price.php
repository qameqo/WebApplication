<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Manager_car_price extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Manager_car_price_model');
    }

    public function index()
    {
        $data['query']=$this->Manager_car_price_model->show_car_price();

        // echo '<pre>';
        // print_r($data);
        // echo '</pre>';

        // exit;

        $this->load->view('Header_manage');
        $this->load->view('Manager_car_price_view', $data);
        $this->load->view('Footer_manage');
        $this->load->view('Script_manager_emp');
        $this->load->view('Modal_view');
    }

    public function add()
    {
        $this->load->view('Header_manage');
        $this->load->view('Manager_car_price_add_view');
        $this->load->view('Footer_manage');
    }

    public function edit($id_Gen)
    {
        $data['rs_edit']=$this->Manager_car_price_model->read($id_Gen);

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
        $this->Manager_car_price_model->add_car_price();
    }

    public function edit_car_price()
    {
        $this->Manager_car_price_model->edit_car_price();

        // echo '<pre>';
        // print_r($_POST);
        // echo '</pre>';
    }

    public function del_car_price($id_Gen)
    {
        $this->Manager_car_price_model->del_car_price($id_Gen);
    }

}

/* End of file Hello.php */
