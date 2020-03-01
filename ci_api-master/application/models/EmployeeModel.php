<?php 
   //แก้ไขชื่อ Class ของ Model เช่น จาก EmployeeModel เป็น ProductModel
   class EmployeeModel extends CI_Model {
    
      function __construct() { 
         parent::__construct(); 
      } 
      
      public function selectOne($id){
         //แก้ไขชื่อตารางข้อมูล เช่น จาก employee เป็น product
         //และแก้ไขรหัสข้อมูล เช่น จาก empID เป็น productID
         $query = $this->db->get_where("employee",array("empID"=>$id));
         $data = $query->result(); 
         return $data;
      }
   
      public function insert($data) { 
         //แก้ไขชื่อตารางข้อมูล เช่น จาก employee เป็น product
         if ($this->db->insert("employee", $data)) { 
            return true; 
         } 
      } 
   
      public function update($data,$id) { 
         $this->db->set($data); 
          //แก้ไขรหัสข้อมูล เช่น จาก empID เป็น productID   
          //และแก้ไขชื่อตารางข้อมูล เช่น จาก employee เป็น product      
         $this->db->where("empID", $id); 
         $this->db->update("employee", $data); 
         return true;
      } 

         
      public function delete($id) { 
         //แก้ไขชื่อตารางข้อมูล เช่น จาก employee เป็น product 
         //และแก้ไขรหัสข้อมูล เช่น จาก empID เป็น productID
         if ($this->db->delete("employee", "empID = '".$id."'")) { 
            return true; 
         } 
      } 

      public function selectUser($username,$password){
         //แก้ไขชื่อตารางข้อมูล เช่น จาก employee เป็น product
         //และแก้ไขชื่อของ ชื่อผู้ใช้และรหัสผ่าน
         $query = $this->db->get_where("employee",array("username"=>$username,"password"=>$password));
         $data = $query->result(); 
         return $data;
      }

   } 
?>