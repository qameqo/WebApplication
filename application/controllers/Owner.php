<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Owner extends CI_Controller {

    public function index()
    {
        $this->load->view('header');
        $this->load->view('Car_owner');      
        $this->load->view('footer');
    }
    public function insert()
    {
        $object = array(
            'b' =>  $this->input->post("Brand"),
            'g' =>  $this->input->post("Gen"),
            'c' =>  $this->input->post("Color"),
            'gear' =>  $this->input->post("transmission"),
            'p' =>  $this->input->post("prb"),
           
        );
        $this->db->insert('car', $object);
        redirect('Login');
    }
}

/* End of file Controllername.php */
 
?>