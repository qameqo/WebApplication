<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Manager extends CI_Controller {

    public function Manager_1()
    {   
        $this->load->view('Header_manage');
        $this->load->view('Manager_emp');
        $this->load->view('Footer_manage');
    }

    public function test2()
    {
        $this->load->view('Header_manage');
        // $this->load->view('Manager_emp');
        $this->load->view('Footer');
    }

}

/* End of file Hello.php */
