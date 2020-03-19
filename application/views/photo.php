
	<?php 
						
						// $this->db->where( 'id_Problem', 94);
						$query = $this->db->get('Images4');
						$qi = $query->result_array();
						?>
                        
                        
 <table id="employee_data" class="table table-striped table-bordered text-center">
 							<thead>
 								<tr>
 									<th data-column-id="Name_image">รูปภาพ</th>
 									
 								</tr>
 							</thead>
 							<tbody>
 								<?php if(!empty($qi))
									{
										
									}else
									 ?>
 								<?php foreach($qi as $data){
											
							 				?><tr>
 									<td><img src="<?php echo base_url('./img4/'.$data['Name_image4']);?>"
 											style="width: 50px; height: 50px;" /></td>

 								
 								</tr>
 								<?php 
							} ?>

 							</tbody>
 						</table>

                     

                       
