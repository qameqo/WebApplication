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
}

/* End of file Controllername.php */
 ?>