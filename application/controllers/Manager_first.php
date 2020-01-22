<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Manager_first extends CI_Controller {

    public function index()
    {
        $this->load->view('Header_manage');
        $this->load->view('First_page_backend_view');
        $this->load->view('Footer_manage');
        // $this->load->view('Script_manager_emp');
        // $this->load->view('Modal_view');
    }

}

/* End of file Hello.php */
