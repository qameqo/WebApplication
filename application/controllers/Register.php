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
        if($Username == 'admin' || $Username == 'emp')
        {
            echo "<script>";
            echo "alert('username นี้ไม่อนุญาตให้ใช้');";
            echo "window.location.href = '". base_url(). "Register ';";
            echo "</script>";
        }else{
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
            $Username = $this->input->post('username');
            $lek = strtolower($Username);
            $Password = $this->input->post("password");
            $lek2 = strtolower($Password);
            $FName = $this->input->post("fname");
            $yai = ucfirst($FName);
            $LName = $this->input->post("lname");
            $yai2 = ucfirst($LName);
            $object = array(
            'Username' =>  $lek,
            'Password' =>  $lek2,
            'FName' =>  $yai,
            'LName' =>  $yai2,
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

    public function checkusname()
    {
        $this->load->model("check");
        if ($this->check->is_username_available($_POST["username"])) {
            // echo '<label class="text-danger"><span class="glyphicon glyphicon-remove"></span> ทะเบียนรถนี้ได้ถูกใช้ไปแล้ว</label>';
            echo "true";
        } else {
            // echo '<label class="text-success"><span class="glyphicon glyphicon-ok"></span> ทะเบียนรถนี้สามารถใช้ได้</label>';
            echo "false";
        }
        
    }
}

/* End of file Controllername.php */
