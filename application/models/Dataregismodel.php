<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Dataregismodel extends CI_Model {
    
    public function show_car_regis()
    {
        $query = $this->db->get('Carregis');
        return $query->result();
        
    }

    public function read($idCarregis)
    {
        $this->db->select('*');
        $this->db->from('Carregis');
        $this->db->where('idCarregis', $idCarregis);
        $query = $this->db->get();

        if ($query->num_rows() > 0) 
        {
            $data = $query->row();
            return $data;
        }
        return FALSE;
    }

}

/* End of file ModelName.php */
 ?>