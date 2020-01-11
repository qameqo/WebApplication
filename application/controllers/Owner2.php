<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Owner2 extends CI_Controller {

    
    public function show($id)
    {
        $data['id'] = $id;
        $this->load->view('header');
        $this->load->view('Car_owner2',$data);     
        $this->load->view('footer');
        
    }
   
    public function up()
    {
        
        $config['upload_path'] = './pic/';
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
                                'Name_image'=>$filename,
                                'idCarregis'=>$this->input->post('idCarregis')
                            );
            $this->db->insert('Images', $arr);
            redirect('Owner2/show/'.$this->input->post('idCarregis'));
        }

    }
    public function del($Name_image)
    {
        
        // $this->db->delete('Images',array('id_image'=>$id_image));
        // $this->show($id);

        $this->db->delete('Images',array('Name_image'=>$Name_image));

        // redirect('Owner2/show');
    }
        
}

/* End of file Controllername.php */
 
?>