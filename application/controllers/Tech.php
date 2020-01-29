<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Tech extends CI_Controller {

    public function index()
    {   
        $this->load->view('Tech/Header_tech');
        $this->load->view('Tech/Tech_view');
        $this->load->view('Tech/Footer_tech');
    } 

    public function tech_edit()
    {   
        $this->load->view('Employee/Header_emp');
        $this->load->view('Employee/First_page_backend_2_view');
        $this->load->view('Employee/Footer_emp');
    }
       
}

/* End of file Hello.php */
