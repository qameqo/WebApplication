<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class check extends CI_Model {

    public function __construct()
    {
        parent::__construct();
    }
    function is_license_available($license)  
    {  
         $this->db->where('License', $license);  
         $query = $this->db->get("Carregis");  
         if($query->num_rows() > 0)  
         {  
              return true;  
         }  
         else  
         {  
              return false;  
         }  
    }
    function is_carbody_available($carbody)  
    {  
         $this->db->where('Carbody', $carbody);  
         $query = $this->db->get("Carregis");  
         if($query->num_rows() > 0)  
         {  
              return true;  
         }  
         else  
         {  
              return false;  
         }  
    }
    function is_username_available($username)  
    {  
         $this->db->where('Username', $username);  
         $query = $this->db->get("Member");  
         if($query->num_rows() > 0)  
         {  
              return true;  
         }  
         else  
         {  
              return false;  
         }  
    }
    
    
    function checkdate($startdate,$enddate)
    {     
         $this->db->select('*');
         $this->db->from('Rental');
         $this->db->join('Carregis', 'Carregis.idCarregis = Rental.idCarregis');
         $this->db->where('Carregis.idCarregis = Rental.idCarregis');
         $this->db->where('startDate', $startdate);
         $this->db->where('endDate', $enddate);
         $query = $this->db->get();
         if($query->num_rows()>0)
         {
              return true;
         }
          else
          {
               return false; 
          }
     

         
    }

}

/* End of file ModelName.php */
 ?> 