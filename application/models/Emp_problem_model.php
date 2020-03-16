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
        // $this->db->join('Rental', 'Rental.idRental = Problem.idRental');
        
        $query = $this->db->get();

        return $query->result();
        
    }

    public function show($id_Problem)
    {
        // $query = $this->db->get('Carregis');
        
        $this->db->select('*');
        $this->db->from('Problem');
        $this->db->join('Type_Problem', 'Problem.id_Type_Problem = Type_Problem.id_Type_Problem');
        // $this->db->join('Rental', 'Rental.idRental = Problem.idRental');

        $this->db->where('id_Problem', $id_Problem);
        
        $query = $this->db->get();

        return $query->result();
        
    }

    public function hand_over($id_Problem)
    {
        $this->db->select('*');
        $this->db->from('Employee');
        $this->db->from('Problem');

        $this->db->where('Problem.id_Problem', $id_Problem);

        $query = $this->db->get();
        return $query->result();
    }

    public function work()
    {
        // print_r($_POST);
        
        // exit;

        $this->db->where('id_Problem', $this->input->post('id_Problem'));
       
        $data = array( 
            'id_Employee' => $this->input->post('id_Employee'),
        );

        $query=$this->db->update('Problem',$data);

        //--------------------------------------------------------------------

        $this->db->where('id_Employee', $this->input->post('id_Employee'));
       
        $data_2 = array( 
            'Status' => 0,
        );

        $query_2=$this->db->update('Employee',$data_2);

        //--------------------------------------------------------------------

        $this->db->where('idRental', $this->input->post('idRental'));
       
        $data_3 = array( 
            'id_status' => 4,
        );

        $query_3=$this->db->update('Rental',$data_3);

        //---------------------------------------------------------------------

        $query_3 = $this->db->query('SELECT * FROM Employee WHERE id_Employee = '.$this->input->post('id_Employee'));

        $qq = $query_3->result_array();

        foreach ($qq as $data) {

            if($data['id_position'] == '2')
            {  
                echo "<script>
                    alert('ส่งมอบงานซ่อมเรียบร้อย');
                    window.location.href='". base_url()."Emp_problem';
                    </script>";  
            }
            else 
            {
                echo "<script>
                    alert('ส่งมอบงานประกันอุบัติเหตุเรียบร้อย');
                    window.location.href='". base_url()."Emp_problem/index_2';
                    </script>";
            }
        }
    }
}
?>