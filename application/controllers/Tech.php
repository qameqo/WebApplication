<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Tech extends CI_Controller {

    public function index()
    {   
        $this->load->view('Tech/Header_tech');
        $this->load->view('Tech/Tech_view');
        $this->load->view('Tech/Footer_tech');
    } 
       
}

/* End of file Hello.php */
