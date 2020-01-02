<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class OwnerManage extends CI_Controller {

    public function index()
    {
        $this->load->view('header');
        $this->load->view('Manage_carowner');
        $this->load->view('footer');
        
    }
    public function update()
    {
       
        $this->db->where('Email', $this->session->userdata('Email'));
        $date= $this->input->post("date");
        $datee= date("Y-m-d", strtotime($date));
        $object = array(
            'Email' =>  $this->input->post("email"),
            'Password' =>  $this->input->post("password"),
            'FName' =>  $this->input->post("fname"),
            'LName' =>  $this->input->post("lname"),
            'Address' =>  $this->input->post("address"),
            'DateofBirth' => $datee,
            'Tel' =>  $this->input->post("tel"),
        );
        $this->db->update('Member', $object);
        
    }

}

/* End of file OwnerManage.php */

?>