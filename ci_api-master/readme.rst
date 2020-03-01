# ci_api
ตัวอย่าง RESTFul API นี้พัฒนาด้วยภาษา PHP 
โดยใช้ CodeIgniter Framework และ RestServer Framework ของ Chris Kacerguis 
ดูรายละเอียดได้ที่ https://github.com/chriskacerguis/codeigniter-restserver


# การติดตั้งฐานข้อมูล
ทำการ import database จากไฟล์ saledb.sql ลงไปใน MySQL หรือ MariaDB 
โดยใช้ phpMyAdmin หรือเครื่องมืออื่น ๆ


# การติดตั้งระบบ
1. ติดตั้ง XAMPP หรือ AppServ
2. Download โค้ดทั้งหมดไปเก็บไว้ใน Path ที่ต้องการ เช่น C:\xampp\htdocs\ci_api
3. Config ฐานข้อมูล ได้แก่ hostname, username, password, และชื่อฐานข้อมูล 
   ที่ไฟล์ C:\xampp\htdocs\ci_api\application\config\database.php
   ตัวอย่างการ Config ฐานข้อมูลในไฟล์ database.php
   
   $db['default'] = array(
	'dsn'	=> '',
	'hostname' => 'localhost',
	'username' => 'root',
	'password' => '',
	'database' => 'saledb',
   );


# การเข้าใช้งาน 
1. ใช้ GET method เพื่อดูรายการข้อมูล (พนักงาน) ทั้งหมด
   เช่น http://localhost/ci_api/index.php/api/employee/
2. ใช้ GET method เพื่อดูรายละเอียดข้อมูล (พนักงาน) โดยการระบุรหัสต่อท้าย
   เช่น http://localhost/ci_sale/index.php/api/employee/000002
3. ใช้ POST method เพื่อเพิ่มข้อมูล
   เช่น http://localhost/ci_api/index.php/api/employee/create
4. ใช้ PUT method เพื่อปรับปรุงข้อมูล
   เช่น http://localhost/ci_api/index.php/api/employee/update/000002  
5. ใช้ DELETE method เพื่อลบข้อมูล
   เช่น http://localhost/ci_api/index.php/api/employee/delete/000002
6. ใช้ POST method เพื่อทำการ Login
    เช่น http://localhost/ci_api/index.php/api/employee/login
   
# การสร้าง API
1. สร้างตารางข้อมูลในฐานข้อมูล เช่น ตารางสินค้า (product)
2. copy ไฟล์ C:\xampp\htdocs\ci_api\application\controllers\api\Employee.php 
   ไปเก็บไว้ที่ C:\xampp\htdocs\ci_api\application\controllers\api\Product.php
3. แก้ไขโค้ด Product.php
   3.1 ส่วนหลักของ Class แก้ไขดังนี้

	//แก้ไขชื่อ Class ของ Controller เช่น จาก Employee เป็น Product
	class Employee extends \Restserver\Libraries\REST_Controller {
		function __construct(){
			parent:: __construct();
			//แก้ไขชื่อ Class ของ Model เช่น จาก EmployeeModel เป็น ProductModel
			$this->load->model('EmployeeModel');
			$this->load->database(); 
		}
		...
		...
	
   3.2 ส่วนของ GET method เพื่อดูรายการข้อมูล (พนักงาน) แก้ไขดังนี้
	public function index_get($id=-1)
	{
		if($id!=-1){
			//แก้ไขชื่อ Class ของ Model เช่น จาก EmployeeModel เป็น ProductModel
			$data=$this->EmployeeModel->selectOne($id);
		}else{
			//แก้ไขชื่อตารางข้อมูล เช่น product
			$query = $this->db->get("employee"); 
			$data = $query->result(); 
		}
		...
		...
   
   
   3.3 ส่วนของ POST method เพื่อเพิ่มข้อมูล แก้ไขดังนี้
   	public function create_post()
	{
        $data = array( 
			//แก้ไขชื่อ Field ของตารางข้อมูล
			'username' => $this->post('username'),
			'password' => $this->post('password'), 
			'empID' => $this->post('empID'),
			...
			...
		); 		
		//แก้ไขชื่อ Class ของ Model เช่น จาก EmployeeModel เป็น ProductModel
		if($this->EmployeeModel->insert($data)){
			$this->response(array(
				'message' => 'success', 
				'status' => 'true'));
		...
		...
		
   3.4 ส่วนของ PUT method เพื่อปรับปรุงข้อมูล แก้ไขดังนี้
   	public function update_put($id)
	{
        $data = array( 
			//แก้ไขชื่อ Field ของตารางข้อมูล
			'username' => $this->put('username'),
			'password' => $this->put('password'), 
			'firstName' => $this->put('firstName'), 
			'lastName' => $this->put('lastName')
		); 	
		//แก้ไขชื่อ Class ของ Model เช่น จาก EmployeeModel เป็น ProductModel
		if($this->EmployeeModel->update($data,$id)){
			$this->response(array(
				'message' => 'success', 
				'status' => 'true'));
				...
				...
   
   3.5 ส่วนของ DELETE method เพื่อลบข้อมูล แก้ไขดังนี้
   	public function delete_delete($id)
	{
		//แก้ไขชื่อ Class ของ Model เช่น จาก EmployeeModel เป็น ProductModel
		if($this->EmployeeModel->delete($id)){
			$this->response(array(
				'message' => 'success', 
				'status' => 'true'))
				...
				...

   3.6 ส่วนของ POST method เพื่อ Login แก้ไขดังนี้
	public function login_post()
	{
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		//แก้ไขชื่อ Class ของ Model เช่น จาก EmployeeModel เป็น ProductModel
		$data=$this->EmployeeModel->selectUser($username,$password);
				...
				...
				
4. copy ไฟล์ C:\xampp\htdocs\ci_api\application\models\EmployeeModel.php 
   ไปเก็บไว้ที่ C:\xampp\htdocs\ci_api\application\models\ProductModel.php
5. แก้ไขโค้ด ProductModel.php
   5.1 ส่วนหลักของ Class แก้ไขดังนี้
   //แก้ไขชื่อ Class ของ Model เช่น จาก EmployeeModel เป็น ProductModel
   class EmployeeModel extends CI_Model {
    
      function __construct() { 
         parent::__construct(); 
      } 
      
   5.2 ส่วนของการดูรายการข้อมูล แก้ไขดังนี้  
        public function selectOne($id){
         //แก้ไขชื่อตารางข้อมูล เช่น จาก employee เป็น product
         //และแก้ไขรหัสข้อมูล เช่น จาก empID เป็น productID
         $query = $this->db->get_where("employee",array("empID"=>$id));
         $data = $query->result(); 
         return $data;
      	}

   5.3 ส่วนของการเพิ่มข้อมูล แก้ไขดังนี้  
       public function insert($data) { 
         //แก้ไขชื่อตารางข้อมูล เช่น จาก employee เป็น product
         if ($this->db->insert("employee", $data)) { 
            return true; 
         } 
       }    
       
   5.4 ส่วนของการปรับปรุงข้อมูล แก้ไขดังนี้
       public function update($data,$id) { 
         $this->db->set($data); 
          //แก้ไขรหัสข้อมูล เช่น จาก empID เป็น productID   
          //และแก้ไขชื่อตารางข้อมูล เช่น จาก employee เป็น product      
         $this->db->where("empID", $id); 
         $this->db->update("employee", $data); 
         return true;
       }    

   5.5 ส่วนของการลบข้อมูล แก้ไขดังนี้
       public function delete($id) { 
         //แก้ไขชื่อตารางข้อมูล เช่น จาก employee เป็น product 
         //และแก้ไขรหัสข้อมูล เช่น จาก empID เป็น productID
         if ($this->db->delete("employee", "empID = '".$id."'")) { 
            return true; 
         } 
       } 
 
    5.6 ส่วนของการ Login แก้ไขดังนี้
      public function selectUser($username,$password){
         //แก้ไขชื่อตารางข้อมูล เช่น จาก employee เป็น product
         //และแก้ไขชื่อของ ชื่อผู้ใช้และรหัสผ่าน
         $query = $this->db->get_where("employee",array("username"=>$username,"password"=>$password));
         $data = $query->result(); 
         return $data;
      }
