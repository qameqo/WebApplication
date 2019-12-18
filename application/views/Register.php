<div class="container">
	<div class="photo mt-5 mb-3" style="text-align: center;">
		<img src="<?php echo base_url('./pic/logo.png'); ?>"
			style="background-color: #5DBCD2; border-radius: 10px ; margin-left: 1em ; margin-right: 1em ;" />
	</div>
	<div class="row justify-content-center">
		<div class="col-sm-4 shadow p-3 mb-5 bg-white rounded"
			style="background-color: #FFFFFF; border-radius: 10px ; margin-left: 1em ; margin-right: 1em ;">
			<form class="form-signin" id="register" name="register" method="post">
				<H4>Register</H4>
				
				<div class="form-group bmd-form-group">
					<label class="bmd-label-floating">Email Address</label>
					<input type="email" id="email" class="form-control" placeholder="">
				</div>

				<div class="form-group bmd-form-group">
					<label class="bmd-label-floating">Password</label>
					<input type="password" id="password" class="form-control" placeholder="">
				</div>

				<div class="form-group bmd-form-group">
					<label class="bmd-label-floating">First Name</label>
					<input type="text" id="fname" class="form-control" placeholder="">
				</div>

				<div class="form-group bmd-form-group">
					<label class="bmd-label-floating">Last Name</label>
					<input type="text" id="lname" class="form-control" placeholder="">
				</div>

				<div class="form-group bmd-form-group">
					<label class="bmd-label-floating">Date of Birth</label>
					<input type="text" class="form-control datetimepicker" id="birth" class="form-control" placeholder="">
				</div>

				<div class="form-group bmd-form-group">
					<label class="bmd-label-floating">Address</label>
					<input type="text" id="address" class="form-control" placeholder="">
				</div>

				<div class="form-group bmd-form-group">
					<label class="bmd-label-floating">Tel.</label>
					<input type="text" id="tel" class="form-control" placeholder="">
				</div>

				<input type="hidden" class="form-control" id="type" value="CarOwner">
				<div class="fileinput fileinput-new text-center" data-provides="fileinput">
					<div class="fileinput-new thumbnail img-raised">
						<img src="http://style.anu.edu.au/_anu/4/images/placeholders/person_8x10.png" alt="...">
					</div>
					<div class="fileinput-preview fileinput-exists thumbnail img-raised"></div>
					<div>
						<span class="btn btn-raised btn-round btn-default btn-file">
							<span class="fileinput-new">Select image</span>
							<input type="file" name="..." />
						</span>
						<a href="#pablo" class="btn btn-danger btn-round fileinput-exists" data-dismiss="fileinput"><i
								class="fa fa-times"></i> Remove</a>
					</div>
				</div>

				<a class="btn btn-success" href="<?php echo base_url("Login");?>">Register</a>
			</form>
		</div>
	</div>
</div>
