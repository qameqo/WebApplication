<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Deposit extends CI_Controller {

    public function index()
    {
        $this->load->view('header');
        $this->load->view('Deposit');
        $this->load->view('footer');
        
    }

}

/* End of file Controllername.php */
?>