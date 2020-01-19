<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Rentdesc extends CI_Controller {

    public function index()
    {
        $this->load->view('header');
        $this->load->view('Rentaldesc');
        $this->load->view('footer');
        
    }

}

/* End of file Controllername.php */
 ?>