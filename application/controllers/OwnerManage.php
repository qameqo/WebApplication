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
       
        $this->db->where('Username', $this->session->userdata('Username'));
        $date= $this->input->post("date");
        $datee= date("Y-m-d", strtotime($date));
        $object = array(
            'Username' =>  $this->input->post("username"),
            'Password' =>  $this->input->post("password"),
            'FName' =>  $this->input->post("fname"),
            'LName' =>  $this->input->post("lname"),
            'Address' =>  $this->input->post("address"),
            'DateofBirth' => $datee,
            'Tel' =>  $this->input->post("tel"),
        );
                echo "<script>";
                echo "alert('บันทึกข้อมูลเรียบร้อย');";
                echo "window.location.href = '". base_url(). "Firstpage ';";
                echo "</script>";
        $this->db->update('Member', $object);
    }

}

/* End of file OwnerManage.php */

?>