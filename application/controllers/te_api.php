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
class te_api extends \Restserver\Libraries\REST_Controller {

    public function index()
    {
        
    }

    public function index_get()
    {
        $Username = $this->get('Username');
        $password = $this->get('Password');

        $this->db->where('Username', $Username);
        $this->db->where('Password', $password);
        $query = $this->db->get('Member');
        $this->response($query->result());
      
        
        
    }
    public function index_post()
    {
        $Username = $this->post('Username');
        $password = $this->post('Password');
        $this->db->where('Username', $Username);
        $this->db->where('Password', $password);
        $query = $this->db->get('Member');
        $this->response($query->result());

    }
    public function Login()
    {
        $Username = $this->input->post('username');
        $password = $this->input->post('password');
        $this->db->where('Username', $Username);
        $this->db->where('password', $password);
        $data = $query->row_array();
        $this->session->set_userdata($data);
        $query = $this->db->get('Member', 1);
        if($this->session->userdata('Row') =="ลูกค้า")
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

