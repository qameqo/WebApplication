<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller {

    public function index()
    {
        $this->load->view('header');
        $this->load->view('Profile');
        $this->load->view('footer');
        
    }

}

/* End of file Controllername.php */
 ?>