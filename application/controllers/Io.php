<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Io extends CI_Controller {

    public function index()
    {   
        $this->load->view('Io/Header_io');
        $this->load->view('Io/Io_view');
        $this->load->view('Io/Footer_io');
    } 
       
}

/* End of file Hello.php */
