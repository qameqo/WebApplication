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
        $email = $this->input->post('email');
        $password = $this->input->post('password');
        $this->db->where('Email', $email);
        $this->db->where('password', $password);
        $query = $this->db->get('Member', 1);
        if($query->num_rows() ==1)
        {
            $data = $query->row_array();
            $this->session->set_userdata($data);
            redirect('Firstpage'); //เจ้าของรถ
        }else
        {
            $this->db->where('Email', $email);
            $this->db->where('password', $password);
            $query = $this->db->get('Employee', 1);
            if($query->num_rows() ==1)
            {
                $data = $query->row_array();
                $this->session->set_userdata($data);
                if($this->session->userdata('Status') =="เจ้าของร้าน")
                {
                    redirect(''); //เจ้าของร้าน
                }else{
                    
                    redirect(''); //พนักงาน
                }
            }else
            {
                echo "ไม่เจอ";
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