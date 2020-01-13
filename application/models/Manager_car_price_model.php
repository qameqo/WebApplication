<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Manager_car_price_model extends CI_Model 
{
    public function add_car_price()
    {
        // print_r($_POST);
        
        // exit;

        $data = array(
            'Brand' => $this->input->post('Brand'),
            'Model' => $this->input->post('Model'),
            'Price' => $this->input->post('Price')
        );

        $query=$this->db->insert('Car_price',$data);

        redirect('Manager_car_price');
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
        echo "alert('แก้ไขข้อมูลเรียบร้อย');";
        echo "window.location.href = '". base_url(). "Manager_car_price ';";
        echo "</script>";        
        
    }
}
?>