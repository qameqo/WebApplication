<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Problem extends CI_Controller {

    public function pro($idr)
    {   
        $data['idr']= $idr;
        $this->load->view('header');
        $this->load->view('Problem_view',$data);
        $this->load->view('footer');
    } 

    public function tech_edit()
    {   
        
    }
       
}

/* End of file Hello.php */
