<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Pricecar extends CI_Controller {

    public function pri($id)
    {
        $data['id'] = $id;
        $this->load->view('header');
        $this->load->view('Pricecar',$data);
        $this->load->view('footer');
    }
    public function price()
    {
        echo"ครับ";
    }

}

/* End of file Controllername.php */
 ?>