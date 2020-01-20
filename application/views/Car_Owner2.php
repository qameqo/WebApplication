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
						$query = $this->db->get('Images', 8);
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
									<H5 style="color: red;">* รูปรถยนต์ 5 รูป ภายนอกด้านหน้า หลัง ซ้าย ขวา และภายในตัวรถ</H5>
								</div>
							</div>
							<div class="row">
								<div class="col-sm">
									กรุณาอัปโหลดรูปภาพตามจำนวนที่ระบุ
								</div>
							</div>
							<br>
							<div class="row">
							<div class="col-sm text-Right">
								<div class="fileUpload btn btn-lg" style="background-color: #FFC125">
								<span style="color: white;">+ เพิ่มรูป</span>
										<label for="file"><strong></strong><span class="box__dragndrop"></label>
										<input class="upload" type="file" name="file" id="piccar1" required />
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
											<td><img src="<?php echo base_url('./img2/'.$data['Name']);?>"
													style="width: 50px; height: 50px;" /></td>

											<td><a href="<?php echo site_url('Owner2/del2/'.$data['id'].'/'.$id.'/'.$idc);?>"
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
									<H5 style="color: red;">* รูปใบขับขี่ 1 รูป พ.ร.บ. 1 รูป เล่มทะเบียนรถ 1 รูป</H5>
								</div>
							</div>
							<div class="row">
								<div class="col-sm">
									กรุณาอัปโหลดรูปภาพตามจำนวนที่ระบุ
								</div>
							</div>
							<br>
							<div class="row">
							<div class="col-sm text-Right">
								<div class="fileUpload btn btn-lg" style="background-color: #FFC125">
								<span style="color: white;">+ เพิ่มรูป</span>
										<label for="file"><strong></strong><span class="box__dragndrop"></label>
										<input class="upload" type="file" name="file" id="piccar1" required />
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


		