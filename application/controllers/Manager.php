<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Manager extends CI_Controller {

    public function index()
    {   
        $this->load->view('Header_manage');
        $this->load->view('Manager');
        $this->load->view('Footer');
    }

}

/* End of file Hello.php */
