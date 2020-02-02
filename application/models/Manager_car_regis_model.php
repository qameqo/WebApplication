<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Manager_car_regis_model extends CI_Model 
{
    public function show_car_regis()
    {
        // $query = $this->db->get('Carregis');
        
        $this->db->select('*');
        $this->db->from('Carregis');
        $this->db->join('Brand', 'Carregis.id_Brand = Brand.idBrand');
        $this->db->join('Generation', 'Carregis.id_Gen = Generation.id_Gen');
        $this->db->join('Member', 'Carregis.id_Member = Member.id_Member');
        $this->db->join('Status_car', 'Carregis.idStatus = Status_car.id_Status');
        

        $query = $this->db->get();

        return $query->result();
        
    }

    public function read($idCarregis)
    {
        $this->db->select('*');
        $this->db->from('Carregis');
        $this->db->join('Brand', 'Carregis.id_Brand = Brand.idBrand');
        $this->db->join('Generation', 'Carregis.id_Gen = Generation.id_Gen');
        $this->db->join('Member', 'Carregis.id_Member = Member.id_Member');
        $this->db->join('Status_car', 'Carregis.idStatus = Status_car.id_Status');
        $this->db->join('Seat', 'Carregis.id_Seat = Seat.id_Seat');
        $this->db->join('Fuel', 'Carregis.idFuel = Fuel.idFuel');
                     
        $this->db->where('idCarregis', $idCarregis );
        $query = $this->db->get();

        if ($query->num_rows() > 0) 
        {
            $data = $query->row();
            return $data;
        }
        return FALSE;
    }

    public function read_2($idCarregis)
    {
        $this->db->select('*');
        $this->db->from('Carregis');
        $this->db->join('Brand', 'Carregis.id_Brand = Brand.idBrand');
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
            'idStatus' => $this->input->post('idStatus'),
            'Dayfirst' => $this->input->post('Dayfirst')
        );

        $query=$this->db->update('Carregis',$data);

        $this->db->order_by('idCarregis', 'desc');
        $query_2 =  $this->db->get('Carregis', 1);
        $qq = $query_2->row_array();

        if($qq['idStatus'] == '3')
        {
            
            redirect('Manager_car_regis/not_passed/'.$qq['idCarregis']);
            
        }
        else if($_SESSION['id_Employee'] != 2 )
        {
            echo "<script>";
            echo "alert('แก้ไขสถานะเรียบร้อย');";
            echo "window.location.href = '". base_url(). "Emp_car';";
            echo "</script>";
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
            'idStatus' => $this->input->post('idStatus'),
            'EndDate' => $this->input->post('EndDate'),
            'RentalPrice' => $this->input->post('RentalPrice')
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