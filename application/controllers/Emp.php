<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Emp extends CI_Controller {

    public function index()
    {   
        $this->load->view('Header_emp');
        $this->load->view('First_page_backend_2_view');
        $this->load->view('Footer_emp');
    } 

    public function emp_edit()
    {   
        $this->load->view('Header_emp');
        $this->load->view('Emp_view');
        $this->load->view('Footer_emp');
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
                echo "window.location.href = '". base_url(). "Emp ';";
                echo "</script>";
    }

   
}

/* End of file Hello.php */
