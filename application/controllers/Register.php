<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

    public function index()
    {   
        $this->load->view('Header');
        $this->load->view('Register');
        $this->load->view('Footer');
    }

}

/* End of file Hello.php */
