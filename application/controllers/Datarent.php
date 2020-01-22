<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Datarent extends CI_Controller {

    public function index()
    {
        $this->load->view('header');
        $this->load->view('Datarent');
        $this->load->view('footer');
        
    }

}

/* End of file Controllername.php */
 ?>