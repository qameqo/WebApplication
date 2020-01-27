 <style>.fileUpload {
    position: relative;
    overflow: hidden;
    
}
.fileUpload input.upload {
    position: absolute;
    top: 0;
    right: 0;
    margin: 0;
    padding: 0;
    font-size: 20px;
    cursor: pointer;
    opacity: 0;
    filter: alpha(opacity=0);
}</style>

		<form class="form-upload" id="owner2" name="owner2" method="post" enctype="multipart/form-data"
			action="<?php echo base_url('Owner2/up/'.$id.'/'.$idc); ?>">
			<div class="col-md-13 text-center"><br>

				
				<h4 style="color:#000000">อัปโหลดรูปรถยนต์</h4>
				
				<div class="row justify-content-center">
					<div class="col-sm-8 shadow p-4 mb-4 bg-white rounded">
						<div class="container mb-5">
						<?php 
						
						$this->db->where( 'idCarregis',$idc);
						$query = $this->db->get('Images');
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
									<?php if(!empty($qi))
									{
										
									}else
									 ?>
										<?php foreach($qi as $data){
											
							 				?><tr>
											<td><img src="<?php echo base_url('./img/'.$data['Name_image']);?>"
													style="width: 50px; height: 50px;" /></td>

											<td><a href="<?php echo site_url('Owner2/del/'.$data['id_image'].'/'.$id.'/'.$idc);?>"
													onclick="return confirm('คุณต้องการลบหรือไม่ ?');"
													class="btn btn-danger btn-sm">ลบ</a></td>
										</tr>
										<?php 
							} ?>
										
									</tbody>
								</table>

							</div>
							<div class="row">
								<div class="col-sm">
									<H5 style="color: red;">* รูปแรกจะเป็นรูปโปรไฟล์รถ</H5>
								</div>
							</div>
							<div class="row">
								<div class="col-sm">
								
								</div>
							</div>
							<br>
							<div class="row">
							<div class="col-sm text-Right">
								<div class="fileUpload btn btn-lg" style="background-color: #FFC125">
								<span style="color: white;">+ เพิ่มรูป</span>
										<label for="file"><strong></strong><span class="box__dragndrop"></label>
										<input class="upload" type="file" name="file" id="piccar1" required/>
								</div>
							</div>
							<div class="col-sm text-left">
								<div class="box__input">
									<button class="btn btn-primary btn-lg" type="submit"><span style="color: white;">อัปโหลด</span></button>
								</div>
							</div>
							</div>
							<!-- <input type="hidden" value="<?php echo $id; ?>" name="idCarregis" id="idCarregis" /> -->

							
							<br>
						</div>
					</div>
					</div>
		</form>
		<form class="form-upload" id="owner2" name="owner2" method="post" enctype="multipart/form-data"
			action="<?php echo base_url('Owner2/up2/'.$id.'/'.$idc); ?>">
		<div class="col-md-13 text-center"><br>
				<h4 style="color:#000000">อัปโหลดรูปเอกสารรถยนต์</h4>
		<div class="row justify-content-center">
		<div class="col-sm-8 shadow p-3 mb-5 bg-white rounded"
			style="background-color: #FFFFFF; border-radius: 10px ; margin-left: 1em ; margin-right: 1em ;">
			<div class="container mb-5">
						<?php 
						
						$this->db->where( 'idCarregis',$idc);
						$query = $this->db->get('Images2', 3);
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
									<?php if(!empty($qi))
									{
										
									}else
									 ?>
										<?php foreach($qi as $data){
											
							 				?><tr>
											<td><img src="<?php echo base_url('./img2/'.$data['Name_image2']);?>"
													style="width: 50px; height: 50px;" required/></td>

											<td><a href="<?php echo site_url('Owner2/del2/'.$data['id_image2'].'/'.$id.'/'.$idc);?>"
													onclick="return confirm('คุณต้องการลบหรือไม่ ?');"
													class="btn btn-danger btn-sm">ลบ</a></td>
										</tr>
										<?php 
							} ?>
										
									</tbody>
								</table>

							</div>
							<div class="row">
								<div class="col-sm">
								<a class="badge badge-secondary" style="height:40px;" type="button" href="#" data-toggle="modal"
								data-target="#modal-default"> <p style="color:red;"><u>เอกสารหลักฐานยืนยันรถยนต์</u></p></a>
							<div class="modal fade" id="modal-default" tabindex="-1" role="dialog"
								aria-labelledby="modal-default" aria-hidden="true">
								<div class="modal-dialog modal- modal-dialog-centered modal-" role="document">
									<div class="modal-content">

										<div class="modal-header">
											<h6 class="modal-title" id="modal-title-default">เอกสารสำหรับการลงทะเบียนรถยนต์
											</h6>
											<button type="button" class="close" data-dismiss="modal" aria-label="Close">
												<span aria-hidden="true">×</span>
											</button>
										</div>

										<div class="modal-body text-left">
											<p>1.ใบขับขี่ผู้ลงทะเบียน</p>
											<img src="<?php echo base_url('./pic_tee/ใบขับขี่.jpg');?>" alt="ภาพตัวอย่าง" height="42" width="55"/>
											<p>2.พ.ร.บ.</p>
											<img src="<?php echo base_url('./pic_tee/พรบ.jpg');?>" alt="ภาพตัวอย่าง" height="42" width="55"/>
											<p>3.เล่มทะเบียนรถยนต์</p>
											<img src="<?php echo base_url('./pic_tee/เล่มทะเบียนรถ.jpg');?>" alt="ภาพตัวอย่าง" height="42" width="55"/>
											<p style="color:red;">กรุณาอัปโหลดรูปภาพตามจำนวนหลักฐาน</p>
										</div>
										<div class="modal-footer">
											<button type="button" class="btn btn-link  ml-auto"
												data-dismiss="modal">ปิด</button>
										</div>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-sm">
									
								</div>
							</div>
							<br>
							<div class="row">
							<div class="col-sm text-Right">
								<div class="fileUpload btn btn-lg" style="background-color: #FFC125">
								<span style="color: white;">+ เพิ่มรูป</span>
										<label for="file"><strong></strong><span class="box__dragndrop"></label>
										<input class="upload" type="file" name="file" id="piccar1" required/>
								</div>
							</div>
							<div class="col-sm text-left">
								<div class="box__input">
									<button class="btn btn-primary btn-lg" type="submit"><span style="color: white;">อัปโหลด</span></button>
								</div>
							</div>
							</div>
							<!-- <input type="hidden" value="<?php echo $id; ?>" name="idCarregis" id="idCarregis" /> -->

							
							<br>
							<div class="col-sm">
								<div class="box__input">
									<a class="btn" style="background-color: #F60200;" href="<?php echo base_url('Pricecar/pri/'.$id.'/'.$idc); ?>"
										onclick="return confirm('ยืนยันการอัปโหลด ?');">
										<span style=" color: white;">ยืนยันการอัปโหลด</span></a>
				</div>
			</div>
		</div>
	</div>
</form>


		