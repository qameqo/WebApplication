<?php 


defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    public function index()
    {
        $this->load->view('header_logre');

        $this->load->view('Login');
        
        $this->load->view('footer');
    }

    public function Loginn()
    {
        $Username = $this->input->post('username');
        $password = $this->input->post('password');
        $this->db->where('Username', $Username);
        $this->db->where('password', $password);
        $query = $this->db->get('Member', 1);
        if($query->num_rows() ==1)
        {
            $data = $query->row_array();
            $this->session->set_userdata($data);
            redirect('Firstpage'); //เจ้าของรถ
        }else
        {
            $this->db->where('Username', $Username);
            $this->db->where('password', $password);
            $query = $this->db->get('Employee', 1);
            if($query->num_rows() ==1)
            {
                $data = $query->row_array();
                $this->session->set_userdata($data);
                if($this->session->userdata('Row') =="เจ้าของร้าน")
                {
                    redirect('Manager'); //เจ้าของร้าน
                }else{
                    
                    redirect('Emp'); //พนักงาน
                }
            }else
            {
                echo "<script>";
                echo "alert('ไม่พบรหัสผู้ใช้งาน');";
                echo "window.location.href = '". base_url(). "Login ';";
                echo "</script>";
            }
            
        }
        
    }
    public function DB_Check()
    {
        $this->db->where('Name', 'game');
        $sql = $this->db->get('ty');
        $r = $sql->result();
        print_r($r);
        
        
    }

}

/* End of file test.php */


?>