<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Manager_car_regis_model extends CI_Model 
{
    public function show_car_regis()
    {
        // $query = $this->db->get('Carregis');
        
        $this->db->select('*');
        $this->db->from('Carregis');
        $this->db->join('Brand', 'Carregis.idBrand = Brand.idBrand');
        $this->db->join('Generation', 'Carregis.id_Gen = Generation.id_Gen');
        $this->db->join('Member', 'Carregis.id_Member = Member.id_Member');
        $this->db->join('Status_car', 'Carregis.id_Status = Status_car.id_Status');

        $query = $this->db->get();

        return $query->result();
        
    }

    public function read($idCarregis)
    {
        $this->db->select('*');
        $this->db->from('Carregis');
        $this->db->join('Brand', 'Carregis.idBrand = Brand.idBrand');
        $this->db->join('Generation', 'Carregis.id_Gen = Generation.id_Gen');
        $this->db->join('Member', 'Carregis.id_Member = Member.id_Member');
        $this->db->join('Status_car', 'Carregis.id_Status = Status_car.id_Status');
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
        $this->db->join('Brand', 'Carregis.idBrand = Brand.idBrand');
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

    public function add_status_6()
    {
        // print_r($_POST);
        
        // exit;

        $this->db->where('idCarregis', $this->input->post('idCarregis'));
       
        $data = array( 
            'id_Status' => $this->input->post('id_Status'),
            'EndDate' => $this->input->post('EndDate')
        );

        $query=$this->db->update('Carregis',$data);

            echo "<script>";
            echo "alert('ยกเลิกการลงทะเบียนเรียบร้อย');";
            echo "window.location.href = '". base_url(). "Manager_car_regis/index_2';";
            echo "</script>";

        // redirect('Manager_emp');
    }

    public function add_status() //จขร. อนุมัติลงทะเบียน
    {
        // print_r($_POST);
        
        // exit;

        $this->db->where('idCarregis', $this->input->post('idCarregis'));
       
        $data = array( 
            'id_Employee' => $this->session->userdata('id_Employee'),
            'id_Status' => $this->input->post('id_Status'),
            'Dayfirst' => $this->input->post('Dayfirst')
        );

        $query=$this->db->update('Carregis',$data);

        // exit;

        $this->db->where('idCarregis', $this->input->post('idCarregis'));

        $query_2 = $this->db->get('Carregis');

        $qq = $query_2->result_array();

        foreach ($qq as $data) {

            if($data['id_Status'] == '3')
            {
                
                redirect('Manager_car_regis/not_passed/'.$this->input->post('idCarregis'));
                
            }
            else if($_SESSION['id_Employee'] != 2 )
            {
                echo "<script>";
                echo "alert('ยืนยันการรับรถยนต์เรียบร้อย');";
                echo "window.location.href = '". base_url(). "Emp_car';";
                echo "</script>";
            }
            else
            {
                echo "<script>";
                echo "alert('อนุมัติการลงทะเบียนเรียบร้อย');";
                echo "window.location.href = '". base_url(). "Manager_car_regis';";
                echo "</script>";
            }
        }
        // redirect('Manager_emp');
    }

    public function add_status_2() //พนง รับรถยนต์
    {
        // print_r($_POST);
        
        // exit;

        $this->db->where('idCarregis', $this->input->post('idCarregis'));
       
        $data = array( 
            'id_Employee' => $this->session->userdata('id_Employee'),
            'id_Status' => $this->input->post('id_Status'),
            'EndDate' => $this->input->post('EndDate'),
            'RentalPrice' => $this->input->post('RentalPrice')
        );

        $query=$this->db->update('Carregis',$data);

        $this->db->where('idCarregis', $this->input->post('idCarregis'));

        $query_2 = $this->db->get('Carregis');

        $qq = $query_2->result_array();

        foreach ($qq as $data) {

            if($data['id_Status'] == '5'){
                echo "<script>";
                echo "alert('บันทึกการรับรถยนต์เรียบร้อย');";
                echo "window.location.href = '". base_url(). "Emp_car';";
                echo "</script>";
            }else{
                echo "<script>";
                echo "alert('ยกเลิกการลงทะเบียนเรียบร้อย');";
                echo "window.location.href = '". base_url(). "Emp_car';";
                echo "</script>";
            }
        }
    }

    public function add_status_3() 
    {
        // print_r($_POST);
        
        // exit;

        $this->db->where('idCarregis', $this->input->post('idCarregis'));
       
        $data = array( 
            'id_Employee' => $this->session->userdata('id_Employee'),
            'id_Status' => $this->input->post('id_Status'),
            'StartDate' => $this->input->post('StartDate'),
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

    public function del_car($idCarregis)
    {

        $this->db->delete('Images',array('idCarregis'=>$idCarregis));
        $this->db->delete('Images2',array('idCarregis'=>$idCarregis));
        $this->db->delete('Not_passed',array('idCarregis'=>$idCarregis));
        $this->db->delete('Carregis',array('idCarregis'=>$idCarregis));
        // $this->db->delete('Rental',array('idCarregis'=>$idCarregis));

        echo "<script>";
        echo "alert('ลบข้อมูลเรียบร้อย');";
        echo "window.location.href = '". base_url(). "Manager_car_regis/index_2 ';";
        echo "</script>";

        // redirect('Manager_emp');
             
    }

    public function del_rental($id_Rental)
    {

        $this->db->delete('Images3',array('idRental'=>$id_Rental));
        $this->db->delete('Not_passed_rent',array('idRental'=>$id_Rental));
        $this->db->delete('Rental',array('idRental'=>$id_Rental));

        echo "<script>";
        echo "alert('ลบข้อมูลเรียบร้อย');";
        echo "window.location.href = '". base_url(). "Manager_car_regis/index_3 ';";
        echo "</script>";

        // redirect('Manager_emp');
             
    }

    public function show_repair()
    {
        // $query = $this->db->get('Carregis');
        
        $this->db->select('*');
        $this->db->from('Repair');
        // $this->db->from('Carregis');
        $this->db->join('Rental', 'Rental.idRental = Repair.idRental');
        $this->db->join('Carregis', 'Carregis.idCarregis = Rental.idCarregis');
        $this->db->join('Brand', 'Carregis.idBrand = Brand.idBrand');
        $this->db->join('Generation', 'Carregis.id_Gen = Generation.id_Gen');
        $this->db->join('Member', 'Carregis.id_Member = Member.id_Member');
        $this->db->join('Status_car', 'Carregis.id_Status = Status_car.id_Status');
        

        $query = $this->db->get();

        return $query->result();
        
    }

    public function detail_repair($id_Repair)
    {
        $this->db->select('*');
        $this->db->from('Repair');
        // $this->db->from('Carregis');
        $this->db->join('Rental', 'Rental.idRental = Repair.idRental');
        $this->db->join('Carregis', 'Carregis.idCarregis = Rental.idCarregis');
        $this->db->join('Brand', 'Carregis.idBrand = Brand.idBrand');
        $this->db->join('Generation', 'Carregis.id_Gen = Generation.id_Gen');
        $this->db->join('Member', 'Carregis.id_Member = Member.id_Member');
        $this->db->join('Status_car', 'Carregis.id_Status = Status_car.id_Status');

        $this->db->where('id_Repair', $id_Repair );
        $query = $this->db->get();

        if ($query->num_rows() > 0) 
        {
            $data = $query->row();
            return $data;
        }
        return FALSE;
    }

    public function add_status_13()
    {
        // print_r($_POST);
        
        // exit;

        $this->db->where('idCarregis', $this->input->post('idCarregis'));
       
        $data = array( 
            'id_Status' => $this->input->post('id_Status'),
        );

        $query=$this->db->update('Carregis',$data);
 
        echo "<script>";
        echo "alert('ซ่อมรถยนต์เรียบร้อย');";
        echo "window.location.href = '". base_url(). "Emp_car/index_3';";
        echo "</script>";

    }

    public function edit_data_repair()
    {
        $query_3 = $this->db->query('SELECT * FROM Rental WHERE idCarregis = '.$this->input->post('idCarregis').'');

        $qq = $query_3->result_array();

        foreach ($qq as $data) {
        
            $data_2 = array( 
                'Detail_repair' =>$this->input->post('Detail_repair'),
                'Price_Five' => $this->input->post('Price_Five'),
                'Price_Ins' => $this->input->post('Price_Ins'),
                'Price_manager' => $this->input->post('Price_manager'),
                'Total' => $this->input->post('Total'),
                'id_Employee' => $this->session->userdata('id_Employee'),
                'idRental' => $data['idRental'],
            );

            $query_2=$this->db->update('Repair',$data_2);

        }

        echo "<script>";
        echo "alert('บันทึกรายการซ่อมเรียบร้อย');";
        echo "window.location.href = '". base_url(). "Emp_car/index_4';";
        echo "</script>";
    }
}
?>