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
    public function upd($idc)
    {
            $Date = $this->input->post("date");
            $dat = date("Y-m-d", strtotime($Date));
            $this->db->where('idCarregis', $idc);
            $ob = array(

            
            'id_Status' => "4",
             'StartDate'=> $dat
        );
        echo "<script>";
        echo "alert('บันทึกข้อมูลเรียบร้อย');";
        echo "window.location.href = '". base_url(). "Dataregis ';";
        echo "</script>";
        $this->db->update('Carregis', $ob);
        $ob2 = array (

        );
     }

}

/* End of file Controllername.php */
 ?>