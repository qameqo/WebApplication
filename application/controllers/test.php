<?php 


defined('BASEPATH') OR exit('No direct script access allowed');

class test extends CI_Controller {

    public function index()
    {
        $this->load->view('Header');

        $this->load->view('Index');
        
        $this->load->view('Footer');
        
        
        
    }

    public function DB_Check()
    {
        $this->db->where('type', 10);
        print_r ($this->db->get('game'));
        
        
    }

}

/* End of file test.php */


?>