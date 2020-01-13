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

        $this->db->where('edit_car_price', $this->input->post('edit_car_price'));

        $data = array(
            'Name_Brand' => $this->input->post('Name_Brand'),
            'Name_Gen' => $this->input->post('Name_Gen'),
            'Price' => $this->input->post('Price')
        );

        
        $query=$this->db->update('Car_price',$data);

        // if($query)
        // {
        //     echo 'edit ok';
        // }
        // else
        // {
        //     echo 'false';
        // }

        redirect('Manager_car_price');
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

    public function del_car_price($id_Car_price)
    {
        $this->db->delete('Car_price',array('id_Car_price'=>$id_Car_price));

        redirect('Manager_car_price');
        
        
    }
}
?>