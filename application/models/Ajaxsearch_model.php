<?php
class Ajaxsearch_model extends CI_Model
{
	function fetch_data($query)
	{
	$this->db->select('*');
	$this->db->from('Carregis');
	$this->db->join('Brand', 'Brand.idBrand = Carregis.idBrand');
	$this->db->join('Generation', 'Generation.id_Gen = Carregis.id_Gen');
	$this->db->join('Seat', 'Seat.id_Seat = Carregis.id_Seat');
//$this->db->where('Carregis.id_Status', 5);
	
	
	//$this->db->join('Images', 'Images.idCarregis = Carregis.idCarregis');
	//$this->db->where('Images.id_image = (SELECT Images.id_image FROM Images WHERE Images.idCarregis = Carregis.idCarregis LIMIT 1)');
	
		if($query != '')
		{
			$this->db->like('Name_Brand', $query);
			$this->db->or_like('Name_Gen', $query);
		
		}
		$this->db->order_by('idCarregis', 'DESC');
		return $this->db->get();
	}
}
?>