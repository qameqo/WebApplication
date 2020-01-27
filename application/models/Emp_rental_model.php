<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Emp_rental_model extends CI_Model 
{
    public function show_rental()
    {
        // $query = $this->db->get('Carregis');
        
        $this->db->select('*');
        $this->db->from('Rental');
        $this->db->join('RentalDetail', 'Rental.idRental = RentalDetail.idRent');
        $this->db->join('Carregis', 'RentalDetail.idCarregis = Carregis.idCarregis');
        $this->db->join('Member', 'Rental.idMember = Member.id_Member');
        $this->db->join('Status_car', 'Rental.idstatus = Status_car.id_Status');

        $query = $this->db->get();

        return $query->result();
        
    }

    public function read_rental($idRental)
    {
        $this->db->select('*');
        $this->db->from('Rental');
        $this->db->join('RentalDetail', 'Rental.idRental = RentalDetail.idRent');
        $this->db->join('Carregis', 'RentalDetail.idCarregis = Carregis.idCarregis');
        $this->db->join('Member', 'Rental.idMember = Member.id_Member');
        $this->db->join('Status_car', 'Rental.idstatus = Status_car.id_Status');
        $this->db->join('Images3', 'Rental.idRental = Images3.idrent');

        $this->db->where('idRental', $idRental);
        $query = $this->db->get();

        if ($query->num_rows() > 0) 
        {
            $data = $query->row();
            return $data;
        }
       return FALSE;
    }
}
?>