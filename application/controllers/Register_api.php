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
class Register_api extends \Restserver\Libraries\REST_Controller {

    public function index_post()
    {
        $Username = $this->input->post('username');
        $this->db->where('Username', $Username);
        $query = $this->db->get('Member', 1);
        if($query->num_rows() ==1)
        {
            $this->response(array(
                'status' => 'ซ้ำ'
            ));
            
            
        }else
        {
            $this->response(array(
                'status' => 'ไม่ซ้ำ'
            ));
            $date= $this->input->post("date");
            $datee= date("Y-m-d", strtotime($date));
       /*  $da = $this->input->post("date");
        $date = date("Y-m-d",$da); */
            $object = array(
            'Username' =>  $this->input->post("username"),
            'Password' =>  $this->input->post("password"),
            'FName' =>  $this->input->post("fname"),
            'LName' =>  $this->input->post("lname"),
            'Address' =>  $this->input->post("address"),
            'DateofBirth' => $datee,
            'Tel' =>  $this->input->post("tel"),
            'Type' => "เจ้าของรถ"
        );
        $this->db->insert('Member', $object);
       
        }
    }


}
?>