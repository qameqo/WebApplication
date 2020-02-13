<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Rental extends CI_Controller {

    public function index()
    {
        $this->load->view('header');
        $this->load->view('Rent');
        $this->load->view('footer');
        
    }
    public function selectcar()
    {

        $start = '2020-02-13';
        $end = '2020-02-14';
        //SELECT Carregis.idCarregis FROM Carregis WHERE Carregis.idCarregis NOT IN 
        //(SELECT Rental.idCarregis FROM Rental where Carregis.idCarregis = Rental.idCarregis)
        $query = $this->db->query("SELECT Rental.*, Images.Name_image, Brand.Name_Brand, Carregis.*, Generation.Name_Gen, Seat.Number_Seat FROM Rental 
        INNER JOIN Carregis on Carregis.idCarregis = Rental.idCarregis
        INNER JOIN Images on Images.idCarregis = Carregis.idCarregis 
        INNER JOIN Brand on Brand.idBrand = Carregis.idBrand 
        INNER JOIN Generation on Generation.id_Gen = Carregis.id_Gen 
        INNER JOIN Seat on Seat.id_Seat = Carregis.id_Seat
        WHERE  (Rental.startDate > '$start' and Rental.startDate > '$end') or 
        (Rental.endDate > '$start' and Rental.endDate > '$end')
        and Images.id_image = (SELECT Images.id_image FROM Images WHERE Images.idCarregis = Carregis.idCarregis LIMIT 1)
        and Rental.id_status='12'
        and Carregis.id_Status='5'");
        $qq = $query->result_array();
        echo $this->db->last_query();
        
        
        header('Content-Type: application/json');
       // echo json_encode($qq);
        
        
        
        
        
    }

}

/* End of file Controllername.php */
 ?>