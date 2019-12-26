<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Owner extends CI_Controller {

    public function index()
    {
        $this->load->view('Header_manage');
        $this->load->view('Car_owner');      
        $this->load->view('footer');
    }

}

/* End of file Controllername.php */
 
?>