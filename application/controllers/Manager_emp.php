<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Manager_emp extends CI_Controller {

    public function index()
    {
        $this->load->view('Header_manage');
        $this->load->view('Manager_emp_view');
        $this->load->view('Footer_manage');
        $this->load->view('Modal_view');
    }

    public function add_emp()
    {
        $data = array(
            'name' => $this->input->post('name');
        );

        redirect('Manager_emp');

        print_r($_POST);
    }

}

/* End of file Hello.php */
