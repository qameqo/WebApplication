<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Emp_rental_model extends CI_Model 
{
    public function show_rental()
    {
        // $query = $this->db->get('Carregis');
        
        $this->db->select('*');
        $this->db->from('Rental');
        $this->db->join('RentalDetail', 'Rental.idRental = RentalDetail.idRent');
        $this->db->join('Carregis', 'RentalDetail.idCarregis = Carregis.idCarregis');
        $this->db->join('Brand', 'Carregis.id_Brand = Brand.idBrand');
        $this->db->join('Generation', 'Carregis.id_Gen = Generation.id_Gen');
        $this->db->join('Member', 'Rental.idMember = Member.id_Member');
        $this->db->join('Status_car', 'Rental.idstatus = Status_car.id_Status');
        $this->db->join('Type_Insurance', 'Rental.id_Insurance = Type_Insurance.id_Insurance');

        $query = $this->db->get();

        return $query->result();
        
    }

    public function read_rental($idRental)
    {
        $this->db->select('*');
        $this->db->from('Rental');
        $this->db->join('RentalDetail', 'Rental.idRental = RentalDetail.idRent');
        $this->db->join('Carregis', 'RentalDetail.idCarregis = Carregis.idCarregis');
        $this->db->join('Brand', 'Carregis.id_Brand = Brand.idBrand');
        $this->db->join('Generation', 'Carregis.id_Gen = Generation.id_Gen');
        $this->db->join('Member', 'Rental.idMember = Member.id_Member');
        $this->db->join('Status_car', 'Rental.idstatus = Status_car.id_Status');
        $this->db->join('Type_Insurance', 'Rental.id_Insurance = Type_Insurance.id_Insurance');
        // $this->db->join('Images3', 'Rental.idRental = Images3.idrent');

        
        // $this->db->join('Employee', 'Rental.id_Employee = Employee.id_Employee');


        $this->db->where('idRental', $idRental);
        $query = $this->db->get();

        if ($query->num_rows() > 0) 
        {
            $data = $query->row();
            return $data;
        }
       return FALSE;
    }

    public function add_status()
    {
        // print_r($_POST);
        
        // exit;

        $this->db->where('idRental', $this->input->post('idRental'));
       
        $data = array( 
            'id_Employee' => $this->session->userdata('id_Employee'),
            'idstatus' => $this->input->post('idstatus')
        );

        $query_2=$this->db->update('Rental',$data);

        $this->db->where('idCarregis', $this->input->post('idCarregis'));

        $data_2 = array( 
            'id_Employee' => $this->session->userdata('id_Employee'),
            'idStatus' => $this->input->post('idstatus')
        );

        $query=$this->db->update('Carregis',$data_2);

        $this->db->order_by('idRental', 'desc');
        $query_2 =  $this->db->get('Rental', 1);
        $qq = $query_2->row_array();

        redirect('Emp_rental/not_passed_rent/'.$qq['idRental']);
        
        // redirect('Manager_emp');
    }

    public function add_status_2()
    {
        // print_r($_POST);
        
        // exit;

        $this->db->where('idRental', $this->input->post('idRental'));
       
        $data = array( 
            'id_Employee' => $this->session->userdata('id_Employee'),
            'idstatus' => $this->input->post('idstatus')
        );

        $query_2=$this->db->update('Rental',$data);

        $this->db->where('idCarregis', $this->input->post('idCarregis'));

        $data_2 = array( 
            'id_Employee' => $this->session->userdata('id_Employee'),
            'idStatus' => $this->input->post('idstatus')
        );

        $query=$this->db->update('Carregis',$data_2);

        $this->db->order_by('idRental', 'desc');
        $query_2 =  $this->db->get('Rental', 1);
        $qq = $query_2->row_array();

        echo "<script>";
        echo "alert('แก้ไขสถานะเรียบร้อย');";
        echo "window.location.href = '". base_url(). "Emp_rental/index_2';";
        echo "</script>";
        
        // redirect('Manager_emp');
    }

    public function add_status_3()
    {
        // print_r($_POST);
        
        // exit;

        $this->db->where('idRental', $this->input->post('idRental'));
       
        $data = array( 
            'id_Employee' => $this->session->userdata('id_Employee'),
            'idstatus' => $this->input->post('idstatus')
        );

        $query_2=$this->db->update('Rental',$data);

        $this->db->where('idCarregis', $this->input->post('idCarregis'));

        $data_2 = array( 
            'id_Employee' => $this->session->userdata('id_Employee'),
            'idStatus' => $this->input->post('idStatus')
        );

        $query=$this->db->update('Carregis',$data_2);

        $this->db->order_by('idRental', 'desc');
        $query_2 =  $this->db->get('Rental', 1);
        $qq = $query_2->row_array();

        if($qq['idstatus'] == '6'){

            echo "<script>";
            echo "alert('แก้ไขสถานะเรียบร้อย');";
            echo "window.location.href = '". base_url(). "Emp_rental';";
            echo "</script>";  

        }else{

            echo "<script>";
            echo "alert('แก้ไขสถานะเรียบร้อย');";
            echo "window.location.href = '". base_url(). "Emp_rental/index_2';";
            echo "</script>";

        }
        
        // redirect('Manager_emp');
    }

    public function add_status_4()
    {
        // print_r($_POST);
        
        // exit;

        $this->db->where('idRental', $this->input->post('idRental'));
       
        $data = array( 
            'id_Employee' => $this->session->userdata('id_Employee'),
            'idstatus' => $this->input->post('idstatus')
        );

        $query_2=$this->db->update('Rental',$data);

        //-----------------------------------

        $this->db->where('idRent', $this->input->post('idRental'));
       
        $data = array( 
            'ReturnDate' => $this->input->post('ReturnDate'),
            'Fines_price' => $this->input->post('Fines_price')
        );

        $query_2=$this->db->update('RentalDetail',$data);

        //------------------------------------

        $this->db->where('idCarregis', $this->input->post('idCarregis'));

        $data_2 = array( 
            'id_Employee' => $this->session->userdata('id_Employee'),
            'idStatus' => $this->input->post('idStatus')
        );

        $query=$this->db->update('Carregis',$data_2);

        $this->db->order_by('idRental', 'desc');
        $query_2 =  $this->db->get('Rental', 1);
        $qq = $query_2->row_array();

        echo "<script>";
        echo "alert('ยืนยันการคืนเรียบร้อย');";
        echo "window.location.href = '". base_url(). "Emp_rental/index_3';";
        echo "</script>";
        
        // redirect('Manager_emp');
    }

    public function add_not_passed_rent()
    {
        $data = array( 
            'Name_not_rent' => $this->input->post('Name_not_rent'),
            'idRental' => $this->input->post('idRental')
        );

        $query=$this->db->insert('Not_passed_rent',$data);

        echo "<script>";
        echo "alert('บันทึกหมายเหตุเรียบร้อย');";
        echo "window.location.href = '". base_url(). "Emp_rental';";
        echo "</script>";
    }
}
?>