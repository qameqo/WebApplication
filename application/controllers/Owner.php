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
            'imgcar' =>  $this->input->post("piccar"),
            'imgprb' =>  $this->input->post("prb"),
            'imgbookcar' =>  $this->input->post("bookcar"),
            /* 'b' =>  $this->input->post("Brand"),
            'b' =>  $this->input->post("Brand"), */
            
        );
        $this->db->insert('Carregis', $object);
        redirect('Login');
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

/* End of file Controllername.php */
 
?>