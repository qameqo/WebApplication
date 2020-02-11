<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Insurance extends CI_Controller {

    public function index()
    {
        $this->load->view('header_logre');
        $this->load->view('Insurance');
        $this->load->view('footer');
    }

}

/* End of file Controllername.php */
 ?>