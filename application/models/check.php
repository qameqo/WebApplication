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
    
    
//      function selectstart($start,$idc,$end)
//     {
//         $query = $this->db->query("SELECT * FROM Rental WHERE ($start BETWEEN Rental.startDate and Rental.endDate) 
//         AND ($end BETWEEN Rental.startDate and Rental.endDate)
//         AND Rental.idCarregis = $idc");
//         //OR ($end BETWEEN Rental.startDate and Rental.endDate) 
//         // $query1 = $this->db->query('SELECT * FROM Rental WHERE ('.$start.' BETWEEN Rental.startDate and Rental.endDate)');
//         // OR ('.$end.' BETWEEN Rental.startDate and Rental.endDate)'

//         //SELECT * FROM Rental WHERE ('2020-02-15' BETWEEN Rental.startDate and Rental.endDate) OR ('2020-02-15' 
//         //BETWEEN Rental.startDate and Rental.endDate) and Rental.idCarregis = '72'
//         //$st = $query->num_rows();
        
//         if($query->num_rows() > 0)
//         {
            
//           return true; 
            
//         }
//         else
//         {
//           return false;  
//         }
            
        
       
//             // $this->db->select('*');
//             // $this->db->from('Carregis');
//             // $this->db->where('idCarregis',$idc);
//             // $query = $this->db->get();
//             // $qq = $query->result_array();
//             // $gh = $qq[0]['RentalPrice'];
//             // $car = $gh * 1; // ราคารถ
//             // $fg = 0.25;
//             // $total = $gh * $fg;
//             // $total2 = $total + $gh; // ราคาประกัน
//             // $vat = 0.07;
//             // $total3 = $total2 * $vat; //ราคา vat
//             // $totalprice = $total2 + $total3; //ราคารวม
            
//             // echo $car; // ราคารถ
        
         
        
//     }

}

/* End of file ModelName.php */
 ?> 