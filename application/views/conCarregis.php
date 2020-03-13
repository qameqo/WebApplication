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
			<form class="form-signin" id="carregister" name="carregister" method="post"
				action="<?php echo base_url("Owner/show/".$ids);?>">
				<?php } ?>
				<H4>ขั้นตอนการลงทะเบียนรถยนต์</H4>
				<br>
				<div class="row">
					<div class="col-sm">
						<H6>1.กรอกข้อมูลรถยนต์</H6>
						</div>
					</div>
					
                    <div class="row">
					<div class="col-sm">
						<H6>2.อัปโหลดรูปภาพ</H6>
						<H6>&nbsp;-รูปรถยนต์ภายนอกรถ 4 ด้านและภายในตัวรถ</H6>
						<H6>&nbsp;-รูปพ.ร.บ. 1 รูป</H6>
						<H6>&nbsp;-รูปเล่มทะเบียนรถยนต์ 1 รูป</H6>
						<H6>&nbsp;-รูปใบขับขี่ 1 รูป</H6>
						</div>
					</div>
                 
                    <div class="row">
					<div class="col-sm">
						<H6>3.ยืนยันราคาที่จะปล่อยเช่า</H6>
						</div>
					</div>
               
                    <div class="row">
					<div class="col-sm">
						<H6>4.รอการอนุมัติ</H6>
						</div>
					</div>
               
					<div class="row">
					<div class="col-sm">
						<H6>5.ระบุวันส่งมอบรถ</H6>
						</div>
					</div>

					<div class="row">
					<div class="col-sm">
				
				
					<input type="checkbox" name="i_accept" id="read" onclick="ok();" onkeypress="ok();"/>
					 <span style="color:red;">ยอมรับเงื่อนไขการลงทะเบียน</span>&nbsp;
						<a type="button" data-toggle="modal" style="color:red;"
							data-target="#modal-default"><i class="ni ni-single-copy-04" style="color:black;">&nbsp;<u>อ่านเงื่อนไข</u></i></a>
						<div class="modal fade" id="modal-default" tabindex="-1" role="dialog"
							aria-labelledby="modal-default" aria-hidden="true" >
							<div class="modal-dialog modal- modal-dialog-centered modal-" role="document">
								<div class="modal-content">
									<div class="modal-header">
										<h6 class="modal-title" id="modal-title-default">เงื่อนไขการลงทะเบียนรถยนต์</h6>
										<button type="button" class="close" data-dismiss="modal" aria-label="Close">
											<span aria-hidden="true">×</span>
										</button>
									</div>

									<div class="modal-body">

										<p>1.ต้องมีอายุ 21 ปีขึ้นไปหากอายุไม่ถึงจะไม่อนุมัติการลงทะเบียน</p>
										
										<p>2.หากข้อมูลเอกรถยนต์ไม่ครบถ้วนจะไม่อนุมัติการลงทะเบียน </p>
									
										<p>3.หากข้อมูลรถยนต์และเอกสารรถยนต์ไม่สอดคล้องกันจะไม่อนุมัติการลงทะเบียน</p>
										
										<p>4.ให้กำหนดส่งรถภายใน 3 วัน</p>
									
										<p>5.หากไม่กำหนดวันส่งรถหลังจากอนุมัติเกิน 3 วันการลงทะเบียนจะถูกยกเลิก</p>
									
										<p>6.หากกำหนดวันส่งรถและไม่มาส่งรถการลงทะเบียนจะถูกยกเลิก</p>
									
										<p>7.เมื่อรถถูกเช่าจะได้รายได้จากราคารถในรายการเช่านั้น 70% โดยจะโอนไปยังบัญชีที่ระบุไว้ในการลงทะเบียนรถคนนั้น</p>
									
										<p>8.ประกันทางร้านจะไม่คุ้มครองการยักยอกโดยผู้เช่า</p>
									
										<p>9.ระยะเวลาสัญญา 90 วันต่อรถ 1 คัน </p>
									
										<p>10.แจ้งขอยกเลิกการปล่อยเช่าได้เมื่อสถานะรถเป็นพร้อม</p>
										
										<p>11.รถต้องมีประกันติดรถเป็นประกันชั้น 1 เท่านั้น</p>
										
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
                         
                        <input type="submit" class="btn btn-danger" id="acc" style="background-color: #F60200;" 
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
with (carregister) {
if (read.checked)
acc.disabled = false;
else
acc.disabled = true;
}
}
</script>