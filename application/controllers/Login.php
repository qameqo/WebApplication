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
        $lek = strtolower($Username);
        $Password = $this->input->post('password');
        $lek2 = strtolower($Password);
        $this->db->where('Username', $lek);
        $this->db->where('password', $lek2);
        $query = $this->db->get('Member', 1);
        if($query->num_rows() ==1)
        {
            $data = $query->row_array();
            $data['ID'] = $data['id_Member'];
            $this->session->set_userdata($data);
            redirect('Firstpage'); //เจ้าของรถ
        }else
        {
            $this->db->where('Username', $Username);
            $this->db->where('password', $Password);
            $query = $this->db->get('Employee', 1);
            if($query->num_rows() ==1)
            {
                $data = $query->row_array();
                $this->session->set_userdata($data);
                if($this->session->userdata('id_position') =="4")
                {
                    redirect('Manager_first/refresh_car'); //เจ้าของร้าน
                }elseif($this->session->userdata('id_position') =="1"){
                    
                    redirect('Emp_car/refresh_car'); //พนักงาน
                }elseif($this->session->userdata('id_position') =="2"){

                    redirect('Tech');
                }elseif($this->session->userdata('id_position') =="3"){

                    redirect('Io');
                }
            }else
            {
                echo "<script>";
                echo "alert('ไม่พบรหัสผู้ใช้งาน โปรดตรวจสอบ username หรือ password');";
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