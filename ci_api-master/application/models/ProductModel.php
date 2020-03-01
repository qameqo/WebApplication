<?php 
   class ProductModel extends CI_Model {
    
      function __construct() { 
         parent::__construct(); 
      } 
      
      public function selectOne($id){
         $query = $this->db->get_where("product",array("productID"=>$id));
         $data = $query->result(); 
         return $data;
      }
   
      public function insert($data) { 
         if ($this->db->insert("product", $data)) { 
            return true; 
         } 
      } 
   
      public function update($data,$id) { 
         $this->db->set($data);      
         $this->db->where("productID", $id); 
         $this->db->update("product", $data); 
         return true;
      } 
         
      public function delete($id) { 
         if ($this->db->delete("product", "productID = '".$id."'")) { 
            return true; 
         } 
      } 

      public function product_type_count(){
         $query = $this->db->query("SELECT a.productTypeName as name, SUM(c.amount) AS value
                                    FROM product_type a
                                       INNER JOIN product b ON a.productTypeID=b.ProductTypeID
                                       INNER JOIN orders_detail c ON b.productID=c.productID
                                    GROUP BY a.productTypeName");
         $data = $query->result(); 
         return $data;
      }

      public function product_type_sale(){
         $query = $this->db->query("SELECT a.productTypeName as name, SUM(c.amount*c.price) AS value
                                    FROM product_type a
                                       INNER JOIN product b ON a.productTypeID=b.ProductTypeID
                                       INNER JOIN orders_detail c ON b.productID=c.productID
                                    GROUP BY a.productTypeName");
         $data = $query->result(); 
         return $data;
      }

   } 
?>