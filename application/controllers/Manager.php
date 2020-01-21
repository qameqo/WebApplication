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
        $this->db->where('Username', $this->session->userdata('Username'));
        $object = array(
            'Username' =>  $this->input->post("Username"),
            'Password' =>  $this->input->post("Password"),
            'F_Name' =>  $this->input->post("F_Name"),
            'L_Name' =>  $this->input->post("L_Name"),
            'Address' =>  $this->input->post("Address"),
            'Tel' =>  $this->input->post("Tel"),
        );
        $this->db->update('Employee', $object);    

                echo "<script>";
                echo "alert('บันทึกข้อมูลเรียบร้อย');";
                echo "window.location.href = '". base_url(). "Manager_first ';";
                echo "</script>";
        
        $this->load->view('Header_manage');
        $this->load->view('Manager_view');
        $this->load->view('Footer_manage');
    }
   
}

/* End of file Hello.php */
