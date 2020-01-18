<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Pricecar extends CI_Controller {

    public function pri($id,$idc)
    {
        $data['id'] = $id;
        $data['idc'] = $idc;
        $this->load->view('header');
        $this->load->view('Pricecar',$data);
        $this->load->view('footer');
    }
    public function price()
    {
        // echo"ครับ";

        // print_r($_POST);
        
        // exit;
        
        $this->db->where('idCarregis', $this->input->post('idCarregis'));
       
        $data = array( 
            'RentalPrice' => $this->input->post('Price')
        );

        $query=$this->db->update('Carregis',$data);

        echo "<script>";
        echo "alert('ยืนยันราคาเรียบร้อย');";
        echo "window.location.href = '". base_url(). "Dataregis ';";
        echo "</script>";
    }

}

/* End of file Controllername.php */
 ?>