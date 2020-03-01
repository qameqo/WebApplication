<?php
defined('BASEPATH') OR exit('No direct script access allowed');

//แก้ไขชื่อ Class ของ Controller เช่น จาก Employee เป็น Product
class Employee extends \Restserver\Libraries\REST_Controller {
	function __construct(){
		parent:: __construct();
		//แก้ไขชื่อ Class ของ Model เช่น จาก EmployeeModel เป็น ProductModel
		$this->load->model('EmployeeModel');
		$this->load->database(); 
	}

	public function index_get($id=-1)
	{
		if($id!=-1){
			//แก้ไขชื่อ Class ของ Model เช่น จาก EmployeeModel เป็น ProductModel
			$data=$this->EmployeeModel->selectOne($id);
		}else{
			//แก้ไขชื่อตารางข้อมูล เช่น จาก employee เป็น product
			$query = $this->db->get("employee"); 
			//$query = $this->db->get_where("employee",array("empID<="=>"000006"));
			$data = $query->result(); 
		}

		if(!empty($data)){
			$this->response(array(
				'message' => 'success', 
				'status' => 'true', 
				'data' => $data));
		}else{
			$this->response(array(
				'message' => 'unsuccess', 
				'status' => 'false'));
		}

	}
  
	public function create_post()
	{
        $data = array( 
			//แก้ไขชื่อ Field ของตารางข้อมูล
			'empID' => $this->post('empID'),
			'username' => $this->post('username'),
			'password' => $this->post('password'), 
			'firstName' => $this->post('firstName'), 
			'lastName' => $this->post('lastName'),
			'email' => $this->post('email'),
			'mobilePhone' => $this->post('mobilePhone'), 
			'birthDate' => $this->post('birthDate'), 
			'gender' => $this->post('gender'), 
			'empType' => $this->post('empType'), 
			'isActive' => $this->post('isActive')=='1'? 1 : 0
			
		); 		
		//แก้ไขชื่อ Class ของ Model เช่น จาก EmployeeModel เป็น ProductModel
		if($this->EmployeeModel->insert($data)){
			$this->response(array(
				'message' => 'success', 
				'status' => 'true'));
		}else{
			$this->response(array(
				'message' => 'unsuccess', 
				'status' => 'false'));
		}
	}

	
	public function update_put($id)
	{
        $data = array( 
			//แก้ไขชื่อ Field ของตารางข้อมูล
			'username' => $this->put('username'),
			'password' => $this->put('password'), 
			'firstName' => $this->put('firstName'), 
			'lastName' => $this->put('lastName'),
			'email' => $this->put('email'),
			'mobilePhone' => $this->put('mobilePhone'), 
			'birthDate' => $this->put('birthDate'), 
			'gender' => $this->put('gender')=='1'? 1 : 0, 
			'empType' => $this->put('empType'), 
			'isActive' => $this->put('isActive')=='1'? 1 : 0
		); 	
		//แก้ไขชื่อ Class ของ Model เช่น จาก EmployeeModel เป็น ProductModel
		if($this->EmployeeModel->update($data,$id)){
			$this->response(array(
				'message' => 'success', 
				'status' => 'true'));
		}else{
			$this->response(array(
				'message' => 'unsuccess', 
				'status' => 'false'));
		}
	}

	public function delete_delete($id)
	{
		//แก้ไขชื่อ Class ของ Model เช่น จาก EmployeeModel เป็น ProductModel
		if($this->EmployeeModel->delete($id)){
			$this->response(array(
				'message' => 'success', 
				'status' => 'true'));
		}else{
			$this->response(array(
				'message' => 'unsuccess', 
				'status' => 'false'));
		}
	}

	
	public function login_post()
	{
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		//แก้ไขชื่อ Class ของ Model เช่น จาก EmployeeModel เป็น ProductModel
		$data=$this->EmployeeModel->selectUser($username,$password);

		if(!empty($data)){
			$this->response(array(
				'message' => 'success', 
				'status' => 'true', 
				'data' => $data));
		}else{
			$this->response(array(
				'message' => 'unsuccess', 
                                'status' => 'false'));
		}
	}
}