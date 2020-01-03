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

        // print_r($_POST);
        
        // exit;

        $data = array(
            'Email' => $this->input->post('Email'),
            'Password' => $this->input->post('Password'),
            'Fname' => $this->input->post('Fname'),
            'Lname' => $this->input->post('Lname'),
            'Address' => $this->input->post('Address'),
            'Tel' => $this->input->post('Tel'),
            'Status' => $this->input->post('Status'),
            'Row' => $this->input->post('Row')

        );

        $query=$this->db->insert('Employee',$data);

        if($query)
        {
            echo 'add ok';
        }
        else
        {
            echo 'add false';
        }

        // redirect('Manager_emp');

    }

}

/* End of file Hello.php */
