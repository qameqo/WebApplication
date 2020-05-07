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
class WorkTech_api extends \Restserver\Libraries\REST_Controller {

    public function index_post($idp,$idr,$ide){
        $detail2 = $this->input->post('detail2');
        $date2 = date("Y-m-d H:i:s");

        $object = array(
            'Detail_2' => $detail2,
            'Date_2' => $date2
        );
        $kk = array(
            'id_status' => '11'
        );
        $oo = array(
            'Status' => '1'
        );
        

        if(!empty($object)){
            
            $this->db->where('id_Problem', $idp);
            $this->db->update('Problem', $object);
            $this->db->where('idRental', $idr);
            $this->db->update('Rental', $kk);
            $this->db->where('id_Employee', $ide);
            $this->db->update('Employee', $oo);
            
            

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