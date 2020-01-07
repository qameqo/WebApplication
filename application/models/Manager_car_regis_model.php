<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Manager_car_regis_model extends CI_Model 
{
    public function add_car_price()
    {
        // print_r($_POST);
        
        // exit;

        $data = array(
            'Brand' => $this->input->post('Brand'),
            'Model' => $this->input->post('Model'),
            'Type' => $this->input->post('Type'),
            'Price' => $this->input->post('Price'),
        );

        $query=$this->db->insert('Car_price',$data);

        redirect('Manager_car_price');
    }

    public function show_car_regis()
    {
        $query = $this->db->get('Carregis');
        return $query->result();
        
    }

    public function read($idCarregis)
    {
        $this->db->select('*');
        $this->db->from('Carregis');
        $this->db->where('idCarregis', $idCarregis);
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