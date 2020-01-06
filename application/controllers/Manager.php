<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Manager extends CI_Controller {

    public function index()
    {   
        $this->load->view('Header_manage');
        $this->load->view('Manager_view');
        $this->load->view('Footer_manage');
    } 

    public function update()
    { 
        $this->db->where('Email', $this->session->userdata('Email'));
        $object = array(
            'Email' =>  $this->input->post("email"),
            'Password' =>  $this->input->post("password"),
            'FName' =>  $this->input->post("fname"),
            'LName' =>  $this->input->post("lname"),
            'Address' =>  $this->input->post("address"),
            'Tel' =>  $this->input->post("tel"),
        );
        $this->db->update('Member', $object);     
    }
   
}

/* End of file Hello.php */
