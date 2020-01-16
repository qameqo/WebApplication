<form action="<?php echo base_url('Dataregis/show'); ?>">
            <div class="col-md-12 text-center"><br>
                <h4 class="" style="color:#000000">ข้อมูลการลงทะเบียนรถยนต์</h4>
                <div class="row justify-content-center">
					<div class="col-sm-10 shadow p-4 mb-4 bg-white rounded">
                    <?php 
                        
                        $this->db->select('*');
                        $this->db->from('Carregis');
                        $this->db->join('Brand', 'Carregis.Brand = Brand.idBrand');
                        $this->db->join('Generation', 'Carregis.id_Gen = Generation.id_Gen');
						$this->db->where('id_Member', $this->session->userdata('ID'));
						$query = $this->db->get();
                        $qq = $query->result_array();
                        
						?>
						<div class="col-md-12 mb-5 text-center">
                        <br>
                <table id="employee_data" class="table table-striped table-bordered text-center" style="width: 1200px;">
                        <thead>
                            <tr>
								<th data-column-id="Name_image" style="width: 150px;">ยี่ห้อ</th>
                                <th data-column-id="Name_image"style="width: 200px;">รุ่น</th>
                                <th data-column-id="Name_image"style="width: 200px;">ทะเบียน</th>
                                <th data-column-id="Name_image"style="width: 350px;">ปีที่ออกรถ</th>
                                <th data-column-id="Name_image"style="width: 300px;">ที่นั่ง</th>
                                <th data-column-id="Name_image"style="width: 100px;">สี</th>
                                <th data-column-id="Name_image"style="width: 320px;">ชนิดเชื้อเพลิง</th>
                                <th data-column-id="Name_image"style="width: 200px;">เกียร์</th>
                                <th data-column-id="Name_image"style="width: 350px;">ปีที่ออกทะเบียน</th>
                                <th data-column-id="Name_image"style="width: 250px;">เลขตัวถัง</th>
                                <th data-column-id="Name_image"style="width: 150px;">สถานะ</th>
                            </tr>
                        </thead>
						<tbody>
                        <?php foreach($qq as $data){
								
                                ?>
							<tr>
								<td><?php echo $data['Name_Brand'];?></td>
								<td><?php echo $data['Name_Gen'];?></td>
                                <td><?php echo $data['License'];?></td>
								<td><?php echo $data['Yearcar'];?></td>
                                <td><?php echo $data['Seat'];?></td>
								<td><?php echo $data['Color'];?></td>
                                <td><?php echo $data['Fuel'];?></td>
								<td><?php echo $data['Gear'];?></td>
                                <td><?php echo $data['Yearlicense'];?></td>
                                <td><?php echo $data['Carbody'];?></td>
                                <td><span class="badge badge-warning"><?php echo $data['Status'];?></span></td>
								<!-- <td>
                                
                                    <a href="<?php echo site_url('Dataregis2') ?>" class="btn btn-success btn-sm">View</a>
                                </td> -->

								</tr>
                                <?php 
							} ?>
						</tbody>
                    </table>
                    </div>
                    </div>
                    </div>
                    </form>