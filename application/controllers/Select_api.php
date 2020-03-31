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
class Select_api extends \Restserver\Libraries\REST_Controller {

    public function index_post($id)
    {

            $this->db->select('*');
            $this->db->from('Rental');
            $this->db->join('Carregis', 'Carregis.idCarregis = Rental.idCarregis');
            // $this->db->join('Carregis', 'Carregis.idCarregis = Rental.idCarregis2');
            $this->db->join('Brand', 'Brand.idBrand = Carregis.idBrand');
            $this->db->join('Generation', 'Generation.id_Gen = Carregis.id_Gen');
            $this->db->join('Member', 'Member.id_Member = Rental.id_Member');
            $this->db->where('Rental.id_status', 11);
            $this->db->where('Rental.id_Member', $id);
            $data = $this->db->get();
            $data = $data->result_array();
            
            $qaa = $data[0]['idCarregis2'];

            $this->db->select('*');
            $this->db->from('Rental');
            // $this->db->join('Carregis', 'Carregis.idCarregis = Rental.idCarregis');
            $this->db->join('Carregis', 'Carregis.idCarregis = Rental.idCarregis2');
            $this->db->join('Brand', 'Brand.idBrand = Carregis.idBrand');
            $this->db->join('Generation', 'Generation.id_Gen = Carregis.id_Gen');
            $this->db->join('Member', 'Member.id_Member = Rental.id_Member');
            $this->db->where('Rental.id_status', 11);
            $this->db->where('Rental.id_Member', $id);
            $data2 = $this->db->get();
            $data2 = $data2->result_array();
            
            if(!empty($data)){
                $this->response(array(
                    'message' => 'success', 
                    'status' => 'true', 
                    'data' => $data,
                   
                ));
            }else{
                $this->response(array(
                    'message' => 'unsuccess', 
                    'status' => 'false', 
                   
                ));
            }
        // if($data >0){
        //     $this->response(array(
        //         'status' => 'true',
        //         'posts' => $data
        //     ));
        // }else
        // {
        //     $this->response(array(
        //         'status' => 'false'
        //     ));
        // }
       
        
    
    
    }
}
?>