<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Manager_first extends CI_Controller {

    public function index()
    {
        $this->load->view('Manager/Header_manage');
        $this->load->view('Manager/First_page_backend_view');
        $this->load->view('Manager/Footer_manage');
        // $this->load->view('Script_manager_emp');
        // $this->load->view('Modal_view');
    }

    public function refresh_car()
    {
        $d=strtotime("-3 day");

        $query = $this->db->query("SELECT * FROM Carregis ");
        
        $qq = $query->result_array();

        foreach ($qq as $data) {

                // echo "<pre>";
                // print_r ($data['id_Status']);
                // echo "</pre>";
                // exit;

            if($data['Dayfirst'] >= date('Y-m-d', $d)){ //ไม่ได้กำหนดวันส่ง

                $this->db->where('id_Status', 2);
                $this->db->where('Dayfirst', date('Y-m-d', $d));
                
                $data = array( 
                    'id_status' => '7',
                    'EndDate' => date('Y-m-d')
                );

                $this->db->update('Carregis',$data);
                              
            }

            
        }

        redirect('Manager_first/refresh_car_2');
            
        // exit;
        
    }
   
    public function refresh_car_2()
    {
        $dd=strtotime("-1 day");

        $query = $this->db->query("SELECT * FROM Carregis ");
        
        $qq = $query->result_array();

        foreach ($qq as $data) {

                // echo "<pre>";
                // print_r ($data['id_Status']);
                // echo "</pre>";
                // exit;

            if($data['StartDate'] >= date('Y-m-d', $dd)){ //ไม่ได้กำหนดวันส่ง

                $this->db->where('id_Status', 4);
                $this->db->where('StartDate', date('Y-m-d', $dd));
                
                $data = array( 
                    'id_status' => '7',
                    'EndDate' => date('Y-m-d')
                );

                $this->db->update('Carregis',$data);
                             
            }

            
        }

        redirect('Manager_first/refresh_rent');
            
        exit;
        
    }

    public function refresh_rent()
    {
        $dd=strtotime("-1 day");
        
        $query = $this->db->query("SELECT * FROM Rental ");
        
        $qq = $query->result_array();

        foreach ($qq as $data) {

            // echo "<pre>";
            // print_r ($data['Datebooking']);
            // echo "</pre>";
            // exit;
        
            if($data['Datebooking'] >= date('Y-m-d', $dd)){ //ไม่ได้ชำระเงินมัดจำ

                $this->db->where('id_status', 9);
                $this->db->where('Datebooking', date('Y-m-d', $dd));
                
                $data = array( 
                    'id_status' => '6',
                );

                $this->db->update('Rental',$data);
                             
            }
        
        }

        redirect('Manager_first/refresh_rent_2');
        
    }

    public function refresh_rent_2()
    {
        $dd=strtotime("-1 day");
        
        $query = $this->db->query("SELECT * FROM Rental ");
        
        $qq = $query->result_array();

        foreach ($qq as $data) {

            // echo "<pre>";
            // print_r ($data['Datebooking']);
            // echo "</pre>";
            // exit;
        
            if($data['startDate'] >= date('Y-m-d', $dd)){ //ไม่มารับรถเช่า

                $this->db->where('id_status', 10);
                $this->db->where('startDate', date('Y-m-d', $dd));
                
                $data = array( 
                    'id_status' => '6',
                );

                $this->db->update('Rental',$data);
                             
            }
        
        }

        redirect('Manager_first');
        
    }

}

/* End of file Hello.php */
