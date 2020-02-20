<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Emp_problem_model extends CI_Model 
{
    public function show_problem()
    {
        // $query = $this->db->get('Carregis');
        
        $this->db->select('*');
        $this->db->from('Problem');
        $this->db->join('Type_Problem', 'Problem.id_Type_Problem = Type_Problem.id_Type_Problem');
        $this->db->join('Rental', 'Rental.idRental = Problem.idRental');
        
        $query = $this->db->get();

        return $query->result();
        
    }
}
?>