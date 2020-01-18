<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Dataregis2 extends CI_Controller {

    public function show($idc)
    {

        $data['idc'] = $idc;
        $this->load->view('header');
        $this->load->view('dataregis_2',$data);
        $this->load->view('footer');
    }

}

/* End of file Controllername.php */
 ?>