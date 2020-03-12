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
class Map_api extends \Restserver\Libraries\REST_Controller {

  

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
       
        $detail = $this->input->post('detail');
        $lat = $this->input->post('lat');
        $lon = $this->input->post('lon');
        $TypeProblem = $this->input->post('Pro');
        $idr = $this->input->post('idrent');
        $dat = date("Y-m-d H:i:s");
        $obj = array(
            'id_status'=>'14'
        );
        
        //$query = $this->db->get_where("Member",1 ,array("Username"=>$Username,"Password"=>$Password));
        // echo $Username;
        // echo $Password;
        $object = array(
           
            'Detail'=>$detail,
            'Lat'=>$lat,
            'Lng' =>$lon,
            'Date' => $dat,
            'id_Type_Problem'=>$TypeProblem,
            'idRental'=>$idr
            
            
        );
        if($object == null){
           
            $this->response(array(
                'status' => 'no'
            ));
        }else
        {
            $ins = $this->db->insert('Problem', $object);
            $this->db->where('idRental', $idr);
            $this->db->update('Rental', $obj);
            
            $this->response(array(
                'status' => 'insert'
            ));
        }
    }
   
}
            
    
        
    


/* End of file Controllername.php */
 ?>

