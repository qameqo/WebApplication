		<form class="form-upload" id="owner2" name="owner2" method="post" enctype="multipart/form-data"
			action="<?php echo base_url(); ?>Owner2/up">
			<div class="col-md-13 text-center"><br>
				<h1 class="h1" style="color:#000000">อัปโหลดรูป</h1>
				<div class="row justify-content-center">
					<div class="col-sm-8 shadow p-4 mb-4 bg-white rounded">
						<div class="container mb-5">
						<?php 
						$this->db->where('idCarregis', $id);
						$query = $this->db->get('Images', 7);
						$qi = $query->result_array();
						?>
							<div class="table-responsive">
								<table id="employee_data" class="table table-striped table-bordered text-center">
									<thead>
										<tr>
											<th data-column-id="Name_image">รูปภาพ</th>
											<th data-column-id="Action">ลบ</th>
										</tr>
									</thead>
									<tbody>
										<?php foreach($qi as $data){
								
							 				?><tr>
											<td><img src="<?php echo base_url('./pic/'.$data['Name_image']);?>"
													style="width: 50px; height: 50px;" /></td>

											<td><a href="<?php //echo site_url('Manager_emp/del_emp/').$rs->id_Employee; ?>"
													onclick="return confirm('คุณต้องการลบหรือไม่ ?');"
													class="btn btn-danger btn-sm">Delete</a></td>
										</tr>
										<?php 
							} ?>
										<?php //} ?>
									</tbody>
								</table>

							</div>
							<div class="row">
								<div class="col-sm">
									<H5>รูปรถยนต์ 5 รูป รูปพ.ร.บ. 1 รูป และรูปเล่มทะเบียนรถยนต์ 1 รูป</H5>
								</div>
							</div>
							<div class="row">
								<div class="col-sm">
									กรุณาอัปโหลดรูปภาพตามจำนวนที่ระบุ
								</div>
							</div>
							<div class="col-sm">
								<div class="box__input">
									<span class="btn btn-raised btn-white btn-file">
										<label for="file"><strong></strong><span class="box__dragndrop"></label>
										<input class="box__file" type="file" name="file" id="piccar1" required />
									</span>
								</div>
							</div>
							<span>
							</span>
							<br>
							<input type="hidden" value="<?php echo $id; ?>" name="idCarregis" id="idCarregis" />

							<div class="col-sm">
								<div class="box__input">
									<button class="btn btn-Danger btn-lg" type="submit">อัปโหลด</button>
								</div>
							</div>
							<br>
							<div class="col-sm">
								<div class="box__input">
									<a class="btn btn-Danger " href="<?php echo base_url('Dataregis'); ?>"
										onclick="return confirm('ยืนยันการลงทะเบียน ?');">
										<span style=" color: white;">ยืนยันการลงทะเบียน</span></a>
								</div>
							</div>
						</div>
					</div>
		</form>