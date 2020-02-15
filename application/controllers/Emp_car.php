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
        $query = $this->db->query("SELECT * FROM Carregis ");
        
        $qq = $query->result_array();

        foreach ($qq as $data) {

            $d=strtotime("-3 day");
            $dd=strtotime("-1 day");

            if( $data['Dayfirst'] == date('Y-m-d', $d)){
                
                // echo "<pre>";
                // print_r ($data['idCarregis']);
                // echo "</pre>";

                $this->db->where('id_status' , 2);

                $data = array( 
                    'id_status' => '7',
                    'EndDate' => date('Y-m-d')
                );

                $this->db->update('Carregis',$data);
                
            }elseif($data['StartDate'] == date('Y-m-d', $dd)){

                $this->db->where('id_status' , 4);

                $data = array( 
                    'id_status' => '7',
                    'EndDate' => date('Y-m-d')
                );

                $this->db->update('Carregis',$data);

            }
            
        }

        redirect('Emp');
            
        exit;
        
    }
   
}

/* End of file Hello.php */
