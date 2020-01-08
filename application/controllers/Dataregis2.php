<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Dataregis2 extends CI_Controller {

    public function index()
    {
        
        $this->load->view('header');
        $this->load->view('dataregis2');
        $this->load->view('footer');
        
    }

}

/* End of file Controllername.php */
 ?>