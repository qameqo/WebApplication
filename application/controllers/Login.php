<?php 


defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    public function index()
    {
        $this->load->view('Header');

        $this->load->view('Login');
        
        $this->load->view('Footer');
    }
    public function register()
    {   
        $this->load->view('Header');
        $this->load->view('Register');
        $this->load->view('Footer');
    }
    public function manager()
    {   
        $this->load->view('Header_manage');
        $this->load->view('Manager_emp');
        $this->load->view('Footer');
    }
    public function owner()
    {
        $this->load->view('Header_manage');
        $this->load->view('Car_owner');      
        $this->load->view('Footer');
    }
    public function owner2()
    {
        $this->load->view('Header_manage');
        $this->load->view('Car_owner2');       
        $this->load->view('Footer');
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