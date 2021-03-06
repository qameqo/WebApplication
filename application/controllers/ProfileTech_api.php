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
class ProfileTech_api extends \Restserver\Libraries\REST_Controller {

    public function index_post($id)
    {

            $this->db->select('*');
            $this->db->from('Employee');
            $this->db->where('id_Employee', $id);
            $data = $this->db->get();
            $data = $data->result_array();
            
            if(!empty($data)){
                $this->response(array(
                    'message' => 'success', 
                    'status' => 'true', 
                    'data' => $data));
            }else{
                $this->response(array(
                    'message' => 'unsuccess', 
                    'status' => 'false'));
            }
       
    
    
    }
}
?>