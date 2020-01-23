<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

    public function index()
    {
       
        $this->load->view('header_logre');
        $this->load->view('Register');
        $this->load->view('footer');
    }
    public function insert()
    {   
        $Username = $this->input->post('username');
        $this->db->where('Username', $Username);
        $query = $this->db->get('Member', 1);
        if($query->num_rows() ==1)
        {
            echo "<script>";
            echo "alert('Username นี้มีผู้ใช้แล้ว');";
            echo "window.location.href = '". base_url(). "Register ';";
            echo "</script>";
            
            
        }else
        {
        //     $date= $this->input->post("date");
        //     $datee= date("Y-m-d", strtotime($date));
        // $da = $this->input->post("date");
        // $date = date("Y-m-d",$da);
            $object = array(
            'Username' =>  $this->input->post("username"),
            'Password' =>  $this->input->post("password"),
            'FName' =>  $this->input->post("fname"),
            'LName' =>  $this->input->post("lname"),
            'Address' =>  $this->input->post("address"),
            'Tel' =>  $this->input->post("tel"),
        );
            echo "<script>";
            echo "alert('สมัครสมาชิกเรียบร้อย');";
            echo "window.location.href = '". base_url(). "Login ';";
            echo "</script>";
        $this->db->insert('Member', $object);
       
        }
    }
}

/* End of file Controllername.php */
