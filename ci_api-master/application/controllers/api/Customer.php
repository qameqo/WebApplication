<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Customer extends \Restserver\Libraries\REST_Controller {
	function __construct(){
		parent:: __construct();
		$this->load->model('CustomerModel');
		$this->load->database(); 
	}

	public function index_get($id=-1)
	{
		//$customerID = $this->get("customerID");	
		if($id!=-1){
			$data=$this->CustomerModel->selectOne($id);
		}else{
			$query = $this->db->get("customer"); 
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
			'username' => $this->post('username'),
			'password' => $this->post('password'), 
			'customerID' => $this->post('customerID'),
			'firstName' => $this->post('firstName'), 
			'lastName' => $this->post('lastName'),
			'email' => $this->post('email'),
			'mobilePhone' => $this->post('mobilePhone'), 
			'birthDate' => $this->post('birthDate'), 
			'gender' => $this->post('gender'), 
			'customerType' => $this->post('customerType'), 
			'isActive' => $this->post('isActive')=='1'? 1 : 0
			
		); 		
		if($this->CustomerModel->insert($data)){
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
		//$customerID = $this->put('customerID');
        $data = array( 
			'username' => $this->put('username'),
			'password' => $this->put('password'), 
			'firstName' => $this->put('firstName'), 
			'lastName' => $this->put('lastName')
		); 	

		if($this->CustomerModel->update($data,$id)){
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
		if($this->CustomerModel->delete($id)){
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
		$data=$this->CustomerModel->selectUser($username,$password);

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