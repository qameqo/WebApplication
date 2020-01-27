<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Manager_car_price_model extends CI_Model 
{
    public function add_car_price()
    {
        // print_r($_POST);
        
        // exit;

        $Name_Brand = $this->input->post('Name_Brand');
        $this->db->where('Name_Brand', $Name_Brand);
        $query = $this->db->get('Brand', 1);
        if($query->num_rows() ==1)
        {
            echo "<script>";
            echo "alert('ข้อมูลซ้ำ');";
            echo "window.location.href = '". base_url(). "Manager_car_price ';";
            echo "</script>";
            
        }else
        {
            $Name_Brand = $this->input->post('Name_Brand');
            $upper = strtoupper($Name_Brand);
        
            $data = array(
                'Name_Brand' => $upper,
            );
        
            $this->db->insert('Brand', $data);
            $this->db->order_by('idBrand', 'desc');
            $query = $this->db->get('Brand', 1);
            $qq = $query->row_array();
            echo $qq['idBrand'];
            redirect('Manager_car_price'); 
        }

        // $this->Manager_car_price->Manager_car_price();
        // redirect('Manager_car_price');
    }

    public function add_car_price_2()
    {
        // print_r($_POST);
        
        // exit;

        $Name_Gen = $this->input->post('Name_Gen');
        $this->db->where('Name_Gen', $Name_Gen);
        $query = $this->db->get('Generation', 1);
        if($query->num_rows() ==1)
        {
            echo "<script>";
            echo "alert('ข้อมูลซ้ำ');";
            echo "window.location.href = '". base_url(). "Manager_car_price ';";
            echo "</script>";
            
        }else
        {
            $Name_Gen = $this->input->post('Name_Gen');
            $upper = strtoupper($Name_Gen);

            $data = array(
                'Name_Gen' => $upper,
                'Price' => $this->input->post('Price'),
                'idBrand' => $this->input->post('idBrand'),
            );
    
            $query=$this->db->insert('Generation',$data);
                
            echo "<script>";
            echo "alert('บันทึกข้อมูลสำเร็จ');";
            echo "window.location.href = '". base_url(). "Manager_car_price ';";
            echo "</script>";
    
        }

        // $this->Manager_car_price->Manager_car_price();
        // redirect('Manager_car_price');
    }

    public function edit_car_price()
    {
        // print_r($_POST);
        
        // exit;

        $this->db->where('id_Gen', $this->input->post('id_Gen'));

        $data = array(
            // 'Name_Brand' => $this->input->post('Name_Brand'),
            'Name_Gen' => $this->input->post('Name_Gen'),
            'Price' => $this->input->post('Price')
        );

        
        $query=$this->db->update('Generation',$data);

        // if($query)
        // {
        //     echo 'edit ok';
        // }
        // else
        // {
        //     echo 'false';
        // }


        echo "<script>";
        echo "alert('แก้ไขข้อมูลเรียบร้อย');";
        echo "window.location.href = '". base_url(). "Manager_car_price ';";
        echo "</script>";

        // redirect('Manager_car_price');
    }

    public function show_car_price()
    {
        $this->db->select('*');
        $this->db->from('Brand');
        $this->db->join('Generation', 'Generation.idBrand = Brand.idBrand');

        $query = $this->db->get();
        
        return $query->result();
        
    }

    public function read($id_Gen)
    {
        $this->db->select('*');
        $this->db->from('Brand');
        $this->db->join('Generation', 'Generation.idBrand = Brand.idBrand');
        $this->db->where('id_Gen', $id_Gen);
        $query = $this->db->get();

        if ($query->num_rows() > 0) 
        {
            $data = $query->row();
            return $data;
        }
        return FALSE;
    }

    public function del_car_price($id_Gen)
    {
        $this->db->delete('Generation',array('id_Gen'=>$id_Gen));

        echo "<script>";
        echo "alert('ลบข้อมูลเรียบร้อย');";
        echo "window.location.href = '". base_url(). "Manager_car_price ';";
        echo "</script>";        
        
    }
}
?>