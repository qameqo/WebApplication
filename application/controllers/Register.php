<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

    public function index()
    {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('email','');
        $this->load->view('header_logre');
        $this->load->view('Register');
        $this->load->view('footer');
    }
    public function insert()
    {   
        $date= $this->input->post("date");
        $datee= date("Y-m-d", strtotime($date));
       /*  $da = $this->input->post("date");
        $date = date("Y-m-d",$da); */
        $object = array(
            'Email' =>  $this->input->post("email"),
            'Password' =>  $this->input->post("password"),
            'FName' =>  $this->input->post("fname"),
            'LName' =>  $this->input->post("lname"),
            'Address' =>  $this->input->post("address"),
            'DateofBirth' => $datee,
            'Tel' =>  $this->input->post("tel"),
            'Type' => "เจ้าของรถ"
        );
        $this->db->insert('Member', $object);
        redirect('Login');
    }
}

/* End of file Controllername.php */
