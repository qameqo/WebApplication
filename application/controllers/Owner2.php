<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Owner2 extends CI_Controller {

    
    public function show($id,$idc)
    {
        $data['id'] = $id;
        $data['idc'] = $idc;
        $this->load->view('header');
        $this->load->view('Car_owner2',$data);     
        $this->load->view('footer');
        
    }
   
    public function up($id,$idc)
    {
        
        $config['upload_path'] = './img/';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size']  = '1000000000';
        $config['max_width']  = '1000000000';
        $config['max_height']  = '1000000000';
        
        $this->load->library('upload', $config);
        
        if ( ! $this->upload->do_upload('file')){
            echo "<script>";
            echo "alert('กรุณาเลือกไฟล์ก่อนกดอัปโหลด');";
            echo "window.location.href = '". base_url(). "Owner2/show/$id/$idc';";
            echo "</script>";
        }
        else{
            $data = $this->upload->data();

            $filename = $data['file_name'];
            //$imgtype_name = $data['imgtype_name'];
            $arr=array(
                                'Name_image'=>$filename,
                                'idCarregis'=>$idc 
                            );
            $this->db->insert('Images', $arr);
           
            redirect('Owner2/show/'.$id.'/'.$idc);
        }

    }
    public function del($di,$id,$idc)
    {   
        $this->db->delete('Images', array('id_image'=>$di));
        // $this->show($id);
        redirect('Owner2/show/'.$id.'/'.$idc);
    }
    public function up2($id,$idc)
    {
        
        $config['upload_path'] = './img2/';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size']  = '1000000000';
        $config['max_width']  = '1000000000';
        $config['max_height']  = '1000000000';
        
        $this->load->library('upload', $config);
        
        if ( ! $this->upload->do_upload('file')){
            echo $this->upload->display_errors();
        }
        else{
            $data = $this->upload->data();

            $filename = $data['file_name'];
            //$imgtype_name = $data['imgtype_name'];
            $arr=array(
                                'Name_image2'=>$filename,
                                'idCarregis'=>$idc
                            );
            $this->db->insert('Images2', $arr);
           
            redirect('Owner2/show/'.$id.'/'.$idc);
        }

    }
    public function del2($di,$id,$idc)
    {   
        $this->db->delete('Images2', array('id_image2'=>$di));
        // $this->show($id);
        redirect('Owner2/show/'.$id.'/'.$idc);
    }

    /* DELETE FROM `Carregis` WHERE `Carregis`.`idCarregis` = 73; 
    DELETE FROM `Images` WHERE `Images`.`id_image` = 97;*/
}

/* End of file Controllername.php */
 
?>