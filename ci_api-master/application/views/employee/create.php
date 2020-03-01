        <h3>Add Data</h3>
         
         <?php 
            echo form_open('employee/save_create');
            
            echo form_label('First Name'); 
            echo form_input(array('class'=>'form-control','name'=>'firstName')); 
            echo "<br/>"; 
            
            echo form_label('Last Name'); 
            echo form_input(array('class'=>'form-control','name'=>'lastName')); 
            echo "<br/>"; 
            
            echo form_submit(array('id'=>'submit','value'=>'Add','class'=>'btn btn-success')); 
            
            echo anchor(base_url().'index.php/employee', 'Back',array('class'=>'btn btn-default'));
            
            echo form_close(); 
         ?>