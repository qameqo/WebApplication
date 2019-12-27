<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Owner2 extends CI_Controller {

    public function index()
    {
        $this->load->view('header');
        $this->load->view('Car_owner2');       
        $this->load->view('footer');
    }

}

/* End of file Owner2.php */
 ?>