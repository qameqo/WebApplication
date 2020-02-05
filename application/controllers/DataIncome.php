<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class DataIncome extends CI_Controller {

    public function index()
    {
        $this->load->view('header');
        $this->load->view('DataIncome');
        $this->load->view('footer');
    }

}

/* End of file Controllername.php */
 ?>