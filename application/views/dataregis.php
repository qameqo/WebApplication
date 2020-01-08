
            <div class="col-md-13 text-center"><br>
                <h4 class="" style="color:#000000">ข้อมูลการลงทะเบียนรถยนต์</h4>
                <div class="row justify-content-center">
					<div class="col-sm-5 shadow p-4 mb-4 bg-white rounded">
                    <?php 
                        
						$this->db->where('id_Member', $this->session->userdata('ID'));
						$query = $this->db->get('Carregis');
                        $qq = $query->result_array();
                        
						?>
						<div class="container mb-5">
                        <br>
                <table id="employee_data" class="table table-striped table-bordered">
                        <thead>
                            <tr>
								<th data-column-id="Name_image" style="width: 150px;">ยี่ห้อ</th>
                                <th data-column-id="Name_image"style="width: 200px;">รุ่น</th>
                                <th data-column-id="Action"style="width: 150px;">Action</th>
                            </tr>
                        </thead>
						<tbody>
                        <?php foreach($qq as $data){
								
                                ?>
							<tr>
								<td><?php echo $data['Brand'];?></td>
								<td><?php echo $data['Generation'];?></td>
								<td>
                                    <a href="<?php echo base_url('Dataregis2');?>" class="btn btn-success btn-sm">View</a>
                                </td>

								</tr>
                                <?php 
							} ?>
						</tbody>
                    </table>
                    </div>
                    </div>
                    </div>
                    </div>