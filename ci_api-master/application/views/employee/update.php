        <h3>Edit Data</h3>
         
         <?php 
         
            echo form_open('employee/save_update');
            
            echo form_hidden('id',$result[0]->empID); 
                
            echo form_label('First Name'); 
            echo form_input(array('class'=>'form-control','name'=>'firstName','value'=>$result[0]->firstName)); 
            echo "<br/>"; 
            
            echo form_label('Last Name'); 
            echo form_input(array('class'=>'form-control','name'=>'lastName','value'=>$result[0]->lastName)); 
            echo "<br/>"; 
            
            echo form_submit(array('id'=>'submit','value'=>'Save Edit','class'=>'btn btn-warning')); 
            
            echo anchor(base_url().'index.php/customer', 'Back',array('class'=>'btn btn-default'));
 
            echo form_close(); 
         ?>