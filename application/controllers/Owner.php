<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Owner extends CI_Controller {

    public function index()
    {
        $this->load->view('header');
        $this->load->view('Car_owner');      
        $this->load->view('footer');
    }
    public function insert()
    {
       /*  $config['upload_path'] = './pic/';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size']     = '200000000';
        $config['max_width'] = '200000000';
        $config['max_height'] = '200000000';

        $this->load->library('upload', $config);

        if (! $this->upload->do_upload('piccar1','piccar2','piccar3','piccar4','picprb','picbook')) {
            //$error = array('error' => $this->upload->display_errors());
            echo $this->upload->display_errors();
        //$this->load->view('upload_form', $error);
        } else {
            $data = $this->upload->data();

            //print_r($data);
            //$this->load->view('upload_success', $data);

            $filename = $data['file_name'];
            //$imgtype_name = $data['imgtype_name']; */
        $object = array(
            'Brand' =>  $this->input->post("Brand"),
            'Generation' =>  $this->input->post("Gen"),
            'Yearcar' =>  $this->input->post("caryear"),
            'Seat' =>  $this->input->post("seat"),
            'Color' =>  $this->input->post("color"),
            'Fuel' =>  $this->input->post("fuel"),
            'Gear' =>  $this->input->post("gear"),
            'Mileage' =>  $this->input->post("mile"),
            'License' =>  $this->input->post("license"),
            'Yearlicense' =>  $this->input->post("licenseyear"),
            'Carbody' =>  $this->input->post("bodyno"),
            'Status' => "ไม่พร้อม",
                                /* "piccar1"=>$filename,
                                "piccar2"=>$filename,
                                "piccar3"=>$filename,
                                "piccar4"=>$filename,
                                "picprb"=>$filename,
                                "picbook"=>$filename, */
           /*  'imgcar' =>  $this->input->post("piccar1"),
            'imgcar2' =>  $this->input->post("piccar2"),
            'imgcar3' =>  $this->input->post("piccar3"),
            'imgcar4' =>  $this->input->post("piccar4"),
            'imgprb' =>  $this->input->post("prb"),
            'imgbookcar' =>  $this->input->post("bookcar"), */
            'id_Member' => $this->session->userdata('id_Member')
            /* 'b' =>  $this->input->post("Brand"),
            'b' =>  $this->input->post("Brand"), */
        );

        $this->db->insert('Carregis', $object);

        $this->db->order_by('idCarregis', 'desc');
        $query =  $this->db->get('Carregis', 1);
        $qq = $query->row_array();
        echo $qq['idCarregis'];
       redirect('Owner2/show/'. $qq['idCarregis']); 
        
    }
    public function select($ga)
    {?>
        <option value="">เลือกรุ่น</option>
        <?php
        $this->db->select('*');
        $this->db->where('idBrand',$ga);
        $sql = $this->db->get('Generation');
        $r = $sql->result_array();
        foreach($sql->result_array()
        as $she)
        {
        ?>
        <option value="<?php echo $she['Name_Gen'] ?>"><?php echo $she['Name_Gen'] ?></option>
    <?php }
								  
						
    }

}

    /* public function adding($value='')
    {
        $config['upload_path'] = './pic/';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size']     = '200000000';
        $config['max_width'] = '200000000';
        $config['max_height'] = '200000000';

        $this->load->library('upload', $config);

        if (! $this->upload->do_upload('piccar1','piccar2','piccar3','piccar4','picprb','picbook')) {
            //$error = array('error' => $this->upload->display_errors());
            echo $this->upload->display_errors();
        //$this->load->view('upload_form', $error);
        } else {
            $data = $this->upload->data();

            //print_r($data);
            //$this->load->view('upload_success', $data);

            $filename = $data['file_name'];
            //$imgtype_name = $data['imgtype_name'];

            $arr=array(
                                
                                "piccar1"=>$filename,
                                "piccar2"=>$filename,
                                "piccar3"=>$filename,
                                "piccar4"=>$filename,
                                "picprb"=>$filename,
                                "picbook"=>$filename

                            );
            $this->db->insert('Carregis', $arr);
            redirect('Owner');
        }
    
    }
} */

/* End of file Controllername.php */
 
?>