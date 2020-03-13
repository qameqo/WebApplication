<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
 
// This can be removed if you use __autoload() in config.php OR use Modular Extensions
/** @noinspection PhpIncludeInspection */
require APPPATH . '/libraries/REST_Controller.php';
 
/**
 * This is an example of a few basic user interaction methods you could use
 * all done with a hardcoded array
 *
 * @package         CodeIgniter
 * @subpackage      Rest Server
 * @category        Controller
 * @author          Phil Sturgeon, Chris Kacerguis
 * @license         MIT
 * @link            https://github.com/chriskacerguis/codeigniter-restserver
 */
class Te_api extends \Restserver\Libraries\REST_Controller {

  

    // public function index_get()
    // {
    //     $Username = $this->input->post('Username');
    //     $password = $this->input->post('Password');

    //     $this->db->where('Username', $Username);
    //     $this->db->where('Password', $password);
    //     $query = $this->db->get('Member',1);

    //     //$this->db->get_where("customer",array("username"=>$username,"password"=>$password));
    //     //echo $query;
    //     if($query->num_rows()==1){
	// 		$this->response(array(
	// 			'message' => 'success', 
	// 			'status' => 'true', 
    //             //'data' => $data
    //         ));
	// 	}else{
	// 		$this->response(array(
	// 			'message' => 'unsuccess', 
    //             'status' => 'false'
    //         ));
	// 	}
        
        
    // }
    public function index_post()
    {
        
        $Username = $this->input->post('username');
        $Password = $this->input->post('password');
        //$query = $this->db->get_where("Member",1 ,array("Username"=>$Username,"Password"=>$Password));
        // echo $Username;
        // echo $Password;
        $this->db->where('Username',$Username);
        $this->db->where('Password',$Password);
        $query = $this->db->get('Member' ,1);
        $data = $query->num_rows(); 

        $this->db->select('id_Member');
        $this->db->from('Member');
        $this->db->where('Username', $Username);
        $qq = $this->db->get();
        $qq = $qq->result_array();
        if($data == 1)
        {

            //$this->response($qq);
            $this->response(array(
                'status' => 'Mem',
                'id_Member'=> $qq[0]['id_Member']
            ));
          
        }else
        {
            $this->db->where('Username', $Username);
            $this->db->where('Password', $Password);
            $query = $this->db->get('Employee', 1);
            $this->db->select('id_Employee');
            $this->db->from('Employee');
            $this->db->where('Username', $Username);
            $emp = $this->db->get();
            $emp = $emp->result_array();
            
            if($query->num_rows() ==1)
            {
                $data = $query->row_array();
                $this->session->set_userdata($data);
                if($this->session->userdata('id_position') =="4")
                {
                    $this->response(array(
                        'status' => 'false'
                    ));//เจ้าของร้าน
                }elseif($this->session->userdata('id_position') =="1"){
                    
                    $this->response(array(
                        'status' => 'false'
                    )); //พนักงาน
                }elseif($this->session->userdata('id_position') =="2"){

                    $this->response(array(
                        'status' => 'tech',
                        'id_Employee'=> $emp[0]['id_Employee']
                    )); //ช่าง
                }elseif($this->session->userdata('id_position') =="3"){

                    $this->response(array(
                        'status' => 'io',
                        'id_Employee'=> $emp[0]['id_Employee']
                    )); //ประกัน
                }
            }else
            {
                $this->response(array(
                    'status' => 'false'
                ));
            }
           
        }
    }
   
}
            
    
        
    


/* End of file Controllername.php */
 ?>

