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
    public function can($idc)
    {
        $aa = array(
            'id_Status' => '6'
        );
        
        echo "<script>";
        echo "alert('ยกเลิกการลงทะเบียนเรียบร้อย');";
        echo "window.location.href = '". base_url(). "Dataregis ';";
        echo "</script>";

        $this->db->where('idCarregis', $idc);
        $this->db->update('Carregis', $aa);
        
           
    }

}

/* End of file Controllername.php */
 ?>