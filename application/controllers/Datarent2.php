<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Datarent2 extends CI_Controller {

    public function show($idr)
    {
        $data['idr'] = $idr;
        $this->load->view('header');
        $this->load->view('Datarent2',$data);
        $this->load->view('footer');
        
    }
    public function can($idr)
    {
        $aa = array(
            'id_status' => '6'
        );
        
        echo "<script>";
        echo "alert('ยกเลิกการเช่าเรียบร้อย');";
        echo "window.location.href = '". base_url(). "Datarent ';";
        echo "</script>";

        $this->db->where('idRental', $idr);
        $this->db->update('Rental', $aa);
        
           
    }

}

/* End of file Controllername.php */
 ?>