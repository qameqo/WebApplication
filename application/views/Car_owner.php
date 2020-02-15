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
								onChange="Change_Gen()" required>
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
							<select class="form-control selectpicker" data-style="btn btn-link" id="seat1" name="seat"
								required>
								<option value="">เลือกจำนวนที่นั่ง</option>
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
							<label for="exampleFormControlSelect1">หมายเลขตัวถังรถ</label>
							<input type="text" class="form-control" placeholder="Ex.JT732LNB109010828" name="carbody" id="carbody" 
							pattern=".{17}" title="กรุณากรอกให้ครบ 17 หลัก" Maxlength= "17"  required>
							
							<label class="text-danger" hidden id="fail2"><span class="glyphicon glyphicon-remove"></span> หมายเลขตัวถังรถนี้ได้ถูกใช้ไปแล้ว</label>
							<label class="text-success" hidden id="success2"><span class="glyphicon glyphicon-ok"></span> หมายเลขตัวถังรถนี้สามารถใช้ได้</label>		
						</div>
					</div>
					<div class="row">
						<div class="col-sm mb-1">
							<label for="exampleFormControlSelect1">ระบบเกียร์</label>
							<div class="label-bot">
								<div class="radio">
									<label style="padding-right: 8px;">
										<input type="radio" name="gear" value="automatic & manual" checked="checked"
											data-parsley-multiple="transmission">
										<span style="vertical-align: top;">Automatic & Manual</span>
									</label>
									<label>
										<input type="radio" name="gear" value="automatic"
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
							<input type="text" class="form-control" placeholder="Ex.10000" name="mile" pattern="[0-9].{,3}" title="กรุณากรอกตัวเลข" required>
						</div>
						<div class="col-sm mb-1">
							<label for="exampleFormControlSelect1">ทะเบียนรถ</label>
							<input type="text" class="form-control" name="license" id="license" placeholder="Ex.5กช1648" disabled required>
							<p style="color:red; font-size:10px;">*กรอกหมายเลขตัวถังให้ถูกต้องก่อนจะกรอกทะเบียนรถ</p>
							<label class="text-danger" hidden id="fail"><span class="glyphicon glyphicon-remove"></span> ทะเบียนรถนี้ได้ถูกใช้ไปแล้ว</label>
							<label class="text-success"hidden id="success"><span class="glyphicon glyphicon-ok"></span> ทะเบียนรถนี้สามารถใช้ได้</label>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-sm mb-1">
						<label for="exampleFormControlSelect1">จังหวัดที่ออกทะเบียน</label>
						<select name="province" id="province" class="form-control selectpicker"
							data-style="btn btn-link" required>
							<option value="">เลือกจังหวัด</option>
							<option value="กรุงเทพมหานคร">กรุงเทพมหานคร</option>
							<option value="กระบี่">กระบี่ </option>
							<option value="กาญจนบุรี">กาญจนบุรี </option>
							<option value="กาฬสินธุ์">กาฬสินธุ์ </option>
							<option value="กำแพงเพชร">กำแพงเพชร </option>
							<option value="ขอนแก่น">ขอนแก่น</option>
							<option value="จันทบุรี">จันทบุรี</option>
							<option value="ฉะเชิงเทรา">ฉะเชิงเทรา </option>
							<option value="ชัยนาท">ชัยนาท </option>
							<option value="ชัยภูมิ">ชัยภูมิ </option>
							<option value="ชุมพร">ชุมพร </option>
							<option value="ชลบุรี">ชลบุรี </option>
							<option value="เชียงใหม่">เชียงใหม่ </option>
							<option value="เชียงราย">เชียงราย </option>
							<option value="ตรัง">ตรัง </option>
							<option value="ตราด">ตราด </option>
							<option value="ตาก">ตาก </option>
							<option value="นครนายก">นครนายก </option>
							<option value="นครปฐม">นครปฐม </option>
							<option value="นครพนม">นครพนม </option>
							<option value="นครราชสีมา">นครราชสีมา </option>
							<option value="นครศรีธรรมราช">นครศรีธรรมราช </option>
							<option value="นครสวรรค์">นครสวรรค์ </option>
							<option value="นราธิวาส">นราธิวาส </option>
							<option value="น่าน">น่าน </option>
							<option value="นนทบุรี">นนทบุรี </option>
							<option value="บึงกาฬ">บึงกาฬ</option>
							<option value="บุรีรัมย์">บุรีรัมย์</option>
							<option value="ประจวบคีรีขันธ์">ประจวบคีรีขันธ์ </option>
							<option value="ปทุมธานี">ปทุมธานี </option>
							<option value="ปราจีนบุรี">ปราจีนบุรี </option>
							<option value="ปัตตานี">ปัตตานี </option>
							<option value="พะเยา">พะเยา </option>
							<option value="พระนครศรีอยุธยา">พระนครศรีอยุธยา </option>
							<option value="พังงา">พังงา </option>
							<option value="พิจิตร">พิจิตร </option>
							<option value="พิษณุโลก">พิษณุโลก </option>
							<option value="เพชรบุรี">เพชรบุรี </option>
							<option value="เพชรบูรณ์">เพชรบูรณ์ </option>
							<option value="แพร่">แพร่ </option>
							<option value="พัทลุง">พัทลุง </option>
							<option value="ภูเก็ต">ภูเก็ต </option>
							<option value="มหาสารคาม">มหาสารคาม </option>
							<option value="มุกดาหาร">มุกดาหาร </option>
							<option value="แม่ฮ่องสอน">แม่ฮ่องสอน </option>
							<option value="ยโสธร">ยโสธร </option>
							<option value="ยะลา">ยะลา </option>
							<option value="ร้อยเอ็ด">ร้อยเอ็ด </option>
							<option value="ระนอง">ระนอง </option>
							<option value="ระยอง">ระยอง </option>
							<option value="ราชบุรี">ราชบุรี</option>
							<option value="ลพบุรี">ลพบุรี </option>
							<option value="ลำปาง">ลำปาง </option>
							<option value="ลำพูน">ลำพูน </option>
							<option value="เลย">เลย </option>
							<option value="ศรีสะเกษ">ศรีสะเกษ</option>
							<option value="สกลนคร">สกลนคร</option>
							<option value="สงขลา">สงขลา </option>
							<option value="สมุทรสาคร">สมุทรสาคร </option>
							<option value="สมุทรปราการ">สมุทรปราการ </option>
							<option value="สมุทรสงคราม">สมุทรสงคราม </option>
							<option value="สระแก้ว">สระแก้ว </option>
							<option value="สระบุรี">สระบุรี </option>
							<option value="สิงห์บุรี">สิงห์บุรี </option>
							<option value="สุโขทัย">สุโขทัย </option>
							<option value="สุพรรณบุรี">สุพรรณบุรี </option>
							<option value="สุราษฎร์ธานี">สุราษฎร์ธานี </option>
							<option value="สุรินทร์">สุรินทร์ </option>
							<option value="สตูล">สตูล </option>
							<option value="หนองคาย">หนองคาย </option>
							<option value="หนองบัวลำภู">หนองบัวลำภู </option>
							<option value="อำนาจเจริญ">อำนาจเจริญ </option>
							<option value="อุดรธานี">อุดรธานี </option>
							<option value="อุตรดิตถ์">อุตรดิตถ์ </option>
							<option value="อุทัยธานี">อุทัยธานี </option>
							<option value="อุบลราชธานี">อุบลราชธานี</option>
							<option value="อ่างทอง">อ่างทอง </option>
						</select>

						<!-- <input class="date-own form-control" placeholder="เลือกปีที่ออกทะเบียน" type="text"
							id="yearlicense" name="licenseyear" required> -->
					</div>
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
					</div>
					<div class="col-sm">
						<label for="exampleFormControlSelect1">ประเภทเชื้อเพลิง</label>
						<select class="form-control selectpicker" data-style="btn btn-link" name="fuel1"
							onChange="Change_Fuel()" id="fuel1" required>
							<option value="">เลือกประเภทเชื้อเพลิง</option>

						</select>
					</div>
				</div>
				<div class="row">
					<div class="col-sm mb-1">
						<label for="exampleFormControlSelect1">เชื้อเพลิง</label>
						<select class="form-control selectpicker" data-style="btn btn-link" name="fuel2" id="fuel2"
							required>
							<option value="">เลือกเชื้อเพลิง</option>

						</select>
					</div>
					<div class="col-md-4">
					
					</div>
					<div class="col-sm mb-1">
						<br>
						<button class="btn btn-secendary btn-lg" style="background-color: gray; color:white;" 
						onclick="return confirm('ยืนยันข้อมูล ?');" name="game" id="game"
							type="submit" disabled>บันทึกและดำเนินการต่อ</button>
					</div>
				</div>

		</div>
	</div>
	</form>
	<!-- <script type="text/javascript" src="//code.jquery.com/jquery.min.js"></script> -->

	<!-- <script>
function game() {
	var r = confirm("ต้องการยืนยันข้อมูลรถ ?");
    if (r == true) {
      
        window.location.href = "<?php echo base_url("Owner/insert/'.$ids") ?>";
    } else {
        window.location.href = "";
    }
}
</script> -->
	<!-- <script>

$(document).ready(function(){
    var r = confirm("ต้องการยืนยันข้อมูลรถ ?");
    if (r == true) {
      
        window.location.href = "<?php echo base_url("Owner/insert/'.$ids") ?>";
    } else {
        window.location.href = "";
    }
});
</script> -->
	
	<script>
	var license = 0;
	var carbody = 0;
	$(document).ready(function(){  
      $('#license').change(function(){  
           license = $('#license').val();  
           if(license  != '')  
           {  
                $.ajax({  
                     url:"<?php echo base_url(); ?>Owner/checklicense",  
                     method:"POST",  
                     data:{license:license},
                     success:function(data){  
                        //   $('#license_result').html(data);
					 console.log( data);
					 if(data.trim() === "true"){
						console.log("มีไอสัส");
						$('#fail').removeAttr('hidden')
						$('#success').attr('hidden',true)
						$('#game').attr('disabled',true)
						document.getElementById("game").style.background = "gray";

					 }else
					 {
						console.log("ไม่มี");
						$('#success').removeAttr('hidden')
						$('#fail').attr('hidden',true)
						$('#game').removeAttr('disabled')
						document.getElementById("game").style.background = "#F60200";
					 }
                     }  
                });  
           }  
	  });  
	  $('#carbody').change(function(){  
		   carbody = $('#carbody').val();  
		   var licen = document.getElementById("license").value;
		  
           if(carbody != '')  
           {  
                $.ajax({  
                     url:"<?php echo base_url(); ?>Owner/checkcarbody",  
                     method:"POST",  
                     data:{carbody:carbody},  
                     success:function(data){  
						//   $('#carbody_result').html(data);
						console.log("แก้ไขแล้ว");
					 if(data.trim() === "true"){
						console.log("มีแล้ว");
						$('#fail2').removeAttr('hidden')
						$('#success2').attr('hidden',true)
						$('#game').attr('disabled',true)
						document.getElementById("license").disabled = true;
						document.getElementById("game").style.background = "gray";
					 }else
					 {
						console.log("ไม่มี");
						$('#success2').removeAttr('hidden')
						$('#fail2').attr('hidden',true)
						$('#license').removeAttr('disabled')
						// document.getElementById("carbody").readOnly = true;
					 }
                     }  
                });  
           }  
      });  
 });

 </script>









 <!-- <script>
	$(document).ready(function(){  
      $('#carbody').change(function(){  
           carbody = $('#carbody').val();  
           if(carbody != '')  
           {  
                $.ajax({  
                     url:"<?php echo base_url(); ?>Owner/checkcarbody",  
                     method:"POST",  
                     data:{carbody:carbody},  
                     success:function(data){  
                        //   $('#carbody_result').html(data);
					 if(data.trim() === "true"){
						console.log("มีไอสัส");
						$('#fail2').removeAttr('hidden')
						$('#success2').attr('hidden',true)
						$('#game').attr('disabled',true)
					 }else
					 {
						console.log("ไม่มี");
						$('#success2').removeAttr('hidden')
						$('#fail2').attr('hidden',true)
						
					 }
                     }  
                });  
           }  
      });  
 });
 </script> -->
 