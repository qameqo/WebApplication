<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Manager_emp_model extends CI_Model 
{
    public function add_emp()
    {
        // print_r($_POST);
        
        // exit;

        $data = array(
            'Email' => $this->input->post('Email'),
            'Password' => $this->input->post('Password'),
            'FName' => $this->input->post('FName'),
            'LName' => $this->input->post('LName'),
            'Address' => $this->input->post('Address'),
            'Tel' => $this->input->post('Tel'),
            'Status' => $this->input->post('Status'),
            'Row' => $this->input->post('Row')

        );

        $query=$this->db->insert('Employee',$data);

        redirect('Manager_emp');
    }

    public function edit_emp()
    {
        // print_r($_POST);
        
        // exit;

        $this->db->where('id_Employee', $this->input->post('id_Employee'));

        $data = array(
            'Email' => $this->input->post('Email'),
            'Password' => $this->input->post('Password'),
            'FName' => $this->input->post('FName'),
            'LName' => $this->input->post('LName'),
            'Address' => $this->input->post('Address'),
            'Tel' => $this->input->post('Tel'),
            'Status' => $this->input->post('Status'),
            'Row' => $this->input->post('Row')
        );

        
        $query=$this->db->update('Employee',$data);

        // if($query)
        // {
        //     echo 'edit ok';
        // }
        // else
        // {
        //     echo 'false';
        // }

        redirect('Manager_emp');
    }

    public function show_emp()
    {
        $query = $this->db->get('Employee');
        return $query->result();
        
    }

    public function read($id_Employee)
    {
        $this->db->select('*');
        $this->db->from('Employee');
        $this->db->where('id_Employee', $id_Employee);
        $query = $this->db->get();

        if ($query->num_rows() > 0) 
        {
            $data = $query->row();
            return $data;
        }
        return FALSE;
    }

    public function del_emp($id_Employee)
    {
        $this->db->delete('Employee',array('id_Employee'=>$id_Employee));

        redirect('Manager_emp');
        
        
    }
}
?>