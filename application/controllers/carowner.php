<?php 


defined('BASEPATH') OR exit('No direct script access allowed');

class carowner extends CI_Controller {

    public function index()
    {
        $this->load->view('Header');

        $this->load->view('Car_owner');
        
        $this->load->view('Footer');
    }
}

/* End of file test.php */


?>