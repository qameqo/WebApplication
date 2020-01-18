<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Rental extends CI_Controller {

    public function index()
    {
        $this->load->view('header');
        $this->load->view('Rent');
        $this->load->view('footer');
        
    }

}

/* End of file Controllername.php */
 ?>