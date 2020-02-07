<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Payment extends CI_Controller {

    public function sh($idr)
    {   
        $data['idr'] = $idr;
        $this->load->view('header');
        $this->load->view('Payment',$data);
        $this->load->view('footer');
        
    }
    public function inimg($idr)
    {
        $config['upload_path'] = './img3/';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size']  = '1000000000';
        $config['max_width']  = '1000000000';
        $config['max_height']  = '1000000000';
        
        $this->load->library('upload', $config);
        
        if ( ! $this->upload->do_upload('file')){ 
            echo "<script>";
            echo "alert('กรุณาเลือกไฟล์ก่อนกดอัปโหลด');";
            echo "window.location.href = '". base_url(). "Payment/sh/$idr';";
            echo "</script>";
        }
        else{
            $data = $this->upload->data();

            $filename = $data['file_name'];
            //$imgtype_name = $data['imgtype_name'];
            $arr=array(
                                'Name_image3'=>$filename,
                                'idrent'=>$idr
                            );
           
            $this->db->insert('Images3', $arr);
           
            redirect('Payment/sh/'.$idr);
        }
        
    
    }
    public function del($di,$idr)
    {   
        $this->db->delete('Images3', array('id_image3'=>$di));
        // $this->show($id);
        redirect('Payment/sh/'.$idr);
    }
    public function datarent()
    {

            echo "<script>";
            echo "alert('กรุณาชำระเงินภายในวันที่ทำการจอง');";
            echo "window.location.href = '". base_url(). "Datarent' ;";
            echo "</script>";
    }
    
}

/* End of file Controllername.php */
 ?>