<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Manager_car_regis_model extends CI_Model 
{
    public function show_car_regis()
    {
        // $query = $this->db->get('Carregis');
        
        $this->db->select('*');
        $this->db->from('Carregis');
        $this->db->join('Brand', 'Carregis.Brand = Brand.idBrand');
        $this->db->join('Generation', 'Carregis.id_Gen = Generation.id_Gen');
        $this->db->join('Member', 'Carregis.id_Member = Member.id_Member');

        $query = $this->db->get();

        return $query->result();
        
    }

    public function show_car_regis_emp()
    {
        // $query = $this->db->get('Carregis');
        
        $this->db->select('*');
        $this->db->from('Carregis');
        $this->db->join('Brand', 'Carregis.Brand = Brand.idBrand');
        $this->db->join('Generation', 'Carregis.id_Gen = Generation.id_Gen');
        $this->db->join('Member', 'Carregis.id_Member = Member.id_Member');
        $this->db->where('Carregis.Dayfirst', date("Y-m-d"));
        

        $query = $this->db->get();

        return $query->result();
        
    }

    public function read($idCarregis)
    {
        $this->db->select('*');
        $this->db->from('Carregis');
        $this->db->join('Brand', 'Carregis.Brand = Brand.idBrand');
        $this->db->join('Generation', 'Carregis.id_Gen = Generation.id_Gen');
        $this->db->join('Employee', 'Carregis.id_Employee = Employee.id_Employee');
        $this->db->join('Member', 'Carregis.id_Member = Member.id_Member');

        $this->db->where('idCarregis', $idCarregis);
        $query = $this->db->get();

        if ($query->num_rows() > 0) 
        {
            $data = $query->row();
            return $data;
        }
       return FALSE;
    }

    public function read_emp($idCarregis)
    {
        $this->db->select('*');
        $this->db->from('Carregis');
        $this->db->join('Brand', 'Carregis.Brand = Brand.idBrand');
        $this->db->join('Generation', 'Carregis.id_Gen = Generation.id_Gen');
        // $this->db->join('Employee', 'Carregis.id_Employee = Employee.id_Employee');
        $this->db->join('Member', 'Carregis.id_Member = Member.id_Member');

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
            'id_Employee' => $this->session->userdata('id_Employee'),
            'Status' => $this->input->post('Status')
        );

        $query=$this->db->update('Carregis',$data);

        $this->db->order_by('idCarregis', 'desc');
        $query_2 =  $this->db->get('Carregis', 1);
        $qq = $query_2->row_array();

        if($qq['Status'] == 'ไม่ผ่าน')
        {
            
            redirect('Manager_car_regis/not_passed/'.$qq['idCarregis']);
            
        }
        else
        {
            echo "<script>";
            echo "alert('แก้ไขสถานะเรียบร้อย');";
            echo "window.location.href = '". base_url(). "Manager_car_regis';";
            echo "</script>";
        }

        
        
        // redirect('Manager_emp');
    }

    public function add_status_2()
    {
        // print_r($_POST);
        
        // exit;

        $this->db->where('idCarregis', $this->input->post('idCarregis'));
       
        $data = array( 
            'id_Employee' => $this->session->userdata('id_Employee'),
            'Status' => $this->input->post('Status')
        );

        $query=$this->db->update('Carregis',$data);

        echo "<script>";
        echo "alert('แก้ไขสถานะเรียบร้อย');";
        echo "window.location.href = '". base_url(). "Emp_car';";
        echo "</script>";
        
        // redirect('Manager_emp');
    }

    public function add_not_passed()
    {
        $data = array( 
            'Name_not' => $this->input->post('Name_not'),
            'idCarregis' => $this->input->post('idCarregis')
        );

        $query=$this->db->insert('Not_passed',$data);

        echo "<script>";
        echo "alert('บันทึกหมายเหตุเรียบร้อย');";
        echo "window.location.href = '". base_url(). "Manager_car_regis';";
        echo "</script>";
    }
}
?>