<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class ConRental extends CI_Controller {

    public function index()
    {
        $this->load->view('header');
        $this->load->view('conRental');
        $this->load->view('footer');
        
        
    }

}

/* End of file Controllername.php */
 ?>