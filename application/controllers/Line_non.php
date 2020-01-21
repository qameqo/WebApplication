<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Line_non extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        
    }
    
    public function index()
    {
        echo 'Line API';
        $this->load->view('Line_non_view');
    }

    public function line_form()
    {
        $this->load->view('Line_form_view');
        
    }

    public function sent_line()
    {
        // print_r($_POST);
        $this->load->view('Line_non_view');
        
    }

    

}

/* End of file test.php */


?>