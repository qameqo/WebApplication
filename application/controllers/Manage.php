<?php 


defined('BASEPATH') OR exit('No direct script access allowed');

class Manage extends CI_Controller {

    public function index()
    {
        $this->load->view('header');

        $this->load->view('index');
        
        $this->load->view('footer');
        
        
        
    }

    // public function DB_Check()
    // {
    //     $this->db->where('id', 555);
    //     $this->db->get('tests'); 
    // }

}

/* End of file test.php */


?>