<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Product extends \Restserver\Libraries\REST_Controller {
	function __construct(){
		parent:: __construct(); 
		$this->load->model('ProductModel');
		$this->load->database(); 
	}

	public function index_get($id=-1)
	{
		if($id!=-1){ 
			$data=$this->ProductModel->selectOne($id);
		}else{ 
			$query = $this->db->get("product");  
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
			'productID' => $this->post('productID'),
			'productName' => $this->post('productName'),
			'price' => $this->post('price'), 
			'amount' => $this->post('amount'), 
			'productTypeID' => $this->post('productTypeID')
		); 		 

		if($this->ProductModel->insert($data)){
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
			'productName' => $this->put('productName'),
			'price' => $this->put('price'), 
			'amount' => $this->put('amount'), 
			'productTypeID' => $this->put('productTypeID')
		); 	
		
		if($this->ProductModel->update($data,$id)){
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
		if($this->ProductModel->delete($id)){
			$this->response(array(
				'message' => 'success', 
				'status' => 'true'));
		}else{
			$this->response(array(
				'message' => 'unsuccess', 
				'status' => 'false'));
		}
	}
	public function product_type_count_get()
	{
		$data=$this->ProductModel->product_type_count();
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
	public function product_type_sale_get()
	{
		$data=$this->ProductModel->product_type_sale();
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