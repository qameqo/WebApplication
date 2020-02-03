<?php  
defined('BASEPATH') OR exit('No direct script access allowed');

class ConCarregis extends CI_Controller {

    public function index()
    {
        $this->load->view('head');
        $this->load->view('conCarregis');      
        $this->load->view('footer');
    }

}

/* End of file ConCarregis.php */
 ?>