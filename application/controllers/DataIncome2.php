<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class DataIncome2 extends CI_Controller {

    public function index()
    {
        $this->load->view('header');
        $this->load->view('DataIncome2');
        $this->load->view('footer');
    }

}

/* End of file Controllername.php */
 ?>