<div class="container">
	<div class="photo mt-5 mb-3" style="text-align: center;">
		<img src="<?php echo base_url('./pic/logo55.png'); ?>"
			style="background-color: #5DBCD2; border-radius: 10px ; margin-left: 1em ; margin-right: 1em ;" />
	</div>
	<div class="row justify-content-center">
		<div class="col-sm-8 shadow p-3 mb-5 bg-white rounded"
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
						<H5>1.กรอกข้อมูลรถยนต์</H5>
						</div>
					</div>
					<br>
                    <div class="row">
					<div class="col-sm">
						<H5>2.อัปโหลดรูปภาพ</H5>
						<H5>&nbsp;- รูปรถยนต์ภายนอกรถด้านหน้า หลัง ซ้าย ขวา และภายในตัวรถ</H5>
						<H5>&nbsp;- รูปพ.ร.บ. 1 รูป</H5>
						<H5>&nbsp;- รูปเล่มทะเบียนรถยนต์ 1 รูป</H5>
						<H5>&nbsp;- รูปใบขับขี่ 1 รูป</H5>
						</div>
					</div>
                    <br>
                    <div class="row">
					<div class="col-sm">
						<H5>3.ยืนยันราคาที่จะปล่อยเช่า</H5>
						</div>
					</div>
                    <br>
                    <div class="row">
					<div class="col-sm">
						<H5>4.รอการอนุมัติ</H5>
						</div>
					</div>
                    <br>
					<div class="row">
					<div class="col-sm">
						<H5>5.ระบุวันส่งมอบรถ</H5>
						</div>
					</div>

					<div class="row">
					<div class="col-sm">
				
					<br>
					<input type="checkbox" name="i_accept" id="read" onclick="ok();" onkeypress="ok();"/>
					 <span style="color:red;">ยอมรับเงื่อนไขการลงทะเบียน</span>&nbsp;
						<a type="button" data-toggle="modal" style="color:red;"
							data-target="#modal-default"><i class="ni ni-single-copy-04" style="color:black;"></i></a>
						<div class="modal fade" id="modal-default" tabindex="-1" role="dialog"
							aria-labelledby="modal-default" aria-hidden="true">
							<div class="modal-dialog modal- modal-dialog-centered modal-" role="document">
								<div class="modal-content">
									<div class="modal-header">
										<h6 class="modal-title" id="modal-title-default">เงื่อนไขการลงทะเบียน</h6>
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