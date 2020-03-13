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
            echo "history.back()";
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
                    'idBrand' =>  $this->input->post("Brand"),
                    'Yearcar' =>  $this->input->post("caryear"),
                    'id_Seat' =>  $this->input->post("seat"),
                    'Color' =>  $this->input->post("color"),
                    'Gear' =>  $this->input->post("gear"),
                    'Mileage' =>  $this->input->post("mile"),
                    'License' =>  $this->input->post("license"),
                    'Province' => $this->input->post("province"),
                    'Yearlicense' =>  $this->input->post("licenseyear"),
                    'Carbody' =>  $this->input->post("carbody"),
                    'id_Status' => $ids,
                    'id_Member' => $this->session->userdata('id_Member'),
                    'id_Gen' => $this->input->post("Gen"),
                    'idFuel' => $this->input->post("fuel1"),
                    'CC' => $this->input->post("cc")
                   
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
    public function checklicense()
    {
        $this->load->model("check");
        if ($this->check->is_license_available($_POST["license"])) {
            // echo '<label class="text-danger"><span class="glyphicon glyphicon-remove"></span> ทะเบียนรถนี้ได้ถูกใช้ไปแล้ว</label>';
            echo "true";
        } else {
            // echo '<label class="text-success"><span class="glyphicon glyphicon-ok"></span> ทะเบียนรถนี้สามารถใช้ได้</label>';
            echo "false";
        }
        
    }

    public function checkcarbody()
    {
        $this->load->model("check");
        if ($this->check->is_carbody_available($_POST["carbody"])) {
            // echo '<label class="text-danger"><span class="glyphicon glyphicon-remove"></span> หมายเลขตัวถังรถนี้ได้ถูกใช้ไปแล้ว</label>';
            echo "true";
        } else {
            // echo '<label class="text-success"><span class="glyphicon glyphicon-ok"></span> หมายเลขตัวถังรถนี้สามารถใช้ได้</label>';
            echo "false";
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
        <!-- <option value="">เลือกจำนวนที่นั่ง</option> -->
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
        <option value="">เลือกเชื้อเพลิง</option>
        <?php
        $this->db->select('*');
        $this->db->from('Generation');
        $this->db->join('Type_Fuel', 'Type_Fuel.id_TypeFuel = Generation.id_Type_Fuel');
        $this->db->join('Fuel', 'Fuel.id_Type_Fuel = Type_Fuel.id_TypeFuel');
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
    public function selectfuel2($gmm)
    {?>
        <option value="">เลือกเชื้อเพลิง</option>
        <?php
        $this->db->select('*');
        $this->db->from('Generation');
        $this->db->join('Type_Fuel', 'Type_Fuel.id_TypeFuel = Generation.id_Type_Fuel');
        $this->db->join('Fuel', 'Fuel.id_TypeFuel = table.column', 'left');
        
        $this->db->where('id_Gen',$g);
        $this->db->select('*');
        $this->db->from('Fuel');
        $this->db->join('Type_Fuel', 'Type_Fuel.id_TypeFuel = Fuel.id_Type_Fuel');
        $this->db->where('id_TypeFuel',$gmm);
        $sq = $this->db->get();
        $ro = $sq->result_array();
        foreach($sq->result_array()
        as $he)
        {
        ?>
        <option value="<?php echo $he['idFuel'] ?>"><?php echo $he['Name_Fuel'] ?></option>
        
    <?php }
								  
						
    }
    public function selectfuel3($gq)
    {?>
        <option value="">เลือกเชื้อเพลิงชนิดที่ 2</option>
        <?php
        
        $this->db->select('*');
        $this->db->from('Fuel2');
        $this->db->join('Type_Fuel', 'Type_Fuel.id_TypeFuel = Fuel2.id_Type_Fuel');
        $this->db->where('id_TypeFuel',$gq);
        $sq = $this->db->get();
        $ro = $sq->result_array();
        foreach($sq->result_array()
        as $he)
        {
        ?>
        <option value="<?php echo $he['idFuel2'] ?>"><?php echo $he['Name_Fuel2'] ?></option>
        
    <?php }
								  
						
    }
    public function selectcc($ss)
    {?>
        <!-- <option value="">เลือก cc</option> -->
        <?php
        
        $sq = $this->db->query("SELECT CC FROM `Generation` WHERE id_Gen = '$ss'");
        // $this->db->from('Generation');
        // $this->db->where('id_Gen',$gq);
        //  = $this->db->get();
        $ro = $sq->result_array();
        foreach($sq->result_array()
        as $he)
        {
        ?>
        <option value="<?php echo $he['CC'] ?>"><?php echo $he['CC'] ?></option>
        
    <?php }
								  
						
    }
    

}

 

/* End of file Controllername.php */
 
?>