<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Owner extends CI_Controller {

    public function index()
    {
        $this->load->view('Header_manage');
        $this->load->view('Car_owner');      
        $this->load->view('footer');
    }
    public function insert()
    {
        $object = array(
            'b' =>  $this->input->post("Brand"),
            'g' =>  $this->input->post("Gen"),
            'c' =>  $this->input->post("Color"),
            'gear' =>  $this->input->post("transmission"),
            'p' =>  $this->input->post("prb"),
           
        );
        $this->db->insert('car', $object);
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