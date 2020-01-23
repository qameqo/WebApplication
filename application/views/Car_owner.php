<div class="col-md-13 text-center"><br>
	<h1 class="h1" style="color:#000000">ลงทะเบียนรถยนต์</h1>
	<div class="row justify-content-center">
		<div class="col-sm-8 shadow p-5 mb-5 bg-white rounded">
			<form class="form-signin" id="owner" name="owner" method="post" enctype="multipart/form-data"
				action="<?php echo base_url('Owner/insert/'.$ids); ?>">
				<div class="container">
					<div class="row">
						<div class="col-sm">
							<H2>ข้อมูลรถยนต์</H2>
						</div>
					</div>
					<div class="row">
						<div class="col-sm">
							กรุณาใส่รายละเอียดของรถยนต์ให้ครบ
						</div>
					</div>
					<div class="row">
						<div class="col-sm mb-1">
							<label for="exampleFormControlSelect1">ยี่ห้อรถ</label>
							<select class="form-control selectpicker" data-style="btn btn-link" name="Brand" id="Brand1"
								onChange="Change_Brand()" required>
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
							<select class="form-control selectpicker" data-style="btn btn-link" name="Gen" id="gen1"
								required>
								<option value="">เลือกรุ่น</option>
							</select>
						</div>
						<div class="col-sm mb-1">
							<label for="exampleFormControlSelect1">รุ่นปีรถ</label>
							<select name="caryear" id="caryear" class="form-control selectpicker"
								data-style="btn btn-link" required>
								<option value="">เลือกรุ่นปีรถ</option>
								<option value="2020">2020</option>
								<option value="2019">2019</option>
								<option value="2018">2018</option>
								<option value="2017">2017</option>
								<option value="2016">2016</option>
								<option value="2015">2015</option>
								<option value="2014">2014</option>
								<option value="2013">2013</option>
								<option value="2012">2012</option>
								<option value="2011">2011</option>
								<option value="2010">2010</option>
								<option value="2009">2009</option>
								<option value="2008">2008</option>
								<option value="2007">2007</option>
								<option value="2006">2006</option>
								<option value="2005">2005</option>
								<option value="2004">2004</option>
								<option value="2003">2003</option>
								<option value="2002">2002</option>
								<option value="2001">2001</option>
								<option value="2000">2000</option>
								<option value="1999">1999</option>
								<option value="1998">1998</option>
								<option value="1997">1997</option>
								<option value="1996">1996</option>
								<option value="1995">1995</option>
								<option value="1994">1994</option>
								<option value="1993">1993</option>
								<option value="1992">1992</option>
								<option value="1991">1991</option>
								<option value="1990">1990</option>
								<option value="1989">1989</option>
								<option value="1988">1988</option>
								<option value="1987">1987</option>
								<option value="1986">1986</option>
								<option value="1985">1985</option>
								<option value="1984">1984</option>
								<option value="1983">1983</option>
								<option value="1982">1982</option>
								<option value="1981">1981</option>
								<option value="1980">1980</option>
								<option value="1979">1979</option>
								<option value="1978">1978</option>
								<option value="1977">1977</option>
								<option value="1976">1976</option>
								<option value="1975">1975</option>
								<option value="1974">1974</option>
								<option value="1973">1973</option>
								<option value="1972">1972</option>
								<option value="1971">1971</option>
								<option value="1970">1970</option>
								<option value="1969">1969</option>
								<option value="1968">1968</option>
								<option value="1967">1967</option>
								<option value="1966">1966</option>
								<option value="1965">1965</option>
								<option value="1964">1964</option>
								<option value="1963">1963</option>
								<option value="1962">1962</option>
								<option value="1961">1961</option>
								<option value="1960">1960</option>
								<option value="1959">1959</option>
								<option value="1958">1958</option>
								<option value="1957">1957</option>
								<option value="1956">1956</option>
								<option value="1955">1955</option>
								<option value="1954">1954</option>
								<option value="1953">1953</option>
								<option value="1952">1952</option>
								<option value="1951">1951</option>
								<option value="1950">1950</option>
								


							</select>
							<!-- <input class="date-own form-control" placeholder="เลือกรุ่นปีรถ" type="text" id="yearcar"
								name="caryear" required> -->
						</div>
					</div>
					<div class="row">
						<div class="col-sm mb-1">
							<label for="exampleFormControlSelect1">จำนวนที่นั่ง</label>
							<select class="form-control selectpicker" data-style="btn btn-link"
								id="exampleFormControlSelect1" name="seat" required>
								<option value="">เลือกจำนวนที่นั่ง</option>
								<option value="2">2 ที่นั่ง</option>
								<option value="3">3 ที่นั่ง</option>
								<option value="4">4 ที่นั่ง</option>
								<option value="5">5 ที่นั่ง</option>
								<option value="6">6 ที่นั่ง</option>
								<option value="7">7 ที่นั่ง</option>
								<option value="8">8 ที่นั่ง</option>
								<option value="9">9 ที่นั่ง</option>
								<option value="10">10 ที่นั่ง</option>
								<option value="11+">11+ ที่นั่ง</option>
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
							<label for="exampleFormControlSelect1">ทะเบียนรถ</label>
							<input type="text" class="form-control" name="license" placeholder="Ex.5กช1648" required>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-sm mb-1">
						<label for="exampleFormControlSelect1">ปีที่ออกทะเบียน</label>
						<select name="licenseyear" id="licenseyear" class="form-control selectpicker"
								data-style="btn btn-link" required>
								<option value="">เลือกปีที่ออกทะเบียน</option>
								<option value="2020">2020</option>
								<option value="2019">2019</option>
								<option value="2018">2018</option>
								<option value="2017">2017</option>
								<option value="2016">2016</option>
								<option value="2015">2015</option>
								<option value="2014">2014</option>
								<option value="2013">2013</option>
								<option value="2012">2012</option>
								<option value="2011">2011</option>
								<option value="2010">2010</option>
								<option value="2009">2009</option>
								<option value="2008">2008</option>
								<option value="2007">2007</option>
								<option value="2006">2006</option>
								<option value="2005">2005</option>
								<option value="2004">2004</option>
								<option value="2003">2003</option>
								<option value="2002">2002</option>
								<option value="2001">2001</option>
								<option value="2000">2000</option>
								<option value="1999">1999</option>
								<option value="1998">1998</option>
								<option value="1997">1997</option>
								<option value="1996">1996</option>
								<option value="1995">1995</option>
								<option value="1994">1994</option>
								<option value="1993">1993</option>
								<option value="1992">1992</option>
								<option value="1991">1991</option>
								<option value="1990">1990</option>
								<option value="1989">1989</option>
								<option value="1988">1988</option>
								<option value="1987">1987</option>
								<option value="1986">1986</option>
								<option value="1985">1985</option>
								<option value="1984">1984</option>
								<option value="1983">1983</option>
								<option value="1982">1982</option>
								<option value="1981">1981</option>
								<option value="1980">1980</option>
								<option value="1979">1979</option>
								<option value="1978">1978</option>
								<option value="1977">1977</option>
								<option value="1976">1976</option>
								<option value="1975">1975</option>
								<option value="1974">1974</option>
								<option value="1973">1973</option>
								<option value="1972">1972</option>
								<option value="1971">1971</option>
								<option value="1970">1970</option>
								<option value="1969">1969</option>
								<option value="1968">1968</option>
								<option value="1967">1967</option>
								<option value="1966">1966</option>
								<option value="1965">1965</option>
								<option value="1964">1964</option>
								<option value="1963">1963</option>
								<option value="1962">1962</option>
								<option value="1961">1961</option>
								<option value="1960">1960</option>
								<option value="1959">1959</option>
								<option value="1958">1958</option>
								<option value="1957">1957</option>
								<option value="1956">1956</option>
								<option value="1955">1955</option>
								<option value="1954">1954</option>
								<option value="1953">1953</option>
								<option value="1952">1952</option>
								<option value="1951">1951</option>
								<option value="1950">1950</option>
							
							</select>
						<!-- <input class="date-own form-control" placeholder="เลือกปีที่ออกทะเบียน" type="text"
							id="yearlicense" name="licenseyear" required> -->
					</div>
					<div class="col-sm mb-1">
						<label for="exampleFormControlSelect1">หมายเลขตัวถังรถ</label>
						<input type="text" class="form-control" placeholder="Ex.JT732LNB109010828" name="carbody"
							required>
					</div>
					<div class="col-sm">
						<div class="box__input">
							<br>
							<button class="btn btn-Danger btn-lg" style="background-color: #F60200;" type="submit">บันทึกและดำเนินการต่อ</button>
						</div>
					</div>
				</div>
		</div>
	</div>
	</form>