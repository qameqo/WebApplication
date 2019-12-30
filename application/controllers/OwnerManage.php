<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class OwnerManage extends CI_Controller {

    public function index()
    {
        $this->load->view('header');
        $this->load->view('Manage_carowner');
        $this->load->view('footer');
        
    }
    public function select()
    {?>     
                                 <?php
                                  $this->db->select('Email');
                                  $sql = $this->db->get('Member');
                                  $r = $sql->result();
                                  print_r($r);
    }

}

/* End of file OwnerManage.php */

?>