<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Emp_car extends CI_Controller {

    public function index()
    {   
        $this->load->view('Header_emp');
        $this->load->view('Emp_car_regis_view');
        $this->load->view('Footer_emp');
    } 

    public function show($idCarregis)
    {
        $data['rs']=$this->Manager_car_regis_model->read($idCarregis);

        // echo '<pre>';
        // print_r($data);
        // echo '</pre>';

        // exit;

        $this->load->view('Header_manage');
        $this->load->view('Emp_car_regis_show_view', $data);
        $this->load->view('Footer_manage');
        $this->load->view('Script_manager_emp');
        $this->load->view('Modal_view');
    }

   
}

/* End of file Hello.php */
