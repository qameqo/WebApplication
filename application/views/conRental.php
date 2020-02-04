<div class="container">
	<div class="photo mt-5 mb-3" style="text-align: center;">
		<img src="<?php echo base_url('./pic/logo55.png'); ?>"
			style="background-color: #5DBCD2; border-radius: 10px ; margin-left: 1em ; margin-right: 1em ;" />
	</div>
	<div class="row justify-content-center">
		<div class="col-sm-5 shadow p-3 mb-5 bg-white rounded"
			style="background-color: #FFFFFF; border-radius: 10px ; margin-left: 1em ; margin-right: 1em ;">
			<?php $this->db->where('id_Status', 1);
                              $query = $this->db->get('Status_car');
                              $qq = $query->result_array();
							  ?>
                              <?php foreach($qq as $data){ ?>
                           <?php $ids = $data['id_Status']; ?>
			<form class="form-signin" id="carrental" name="carrental" method="post"
				action="<?php echo base_url("Rental");?>">
				<?php } ?>
				<H4>ขั้นตอนการเช่ารถยนต์</H4>
				<br>
				<div class="row">
					<div class="col-sm">
						<H6>1.เลือกรถยนต์</H6>
						</div>
					</div>
					
                    <div class="row">
					<div class="col-sm">
						<H6>2.เลือกวันที่ที่ต้องการเช่า</H6>
						</div>
					</div>
                    
                    <div class="row">
					<div class="col-sm">
						<H6>3.เลือกประกันภัย</H6>
						</div>
					</div>
                    
                    <div class="row">
					<div class="col-sm">
						<H6>4.อัปโหลดรูปภาพหลักฐาน</H6>
						<H6>&nbsp;- บัตรประชาชน หรือ หนังสือเดินทาง</H6>
						<H6>&nbsp;- ใบขับขี่ หรือ ใบขับขี่ระหว่างประเทศ</H6>
						</div>
					</div>
                    
                    <div class="row">
					<div class="col-sm">
						<H6>5.ยืนยันการจอง</H6>
						</div>
					</div>
                    
                    <div class="row">
					<div class="col-sm">
						<H6>6.อัปโหลดรูปภาพใบเสร็จการโอนเงินมัดจำ</H6>
						</div>
					</div>
                    
					<div class="row">
					<div class="col-sm">
						<H6>7.รอการอนุมัติการเช่า</H6>
						</div>
					</div>

					<div class="row">
					<div class="col-sm">
				
				
					<input type="checkbox" name="i_accept" id="readd" onclick="ok();" onkeypress="ok();"/>
					 <span style="color:red;">ยอมรับเงื่อนไขการเช่า</span>&nbsp;
						<a type="button" data-toggle="modal" style="color:red;"
							data-target="#modal-default"><i class="ni ni-single-copy-04" style="color:black;">&nbsp;<u>อ่านเงื่อนไข</U></i></a>
						<div class="modal fade" id="modal-default" tabindex="-1" role="dialog"
							aria-labelledby="modal-default" aria-hidden="true">
							<div class="modal-dialog modal- modal-dialog-centered modal-" role="document">
								<div class="modal-content">
									<div class="modal-header">
										<h6 class="modal-title" id="modal-title-default">เงื่อนไขการเช่ารถยนต์</h6>
										<button type="button" class="close" data-dismiss="modal" aria-label="Close">
											<span aria-hidden="true">×</span>
										</button>
									</div>

									<div class="modal-body">

										<p>1.</p>
										<p>2.</p>
										<p>3.</p>
										<p>4.</p>
										<p>5.</p>
										<p>6.</p>
										<p>7.</p>
										<p>8.</p>
										<p>9.</p>
									</div>

									<div class="modal-footer">

										<button type="button" class="btn btn-link  ml-auto"
											data-dismiss="modal">ปิด</button>
									</div>

								</div>
							</div>
						</div>
					</div>
					</div>
					
					<br>
                    <div class="row">
					<div class="col-sm">
					<?php $this->db->where('id_Status', 1);
                              $query = $this->db->get('Status_car');
                              $qq = $query->result_array();
							  ?>
                              <?php foreach($qq as $data){ ?>
                           <?php $ids = $data['id_Status']; ?>
                         
                        <input type="submit" class="btn btn-danger" id="accc" style="background-color: #F60200;" 
						disabled="disabled" value="ดำเนินการต่อ"/>
							  <?php } ?>
						</div>
					</div>


					<!-- <input type="hidden" class="form-control" id="type" value="CarOwner">
				<div class="fileinput fileinput-new " data-provides="fileinput">
					<div>
							<label class="bmd-label-floating">image_DriverLicense</label>
							<input type="file" name="..." />
					</div>
				</div> -->
			
		</div>
	</div>
</div>
</form>

<script language="javascript" type="text/javascript">
function ok() {
with (carrental) {
if (readd.checked)
accc.disabled = false;
else
accc.disabled = true;
}
}
</script>