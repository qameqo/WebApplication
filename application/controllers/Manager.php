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
            'Email' =>  $this->input->post("Email"),
            'Password' =>  $this->input->post("Password"),
            'FName' =>  $this->input->post("FName"),
            'LName' =>  $this->input->post("LName"),
            'Address' =>  $this->input->post("Address"),
            'Tel' =>  $this->input->post("Tel"),
        );
        $this->db->update('Employee', $object);    

                echo "<script>";
                echo "alert('บันทึกข้อมูลเรียบร้อย');";
                echo "window.location.href = '". base_url(). "Manager ';";
                echo "</script>";
        
        $this->load->view('Header_manage');
        $this->load->view('Manager_view');
        $this->load->view('Footer_manage');
    }
   
}

/* End of file Hello.php */
