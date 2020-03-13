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
class Editpro_api extends \Restserver\Libraries\REST_Controller {

    public function index_post($id){
            $data = array(
            'Password' =>  $this->input->post("password"),
            'F_Name' =>  $this->input->post("fname"),
            'L_Name' =>  $this->input->post("lname"),
            'Address' =>  $this->input->post("address"),
            'Tel' =>  $this->input->post("tel"),
            );
           
            
            
            if(!empty($data)){
            $this->db->where('id_Employee', $id);
            $this->db->update('Employee', $data);
            $this->response(array(
                'status' => 'true'
                
            ));
            }else
            {
                $this->response(array(
                    'status' => 'false'
                ));
            }
    }
}