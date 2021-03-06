<style>
	.field-icon {
		float: right;
		margin-left: -25px;
		margin-top: -27px;
		position: relative;
		z-index: 2;
	}

	.container {
		padding-top: 10px;
		margin: auto;
	}
</style>
<div class="container">
	<div class="photo mt-5 mb-3" style="text-align: center;">
		<img src="<?php echo base_url('./pic/logo55.png'); ?>"
			style="background-color: #5DBCD2; border-radius: 10px ; margin-left: 1em ; margin-right: 1em ;" />
	</div>
	<div class="row justify-content-center">
		<div class="col-sm-8 shadow p-3 mb-5 bg-white rounded"
			style="background-color: #FFFFFF; border-radius: 10px ; margin-left: 1em ; margin-right: 1em ;">
			<form class="form-signin" id="register" name="register" method="post"
				action="<?php echo base_url(); ?>Register/insert">
				<H4>Register</H4>
				<div class="row">
					<div class="col-sm">
						<label class="bmd-label-floating">Username (EN)</label>
						<input name="username" type="text" id="username" class="form-control" placeholder="" 
						pattern="(?=.*[A-Za-z]).{5,}" 
						title="กรุณากรอกเป็นตัวเลขและตัวอักษรภาษาอังกฤษ 5 ตัวขึ้นไป" required>
						<label class="text-danger" hidden id="fai"><span class="glyphicon glyphicon-remove"></span> Username นี้ได้ถูกใช้ไปแล้ว</label>
						<label class="text-success" hidden id="suc"><span class="glyphicon glyphicon-ok"></span> Username นี้สามารถใช้ได้</label>
						<label class="text-danger" hidden id="ad"><span class="glyphicon glyphicon-remove"></span> Username ไม่อนุญาตให้ใช้</label>
						<p style="color:red; font-size:10px;">* กรุณากรอกตัวอักษรภาษาอังกฤษ 5 ตัวขึ้นไป</p>
					</div>
					<div class="col-sm">
						<label class="bmd-label-floating">Password</label>
						<input id="password-field" type="password" class="form-control" name="password" 
						pattern="(?=.*\d)(?=.*[A-Za-z]).{8,}" 
						title="กรุณากรอกเป็นตัวเลขและตัวอักษรภาษาอังกฤษ 8 ตัวขึ้นไป" required>
						<span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
						<p style="color:red; font-size:10px;">* กรุณากรอกตัวเลขและตัวอักษรภาษาอังกฤษ 8 ตัวขึ้นไป</p>
					</div>
				</div>
				<div class="row">
					<div class="col-sm">
						<label class="bmd-label-floating">First Name (EN)</label>
						<input name="fname" type="text" id="fname" class="form-control" placeholder="" pattern="^[a-zA-Z]+$" title="กรุณากรอกชื่อ ภาษาอังกฤษ" required>
						<p style="color:red; font-size:10px;">* กรุณากรอกชื่อ ภาษาอังกฤษ</p>
					</div>
					<div class="col-sm">
						<label class="bmd-label-floating">Last Name (EN)</label>
						<input name="lname" type="text" id="lname" class="form-control" placeholder="" pattern="^[a-zA-Z]+$" title="กรุณากรอกนามสกุล ภาษาอังกฤษ" required>
						<p style="color:red; font-size:10px;">* กรุณากรอกนามสกุล ภาษาอังกฤษ</p>
					</div>
				</div>
				<div class="row">
					<div class="col-sm">
						<label class="bmd-label-floating">Address</label>
						<input name="address" type="text" id="address" class="form-control" placeholder="" required>
					</div>
					<div class="col-sm">
						<label class="bmd-label-floating">Tel.</label>
						<input name="tel" type="tel" id="tel" class="form-control" placeholder="" required 
						pattern="[0-9]{3}[0-9]{3}[0-9]{4}" title="กรุณากรอกให้ครบ 10 หลัก 0800000000" Maxlength="10">
						<p style="color:red; font-size:10px;">* กรุณากรอกเบอร์โทรศัพท์ 10 หลัก</p>
					</div>
					</div>
					<div class="row">
					<div class="col-sm">
						<button class="btn btn-success" type="submit" id="go" disabled> Register</botton>
					</div>
			
		</div>
	</div>
</div>
</form>
<script>
	$(document).ready(function(){  
      $('#username').change(function(){  
           var username = $('#username').val();  

		   if(username == 'admin' || username == 'emp')
		   {
			$('#ad').removeAttr('hidden')
			$('#fai').attr('hidden',true)
			$('#suc').attr('hidden',true)
			$('#go').attr('disabled',true)
		   }else
		   {
					if(username != '')  
					{  
					$.ajax({  
						url:"<?php echo base_url(); ?>Register/checkusname",  
						method:"POST",  
						data:{username:username},
						success:function(data){  
							//   $('#license_result').html(data);
						console.log(data);
						if(data.trim() === "true"){
							
							$('#fai').removeAttr('hidden')
							$('#suc').attr('hidden',true)
							$('#ad').attr('hidden',true)
							$('#go').attr('disabled',true)
						}else
						{
							
							$('#suc').removeAttr('hidden')
							$('#fai').attr('hidden',true)
							$('#ad').attr('hidden',true)
							$('#go').removeAttr('disabled')
							
						}
						}  
					});  
					}  
		   }
      });  
 });
 </script>
