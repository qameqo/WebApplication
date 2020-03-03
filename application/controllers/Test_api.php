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
class Test_api extends \Restserver\Libraries\REST_Controller {
 
    public function index_post()
    {
     
      
        $Username = $this->input->post('username');
        
        
        $object = array(
            'user'=>$this->input->post('username'),
            'tel' =>$this->input->post('tel')
        );
        $ins = $this->db->insert('test', $object);
        if($ins === true){
            $this->response(array(
                'status' => 'insert'
            ));
        }else
        {
            $this->response(array(
                'status' => 'no'
            ));
        }
        
        
       
    }
    
 
 
}