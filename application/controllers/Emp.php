<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Emp extends CI_Controller {

    public function index()
    {   
        $this->load->view('Header_emp');
        $this->load->view('Manager_view');
        $this->load->view('Footer_emp');
    } 

   
}

/* End of file Hello.php */
