<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Datecar extends CI_Controller {

    public function gam($idc)
    {
        $data['idc'] = $idc;
        $this->load->view('header');
        $this->load->view('datecar',$data);
        $this->load->view('footer');
        
    }
    public function insert($idc)
    {
        echo"...";
    }

}

/* End of file Controllername.php */
 ?>