<?php 


defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    public function index()
    {
        $this->load->view('header_logre');

        $this->load->view('Login');
        
        $this->load->view('footer');
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