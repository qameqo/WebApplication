<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Rentasc extends CI_Controller {

    public function index()
    {
        $this->load->view('header');
        $this->load->view('Rentalasc');
        $this->load->view('footer');
    }

}

/* End of file Controllername.php */
 ?>