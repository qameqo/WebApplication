<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Manager_emp_model extends CI_Model 
{
    public function add_emp()
    {
        // print_r($_POST);
        
        // exit;

        $Username = $this->input->post('Username');
        $this->db->where('Username', $Username);
        $query = $this->db->get('Employee', 1);
        if($query->num_rows() ==1)
        {
            echo "<script>";
            echo "alert('Username นี้มีผู้ใช้แล้ว');";
            echo "window.location.href = '". base_url(). "Manager_emp ';";
            echo "</script>";
            
            
        }else
        {
            $data = array(
                'Username' => $this->input->post('Username'),
                'Password' => $this->input->post('Password'),
                'F_Name' => $this->input->post('F_Name'),
                'L_Name' => $this->input->post('L_Name'),
                'Address' => $this->input->post('Address'),
                'Tel' => $this->input->post('Tel'),
                'Row' => $this->input->post('Row')
    
            );
    
            $query=$this->db->insert('Employee',$data);
    
            echo "<script>";
            echo "alert('บันทึกข้อมูลเรียบร้อย');";
            echo "window.location.href = '". base_url(). "Manager_emp ';";
            echo "</script>";
    
       
        }

        
        // redirect('Manager_emp');
    }

    public function edit_emp()
    {
        // print_r($_POST);
        
        // exit;

        $this->db->where('id_Employee', $this->input->post('id_Employee'));

        $data = array(
            'Username' => $this->input->post('Username'),
            'Password' => $this->input->post('Password'),
            'F_Name' => $this->input->post('F_Name'),
            'L_Name' => $this->input->post('L_Name'),
            'Address' => $this->input->post('Address'),
            'Tel' => $this->input->post('Tel'),
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

        echo "<script>";
        echo "alert('แก้ไขข้อมูลเรียบร้อย');";
        echo "window.location.href = '". base_url(). "Manager_emp ';";
        echo "</script>";

        // redirect('Manager_emp');
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

        echo "<script>";
        echo "alert('ลบข้อมูลเรียบร้อย');";
        echo "window.location.href = '". base_url(). "Manager_emp ';";
        echo "</script>";

        // redirect('Manager_emp');
        
        
    }
}
?>