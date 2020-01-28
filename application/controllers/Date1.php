<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Date1 extends CI_Controller {

    public function index()
    {
        $this->load->view('headerdate');
        $this->load->view('Date');
        $this->load->view('footerdate');
    }

}

/* End of file Controllername.php */
 ?>