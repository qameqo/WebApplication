<div class="col-md-13 text-center"><br>
	<h1 class="h1" style="color:#000000">ลงทะเบียนรถยนต์</h1>
	<div class="row justify-content-center">
		<div class="col-sm-8 shadow p-5 mb-5 bg-white rounded">
			<form class="form-signin" id="owner" name="owner" method="post" enctype="multipart/form-data"
				action="<?php echo base_url(); ?>Owner/insert">
				<div class="container">
					<div class="row">
						<div class="col-sm">
							<H2>สเปครถยนต์</H2>
						</div>
					</div>
					<div class="row">
						<div class="col-sm">
							กรุณาใส่รายละเอียดของรถยนต์
						</div>
					</div>
					<div class="row">
						<div class="col-sm mb-1">
							<label for="exampleFormControlSelect1">ยี่ห้อรถ</label>
							<select class="form-control selectpicker" data-style="btn btn-link" name="Brand"
								id="Brand1" onChange="Change_Brand()" required>
								<option value="">เลือกยี่ห้อ</option>
								<?php 
  									$this->db->select('*');
								  $sql = $this->db->get('Brand');
								  $r = $sql->result_array();
								  foreach($sql->result_array()
								  as $he)
								 {
									?>
								<option value="<?php echo $he['idBrand'] ?>"><?php echo $he['Name_Brand'] ?></option>
								<?php }
								  
							?>
							</select>
						</div>
						<div class="col-sm mb-1">
							<label for="exampleFormControlSelect1">รุ่นรถ</label>
							<select class="form-control selectpicker" data-style="btn btn-link" name="Gen"
								id="gen1" required>
								<option value="">เลือกรุ่น</option>
							</select>
						</div>
						<div class="col-sm mb-1">
							<label for="exampleFormControlSelect1">รุ่นปีรถ</label>
							<input class="date-own form-control" placeholder="เลือกรุ่นปีรถ" type="text" id="yearcar" name="caryear" required>
						</div>
					</div>
					<div class="row">
						<div class="col-sm mb-1">
							<label for="exampleFormControlSelect1">จำนวนที่นั่ง</label>
							<select class="form-control selectpicker" data-style="btn btn-link"
								id="exampleFormControlSelect1" name="seat" required>
								<option value="">เลือกจำนวนที่นั่ง</option>
								<option value="2 ที่นั่ง">2 ที่นั่ง</option>
								<option value="3 ที่นั่ง">3 ที่นั่ง</option>
								<option value="4 ที่นั่ง">4 ที่นั่ง</option>
								<option value="5 ที่นั่ง">5 ที่นั่ง</option>
								<option value="6 ที่นั่ง">6 ที่นั่ง</option>
								<option value="7 ที่นั่ง">7 ที่นั่ง</option>
								<option value="8 ที่นั่ง">8 ที่นั่ง</option>
								<option value="9 ที่นั่ง">9 ที่นั่ง</option>
								<option value="10 ที่นั่ง">10 ที่นั่ง</option>
								<option value="11+ ที่นั่ง">11+ ที่นั่ง</option>
							</select>
						</div>
						<div class="col-sm mb-1">
							<label for="exampleFormControlSelect1">สีรถ</label>
							
							<select class="form-control selectpicker" data-style="btn btn-link" name="color"
								id="exampleFormControlSelect1" required>
								<option value="">เลือกสีรถยนต์</option>
								<option value="แดง">แดง</option>
								<option value="น้ำเงิน">น้ำเงิน</option>
								<option value="เหลือง">เหลือง</option>
								<option value="ขาว">ขาว</option>
								<option value="ดำ">ดำ</option>
								<option value="ม่วง">ม่วง</option>
								<option value="เขียว">เขียว</option>
								<option value="ส้ม">ส้ม</option>
								<option value="น้ำตาล">น้ำตาล</option>
								<option value="ชมพู">ชมพู</option>
								<option value="เทา">เทา</option>
								<option value="ฟ้า">ฟ้า</option>

							</select>
						</div>
						<div class="col-sm mb-1">
							<label for="exampleFormControlSelect1">ชนิดเชื้อเพลิง</label>
							<select class="form-control selectpicker" data-style="btn btn-link" name="fuel"
								id="exampleFormControlSelect1" required>
								<option value="">เลือกชนิดเชื้อเพลิง</option>
								<option value="ดีเซล">ดีเซล</option>
								<option value="ดีเซลB10">ดีเซลB10</option>
								<option value="ดีเซลB20">ดีเซลB20</option>
								<option value="เบนซิน95">เบนซิน95</option>
								<option value="เบนซิน91">เบนซิน91</option>
								<option value="แก๊สโซฮอล์95">แก๊สโซฮอล์95</option>
								<option value="แก๊สโซฮอล์91">แก๊สโซฮอล์91</option>
								<option value="แก๊สโซฮอล์91">แก๊สโซฮอล์E20</option>
								<option value="แก๊สโซฮอล์91">แก๊สโซฮอล์E85</option>
								<option value="LPG">LPG</option>
								<option value="NGV">NGV</option>


							</select>
						</div>
					</div>
					<div class="row">
						<div class="col-sm mb-1">
							<label for="exampleFormControlSelect1">ระบบเกียร์</label>
							<div class="label-bot">
								<div class="radio">
									<label style="padding-right: 8px;">
										<input type="radio" name="gear" value="automatic" checked="checked"
											data-parsley-multiple="transmission">
										<span style="vertical-align: top;">Automatic</span>
									</label>
									<label>
										<input type="radio" name="gear" value="manual"
											data-parsley-multiple="transmission">
										<span style="vertical-align: top;">Manual</span>
									</label>
								</div>
							</div>
						</div>
						<div class="col-sm mb-1">
							<label class="bmd-label-floating">เลขไมล์ (กิโลเมตร)</label>
							<input type="text" class="form-control" placeholder="Ex.10000" name="mile" required>
						</div>
						<div class="col-sm mb-1">
						
						</div>
					</div>
				</div>
		</div>
		<div class="col-md-12 text-center">
			<div class="row justify-content-center">
				<div class="col-sm-8 shadow p-4 mb-4 bg-white rounded">
					<div class="container">
						<div class="row">
							<div class="col-sm">
								<H3>ข้อมูลรถยนต์</H3>
							</div>
						</div>
						<div class="row">
							<div class="col-sm">
								กรุณาใส่ข้อมูลของรถยนต์
							</div>
						</div>
						<div class="row">
							<div class="col-sm mb-1">
								<label for="exampleFormControlSelect1">ทะเบียนรถ</label>
								<input type="text" class="form-control" name="license" placeholder="Ex.5กช1648" required>
							</div>
							<div class="col-sm mb-1">
								<label for="exampleFormControlSelect1">ปีที่ออกทะเบียน</label>
								<input class="date-own form-control" placeholder="เลือกปีที่ออกทะเบียน" type="text" id="yearlicense" 
								name="licenseyear" required>
							</div>
							<div class="col-sm mb-1">
							<label for="exampleFormControlSelect1">หมายเลขตัวถังรถ</label>
							<input type="text" class="form-control" placeholder="Ex.JT732LNB109010828" name="bodyno" required>
						</div>
						</div>

					</div>
					
				</div>
			</div>
			
							<div class="row mb-5">
                        <div class="col-sm">
							<div class="box__input">
                            <button class="btn btn-Danger btn-lg" type="submit">ขั้นตอนต่อไป</button>
							</div>
						</div>
							</div>
                            </form>
                
						</div>
					</div>
					</form>