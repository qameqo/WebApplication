<div class="container">
	<div class="photo mt-5 mb-3" style="text-align: center;">
		<img src="<?php echo base_url('./pic/logo55.png'); ?>"
			style="background-color: #5DBCD2; border-radius: 10px ; margin-left: 1em ; margin-right: 1em ;" />
	</div>
	<div class="row justify-content-center">
		<div class="col-sm-8 shadow p-3 mb-5 bg-white rounded"
			style="background-color: #FFFFFF; border-radius: 10px ; margin-left: 1em ; margin-right: 1em ;">
			<form class="form-signin" id="carregister" name="carregister" method="post"
				action="">
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
						<H5>&nbsp;- รูปรถยนต์ 5 รูป ภายนอกรถด้านหน้า หลัง ซ้าย ขวา และภายในตัวรถ</H5>
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
						<H5>4.รอการอนุมัติผ่าน</H5>
						</div>
					</div>
                    <br>
					<div class="row">
					<div class="col-sm">
						<H5>5.ระบุวันส่งมอบรถ</H5>
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
                         
                        <a class="btn btn-danger" style="background-color: #F60200;" href="<?php echo base_url("Owner/show/".$ids);?>">ดำเนินการต่อ</a>
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
			</form>
		</div>
	</div>
</div>

