<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Datarent2 extends CI_Controller {

    public function index($idr)
    {
        $data['idr'] = $idr;
        $this->load->view('header');
        $this->load->view('Datarent2',$data);
        $this->load->view('footer');
        
    }

}

/* End of file Controllername.php */
 ?>