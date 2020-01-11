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
        /* $this->db->where('carbody', $carbody);
        $carbody = $this->input->post('carbody'); */
        $license = $this->input->post('license');
        $this->db->where('license', $license);
        $query = $this->db->get('Carregis',1);
       /*  $license ==1 || $carbody ==1 */
        if($query->num_rows() ==1)
        {
            
            echo "<script>";
            echo "alert('ทะเบียนรถหรือเลขตัวถังรถนี้มีผู้ใช้แล้ว');";
            echo "window.location.href = '". base_url(). "Owner ';";
            echo "</script>";
            
            
        }else
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
                    'Carbody' =>  $this->input->post("carbody"),
                    'Status' => "ไม่พร้อม",      
                    'id_Member' => $this->session->userdata('id_Member')
                   
                );
        
                $this->db->insert('Carregis', $object);
                $this->db->order_by('idCarregis', 'desc');
                $query =  $this->db->get('Carregis', 1);
                $qq = $query->row_array();
                echo $qq['idCarregis'];
                redirect('Owner2/show/'. $qq['idCarregis']); 
                
            }

           
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