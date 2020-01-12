<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Manager_car_regis_model extends CI_Model 
{
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

    public function add_status()
    {
        // print_r($_POST);
        
        // exit;

        $this->db->where('idCarregis', $this->input->post('idCarregis'));
       
        $data = array( 
            'id_Employee' => $this->input->post('id_Employee'),
            'Status' => $this->input->post('Status')
        );

        $query=$this->db->update('Carregis',$data);

        echo "<script>";
        echo "alert('แก้ไขสถานะเรียบร้อย');";
        echo "window.location.href = '". base_url(). "Manager_car_regis ';";
        echo "</script>";
        
        // redirect('Manager_emp');
    }
}
?>