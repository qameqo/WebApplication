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

  

    public function index_get()
    {
        $Username = $this->get('Username');
        $password = $this->get('Password');

        $this->db->where('Username', $Username);
        $this->db->where('Password', $password);
        $query = $this->db->get('Member',1);

        $this->db->get_where("customer",array("username"=>$username,"password"=>$password));
        if($query->num_rows() ==1)
        {
            $this->response(array(
                'status' => 'yes'
            ));
          
        }else
        {
            $this->response(array(
                'status' => 'no'
            ));
        }
    
      
        
        
    }
    public function index_post()
    {
        $Username = $this->input->post('username');
        $password = $this->input->post('password');
        $this->db->where('Username', $Username);
        $this->db->where('password', $password);
        $query = $this->db->get('Member', 1);
        if($query->num_rows() ==1)
        {
            $this->response(array(
                'status' => 'ผ่าน'
            ));
          
        }else
        {
            $this->response(array(
                'status' => 'ไม่ผ่าน'
            ));
        }
    }
    public function Login()
    {
     
      
        $Username = $this->input->post('username');
        $password = $this->input->post('password');
        $this->db->where('Username', $Username);
        $this->db->where('password', $password);
        $query = $this->db->get('Member', 1);
        if($query->num_rows() ==1)
        {
            $data = $query->row_array();
            $data['ID'] = $data['id_Member'];
            $this->session->set_userdata($data);
            redirect('Firstpage'); //เจ้าของรถ
        }else
        {
                echo "<script>";
                echo "alert('ไม่พบรหัสผู้ใช้งาน');";
                echo "window.location.href = '". base_url(). "Login ';";
                echo "</script>";

        }
    }
}
            
    
        
    


/* End of file Controllername.php */
 ?>

