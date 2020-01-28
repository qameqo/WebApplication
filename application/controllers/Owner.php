<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Owner extends CI_Controller {

    public function show($ids)
    {
        $data['ids'] = $ids;
        $this->load->view('header');
        $this->load->view('Car_owner',$data);      
        $this->load->view('footer');
    }
    public function insert($ids)
    {   
        
        $license = $this->input->post('license'); 
        $this->db->where('license', $license);
        $query = $this->db->get('Carregis',1);

        if($query->num_rows() ==1)
        {   
            echo "<script>";
            echo "alert('ทะเบียนรถนี้มีผู้ใช้แล้ว');";
            echo "window.location.href = '". base_url(). "Owner/show/$ids'";
            echo "</script>";
            // redirect('Owner/show/'.$ids);
            // echo "ทะเบียนซ้ำ";
        }
        else
        {      
            $carbody = $this->input->post('carbody');
            $this->db->where('carbody', $carbody);
            $query = $this->db->get('Carregis',1);

            if($query->num_rows()== 1)
            {
            echo "<script>";
            echo "alert('เลขตัวถังรถนี้มีผู้ใช้แล้ว');";
            echo "window.location.href = '". base_url(). "Owner/show/$ids'";
            echo "</script>";
            // echo "เครื่องซ้ำ";
            
            }
            else
            {   
             
                $object = array(
                    'id_Brand' =>  $this->input->post("Brand"),
                    'Yearcar' =>  $this->input->post("caryear"),
                    'Seat' =>  $this->input->post("seat"),
                    'Color' =>  $this->input->post("color"),
                    'Fuel' =>  $this->input->post("fuel"),
                    'Gear' =>  $this->input->post("gear"),
                    'Mileage' =>  $this->input->post("mile"),
                    'License' =>  $this->input->post("license"),
                    'Province' => $this->input->post("province"),
                    'Yearlicense' =>  $this->input->post("licenseyear"),
                    'Carbody' =>  $this->input->post("carbody"),
                    'idStatus' => $ids,
                    'id_Member' => $this->session->userdata('id_Member'),
                    'id_Gen' => $this->input->post("Gen")
                   
                );
            
                $this->db->insert('Carregis', $object);
                $this->db->order_by('idCarregis', 'desc');
                $query =  $this->db->get('Carregis', 1);
                $qq = $query->row_array();
                echo $qq['idCarregis'];
                echo $qq['id_Gen'];
                redirect('Owner2/show/'. $qq['id_Gen'].'/'. $qq['idCarregis']);
            }        
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
        <option value="<?php echo $she['id_Gen'] ?>"><?php echo $she['Name_Gen'] ?></option>
    <?php }
								  
						
    }

    public function selectseat($gan)
    {?>
        <option value="">เลือกจำนวนที่นั่ง</option>
        <?php
        $this->db->select('*');
        $this->db->from('Generation');
        $this->db->join('Seat', 'Seat.id_Seat = Generation.id_Seat');
        $this->db->where('id_Gen',$gan);
        $sq = $this->db->get();
        $ro = $sq->result_array();
        foreach($sq->result_array()
        as $he)
        {
        ?>
        <option value="<?php echo $he['id_Seat'] ?>"><?php echo $he['Number_Seat'] ?></option>
    <?php }
								  
						
    }
    public function selectfuel($g)
    {?>
        <option value="">เลือกชนิดเชื้อเพลิง</option>
        <?php
        $this->db->select('*');
        $this->db->from('Generation');
        $this->db->join('Fuel', 'Fuel.idFuel = Generation.idFuel');
        $this->db->where('id_Gen',$g);
        $sq = $this->db->get();
        $ro = $sq->result_array();
        foreach($sq->result_array()
        as $he)
        {
        ?>
        <option value="<?php echo $he['idFuel'] ?>"><?php echo $he['Name_Fuel'] ?></option>
        
    <?php }
								  
						
    }
    public function selectfuel2($gv)
    {?>
        <option value="">เลือกชนิดเชื้อเพลิง</option>
        <?php
        $this->db->select('*');
        $this->db->from('Generation');
        $this->db->join('Fuel', 'Fuel.idFuel = Generation.idFuel2');
        $this->db->where('id_Gen',$gv);
        $sq = $this->db->get();
        $ro = $sq->result_array();
        foreach($sq->result_array()
        as $he)
        {
        ?>
        <option value="<?php echo $he['idFuel'] ?>"><?php echo $he['Name_Fuel'] ?></option>
        
    <?php }
								  
						
    }
    

}

 

/* End of file Controllername.php */
 
?>