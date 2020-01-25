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
			action="<?php echo base_url('Deposit/pay/'.$idr);?>">
		<div class="col-md-13 text-center"><br>
		<div class="row justify-content-center">
            <div class="col-sm-4 shadow p-3 mb-5 bg-white rounded">
            <h4 style="color:#000000">ข้อมูลราคาเช่า</h4>
				<?php 
				 $this->db->select('*');
				 $this->db->from('RentalDetail');
				 $this->db->join('Rental', 'RentalDetail.idRent = Rental.idRental');
				 $this->db->where('idRental', $idr);
				 $query = $this->db->get();
				 $qo = $query->result_array();
				 ?>
				 <div class="row">
				 	<div class="col-sm-5 text-right">
					 <span>ราคารถเช่า</span>
					 </div>
					 <div class="col-sm-3 text-right">
					 <?php foreach($qo as $data){?>
				 <span><?php echo $data['PriceCar']; ?></span>
				 <?php } ?>
					 </div>
					 <div class="col-sm-2 text-center"> 
						<span>บาท</span>
					 </div>
				 </div>
				 <div class="row">
				 	<div class="col-sm-5 text-right">
					 <span>ราคาประกันภัย</span>
					 </div>
					 <div class="col-sm-3 text-right">
					 <?php foreach($qo as $data){?>
				 <span><?php echo $data['PriceIns']; ?></span>
				 <?php } ?>
					 </div>
					 <div class="col-sm-2 text-center"> 
						<span>บาท</span>
					 </div>
				 </div>
				 <div class="row">
				 	<div class="col-sm-5 text-right">
					 <span>ราคารวมทั้งหมดรวม vat</span>
					 </div>
					 <div class="col-sm-3 text-right">
					 <?php foreach($qo as $data){?>
				 <span><?php echo $data['totalprice']; ?></span>
				 <?php } ?>
					 </div>
					 <div class="col-sm-2 text-center"> 
						<span>บาท</span>
					 </div>
				 </div>
                 <div class="row">
				 	<div class="col-sm-5 text-right">
					 <span>ค่ามัดจำที่ต้องชำระก่อน</span>
					 </div>
					 <div class="col-sm-3 text-right">
					 <?php foreach($qo as $data){?>
				 <span style="color:red;"><?php echo $data['PriceDe']; ?></span>
				 <?php } ?>
					 </div>
					 <div class="col-sm-2 text-center"> 
						<span>บาท</span>
					 </div>
				 </div>
            </div>
		<div class="col-sm-4 shadow p-3 mb-5 bg-white rounded"
			style="background-color: #FFFFFF; border-radius: 10px ; margin-left: 1em ; margin-right: 1em ;">
            <h4 style="color:#000000">อัปโหลดรูปใบเสร็จโอนเงินมัดจำ</h4>
			<div class="container mb-5">
                        <?php
						$this->db->where( 'idrent',$idr);
						$query = $this->db->get('Images3', 3);
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
											
							 	    ?>
									<tr>
											<td><img src="<?php echo base_url('./img3/'.$data['Name_image3']);?>"
													style="width: 50px; height: 50px;" required/></td>

											<td><a href="<?php echo site_url('Deposit/del/'.$data['id_image3'].'/'.$idr);?>"
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
									<h6 style="color:red;">* รูปใบเสร็จโอนเงินมัดจำ 1 รูป</h6>
									<p style="color:red;">* หากยังไม่ได้อัปรูปหลักฐานยืนยันตัวตนสามารถอัปได้ในขั้นตอนนี้</p>
								</div>
							</div>
							<div class="row">
								<div class="col-sm">
								<a class="badge badge-secondary" style="height:40px;" type="button" href="#" data-toggle="modal"
								data-target="#modal-default"> <p style="color:blue;"><u>เอกสารหลักฐานยืนยันตัวตน</u></p></a>
							<div class="modal fade" id="modal-default" tabindex="-1" role="dialog"
								aria-labelledby="modal-default" aria-hidden="true">
								<div class="modal-dialog modal- modal-dialog-centered modal-" role="document">
									<div class="modal-content">

										<div class="modal-header">
											<h6 class="modal-title" id="modal-title-default">เอกสารสำหรับการเช่ารถยนต์
											</h6>
											<button type="button" class="close" data-dismiss="modal" aria-label="Close">
												<span aria-hidden="true">×</span>
											</button>
										</div>

										<div class="modal-body">
											<p>1.บัตรประชาชน หรือ หนังสือเดินทาง</p>
											<p>2.ใบขับขี่ หรือ ใบขับขี่ระหว่างประเทศ</p>
										</div>
										<div class="modal-footer">
											<button type="button" class="btn btn-link  ml-auto"
												data-dismiss="modal">ปิด</button>
										</div>
									</div>
								</div>
							</div>
							<br>
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
									<a class="btn" type="submit" style="background-color: #F60200;" href="<?php echo base_url('Datarent'); ?>"
										onclick="return confirm('ยืนยันข้อมูลการชำระเงิน');">
										<span style=" color: white;">ยืนยันการอัปโหลด</span></a>
				</div>
			</div>
		</div>
	</div>
</form>