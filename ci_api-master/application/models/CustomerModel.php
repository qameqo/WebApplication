<?php 
   class CustomerModel extends CI_Model {
    
      function __construct() { 
         parent::__construct(); 
      } 
      
      public function selectOne($id){
          
         $query = $this->db->get_where("customer",array("customerID"=>$id));
         
         $data = $query->result(); 
         
         return $data;
      }
   
      public function insert($data) { 
         if ($this->db->insert("customer", $data)) { 
            return true; 
         } 
      } 

      public function update($data,$id) { 
         $this->db->set($data); 
         $this->db->where("customerID", $id); 
         $this->db->update("customer", $data); 
         return true;
      } 

         
      public function delete($id) { 
         if ($this->db->delete("customer", "customerID = '".$id."'")) { 
            return true; 
         } 
      } 
   
      
      public function selectUser($username,$password){
         $query = $this->db->get_where("customer",array("username"=>$username,"password"=>$password));
         $data = $query->result(); 
         return $data;
      }
   } 
?>