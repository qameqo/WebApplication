<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Rentnext extends CI_Controller {

    public function one($idc)
    {
        $data['idc'] = $idc;
        $this->load->view('header');
        $this->load->view('Rentnext',$data);
        $this->load->view('footer');

    }

}

/* End of file Controllername.php */
 ?>