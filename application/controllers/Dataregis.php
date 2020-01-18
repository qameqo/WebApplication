<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Dataregis extends CI_Controller {


    public function index()
    {
        
        $this->load->view('header');
        $this->load->view('dataregis');
        $this->load->view('footer');
        
    }
    

        // $this->db->select('*');
        // $this->db->from('Brand');
        // $this->db->join('Carregis', 'Carregis.Brand = Brand.idBrand');
        // $query = $this->db->get();
        // $data = $query->row_array();
        // $this->db->where('idCarregis');
		// $query = $this->db->get('Carregis',1);
        // $data = $query->row_array();
        // $data['IDC'] = $data['idCarregis'];
    

}

/* End of file Controllername.php */
 ?>