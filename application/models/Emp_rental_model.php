<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Emp_rental_model extends CI_Model 
{
    public function show_rental()
    {
        // $query = $this->db->get('Carregis');
        
        $this->db->select('*');
        $this->db->from('Rental');
        $this->db->join('Carregis', 'Rental.idCarregis = Carregis.idCarregis');
        $this->db->join('Brand', 'Carregis.idBrand = Brand.idBrand');
        $this->db->join('Generation', 'Carregis.id_Gen = Generation.id_Gen');
        $this->db->join('Member', 'Rental.id_Member = Member.id_Member');
        $this->db->join('Status_car', 'Rental.id_status = Status_car.id_Status');
        $this->db->join('Type_Insurance', 'Rental.id_Insurance = Type_Insurance.id_Insurance');

        $query = $this->db->get();

        return $query->result();
        
    }

    public function read_rental($idRental)
    {
        $this->db->select('*');
        $this->db->from('Rental');
        $this->db->join('Carregis', 'Rental.idCarregis = Carregis.idCarregis');
        $this->db->join('Brand', 'Carregis.idBrand = Brand.idBrand');
        $this->db->join('Generation', 'Carregis.id_Gen = Generation.id_Gen');
        $this->db->join('Member', 'Rental.id_Member = Member.id_Member');
        $this->db->join('Status_car', 'Rental.id_status = Status_car.id_Status');
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

    public function add_status() //ไม่อนุมัติสถานะ 3 ใส่หมายเหตุ
    {
        // print_r($_POST);
        
        // exit;

        $this->db->where('idRental', $this->input->post('idRental'));
       
        $data = array( 
            'id_Employee' => $this->session->userdata('id_Employee'),
            'id_status' => $this->input->post('id_status')
        );

        $query_2=$this->db->update('Rental',$data);

        redirect('Emp_rental/not_passed_rent/'.$this->input->post('idRental'));
        
        // redirect('Manager_emp');
    }

    public function add_status_2() //อนุมัติสถานะ 10
    {
        // print_r($_POST);
        
        // exit;

        $this->db->where('idRental', $this->input->post('idRental'));
       
        $data = array( 
            'id_Employee' => $this->session->userdata('id_Employee'),
            'id_status' => $this->input->post('id_status')
        );

        $query_2=$this->db->update('Rental',$data);

        //--------------------------------------------------------------------

        echo "<script>";
        echo "alert('แก้ไขสถานะเรียบร้อย');";
        echo "window.location.href = '". base_url(). "Emp_rental';";
        echo "</script>";
        
        // redirect('Manager_emp');
    }
    
    public function add_status_22() //ยืนยันการรับรถยนต์จากลูกค้า
    {
        // print_r($_POST);
        
        // exit;

        $this->db->where('idRental', $this->input->post('idRental'));
       
        $data = array( 
            'id_Employee_2' => $this->session->userdata('id_Employee'),
            'id_status' => $this->input->post('id_status'),
            'PriceFive' => $this->input->post('PriceFive'),
            'totalprice' => $this->input->post('totalprice')
        );

        $query_2=$this->db->update('Rental',$data);

        echo "<script>";
        echo "alert('ยืนยันการรับรถยนต์จากลูกค้าเรียบร้อยเรียบร้อย');";
        echo "window.location.href = '". base_url(). "Emp_rental/index_2';";
        echo "</script>";
        
        // redirect('Manager_emp');
    }

    // public function add_status_3() //ยกเลิกการเช่า
    // {
    //     // print_r($_POST);
        
    //     // exit;

    //     $this->db->where('idRental', $this->input->post('idRental'));
       
    //     $data = array( 
    //         'id_Employee' => $this->session->userdata('id_Employee'),
    //         'id_status' => $this->input->post('id_status'),
    //     );

    //     $query_2=$this->db->update('Rental',$data);

    //     $this->db->order_by('idRental', 'desc');
    //     $query_2 =  $this->db->get('Rental', 1);
    //     $qq = $query_2->row_array();

    //     if($qq['id_status'] == '6'){

    //         echo "<script>";
    //         echo "alert('แก้ไขสถานะเรียบร้อย');";
    //         echo "window.location.href = '". base_url(). "Emp_rental';";
    //         echo "</script>";  

    //     }else{

    //         echo "<script>";
    //         echo "alert('แก้ไขสถานะเรียบร้อย');";
    //         echo "window.location.href = '". base_url(). "Emp_rental/index_2';";
    //         echo "</script>";

    //     }
        
    //     // redirect('Manager_emp');
    // }

    // public function add_status_33() //ยกเลิกการเช่า
    // {
    //     // print_r($_POST);
        
    //     // exit;

    //     $this->db->where('idRental', $this->input->post('idRental'));
       
    //     $data = array( 
    //         'id_Employee_2' => $this->session->userdata('id_Employee'),
    //         'id_status' => $this->input->post('id_status')
    //     );

    //     $query_2=$this->db->update('Rental',$data);

    //     if($qq['id_status'] == '6'){

    //         echo "<script>";
    //         echo "alert('แก้ไขสถานะเรียบร้อย');";
    //         echo "window.location.href = '". base_url(). "Emp_rental';";
    //         echo "</script>";  

    //     }else{

    //         echo "<script>";
    //         echo "alert('แก้ไขสถานะเรียบร้อย');";
    //         echo "window.location.href = '". base_url(). "Emp_rental/index_2';";
    //         echo "</script>";

    //     }
        
    //     // redirect('Manager_emp');
    // }

    public function add_status_4() //คืนรถยนต์
    {
        // print_r($_POST);
        
        // exit; 
        
        //เปลี่ยนสถานะรถยนต์เป็นพร้อม

        //--------------------------------------------------------------------

        $this->db->select('*');
        $this->db->from('Rental');
        
        $this->db->where('idRental', $this->input->post('idRental'));

        $query = $this->db->get();

        $qq = $query->result_array();

        foreach ($qq as $data2) {
                
            $new_total = ($data2['totalprice'] + $this->input->post('Fines_price')) - 5000;
            
            // echo $new_total;
            // exit;

            $this->db->where('idRental', $this->input->post('idRental'));

            $data = array( 
                'id_Employee_3' => $this->session->userdata('id_Employee'),
                'id_status' => $this->input->post('id_status'),
                'ReturnDate' => $this->input->post('ReturnDate'),
                'PriceFive' => $this->input->post('PriceFive'),
                'Fines_price' => $this->input->post('Fines_price'),
                'totalprice' => $new_total
            );

            $query_2=$this->db->update('Rental',$data);   
            
            //---------------------------------------------------------------------------------

            $this->db->where('idCarregis', $this->input->post('idCarregis2'));
        
            $data = array( 
                'id_Status' => $this->input->post('id_Status'),
            );

            $query_2=$this->db->update('Carregis',$data);
 
        }

        $data = array( 
            'Scratches' => $this->input->post('Scratches'),
            'Light' => $this->input->post('Light'),
            'Break' => $this->input->post('Break'),
            'Car_tire' => $this->input->post('Car_tire'),
            'Fuel' => $this->input->post('Fuel'),
            'Total_fines' => $this->input->post('Total_fines'),
            'idRental' => $this->input->post('idRental'),
        );

        $query_2=$this->db->insert('Repair',$data); 

        echo "<script>";
        echo "alert('ยืนยันการคืนเรียบร้อย');";
        echo "window.location.href = '". base_url(). "Emp_rental/index_3';";
        echo "</script>";
    
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