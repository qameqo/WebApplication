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
						<label class="bmd-label-floating">Email Address</label>
						<input name="email" type="email" id="email" class="form-control" placeholder="" required>
					</div>
					<div class="col-sm">
						<label class="bmd-label-floating">Password</label>
						<input id="password-field" type="password" class="form-control" name="password" required>
						<span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
					</div>

				</div>
				<div class="row">
					<div class="col-sm">
						<label class="bmd-label-floating">First Name</label>
						<input name="fname" type="text" id="fname" class="form-control" placeholder="" required>
					</div>
					<div class="col-sm">
						<label class="bmd-label-floating">Last Name</label>
						<input name="lname" type="text" id="lname" class="form-control" placeholder="" required>
					</div>

				</div>
				<div class="row">
					<div class="col-sm">
						<label class="bmd-label-floating">Date of Birth</label>
						<div class="input-group input-group-alternative">
							<div class="input-group-prepend">
								<span class="input-group-text"><i class="ni ni-calendar-grid-58"></i></span>
							</div>
							<input class="form-control datepicker" placeholder="Select date" type="text" name="date"
								value="" required>
						</div>
					</div>
					<div class="col-sm">
						<label class="bmd-label-floating">Address</label>
						<input name="address" type="text" id="address" class="form-control" placeholder="" required>
					</div>
				</div>

				<div class="row">
					<div class="col-sm">
						<label class="bmd-label-floating">Tel.</label>
						<input name="tel" type="tel" id="tel" class="form-control" placeholder="" required 
						pattern="[0-9]{3}[0-9]{3}[0-9]{4}">
					</div>
					<div class="col-sm" style="padding-top: 30px;">
						<button class="btn btn-success" type="submit"> Register</botton>
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

