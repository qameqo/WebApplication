<?php
class Manager_emp_model extends CI_Model {

    public function add_emp()
    {
         // print_r($_POST);
        
        // exit;

        $data = array(
            'Email' => $this->input->post('Email'),
            'Password' => $this->input->post('Password'),
            'Fname' => $this->input->post('Fname'),
            'Lname' => $this->input->post('Lname'),
            'Address' => $this->input->post('Address'),
            'Tel' => $this->input->post('Tel'),
            'Status' => $this->input->post('Status'),
            'Row' => $this->input->post('Row')

        );

        $query=$this->db->insert('Employee',$data);

        // if($query)
        // {
        //     echo 'add ok';
        // }
        // else
        // {
        //     echo 'add false';
        // }

        redirect('Manager_emp');
    }

    public function show_emp()
    {
        $query = $this->db->get('Employee');
        return $query->$result();
        
    }
}
?>