<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

    public function index()
    {
        $this->load->view('header');
        $this->load->view('Register');
        $this->load->view('footer');
    }
    public function insert()
    {
        $object = array(
            'Email' =>  $this->input->post("email"),
            'Password' =>  $this->input->post("password"),
            'FName' =>  $this->input->post("fname"),
            'LName' =>  $this->input->post("lname"),
            'Address' =>  $this->input->post("address"),
            'DateofBirth' =>  $this->input->post("date"),
            'Tel' =>  $this->input->post("tel"),
            'Type' => "เจ้าของรถ"
        );
        $this->db->insert('Member', $object);
        
    }
    public function hhhh()
    {
        $this->load->view('header');
        $this->load->view('hee');
        $this->load->view('footer');
    }

}

/* End of file Controllername.php */
