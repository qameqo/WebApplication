<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Problem extends CI_Controller {

    public function index()
    {   
        $this->load->view('header');
        $this->load->view('Problem_view');
        $this->load->view('footer');
    } 

    public function tech_edit()
    {   
        
    }
       
}

/* End of file Hello.php */
