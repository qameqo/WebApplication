<?php  
defined('BASEPATH') OR exit('No direct script access allowed');

class Homeowner extends CI_Controller {

    public function index()
    {
        $this->load->view('header_home');
        $this->load->view('home');
        $this->load->view('footer');
        
    }

}

/* End of file Controllername.php */


?>
