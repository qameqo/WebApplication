<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Emp_car extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Manager_car_regis_model');
    }

    public function index()
    {   
        $data['query']=$this->Manager_car_regis_model->show_car_regis();

        $this->load->view('Employee/Header_emp');
        $this->load->view('Employee/Emp_car_regis_view', $data);
        $this->load->view('Employee/Footer_emp');
    } 

    public function index_2()
    {   
        $data['query']=$this->Manager_car_regis_model->show_car_regis();

        $this->load->view('Employee/Header_emp');
        $this->load->view('Employee/Emp_car_regis_view_2', $data);
        $this->load->view('Employee/Footer_emp');
    } 

    public function show($idCarregis)
    {
        //$this->db->get('Table', limit, offset);
        
        $data['rs']=$this->Manager_car_regis_model->read($idCarregis);

        // echo '<pre>';
        // print_r($data);
        // echo '</pre>';

        // exit;

        $this->load->view('Employee/Header_emp');
        $this->load->view('Employee/Emp_car_regis_show_view', $data);
        $this->load->view('Employee/Footer_emp');
        $this->load->view('Script_manager_emp');
        $this->load->view('Modal_view');
    }
    
    public function add_status_2()
    {
        $this->Manager_car_regis_model->add_status_2();
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

                $this->db->where('id_Status', 4);
                $this->db->where('Dayfirst', date('Y-m-d', $d));
                
                $data = array( 
                    'id_status' => '7',
                    'EndDate' => date('Y-m-d')
                );

                $this->db->update('Carregis',$data);
                              
            }

            
        }

        redirect('Emp_car/refresh_car_2');
            
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

                $this->db->where('id_Status', 2);
                $this->db->where('StartDate', date('Y-m-d', $dd));
                
                $data = array( 
                    'id_status' => '7',
                    'EndDate' => date('Y-m-d')
                );

                $this->db->update('Carregis',$data);
                             
            }

            
        }

        redirect('Emp_car/refresh_rent');
            
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

        redirect('Emp_car/refresh_rent_2');
        
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

        redirect('Emp');
        
    }
}

/* End of file Hello.php */
