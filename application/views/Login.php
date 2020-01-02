
<div class="photo mt-5 mb-3" style="text-align: center; ">
	<img src="<?php echo base_url('./pic/logo55.png'); ?>"
		style="background-color: #5DBCD2; border-radius: 10px ; margin-left: 1em ; margin-right: 1em ;" />
</div>
<div class="row justify-content-center">
	<div class="col-sm-4 shadow p-3 mb-5 bg-white rounded"
		style="background-color: #FFFFFF; border-radius: 10px ; margin-left: 1em ; margin-right: 1em ;">
		<form>
			<H4>Login</H4>
			<div class="form-group">

				<div class="form-group bmd-form-group">
					<label class="bmd-label-floating">Email Address</label>
					<input type="email" id="email" class="form-control" placeholder="">
				</div>

				<div class="form-group bmd-form-group">
					<label class="bmd-label-floating">Password</label>
					<input type="password" id="password" class="form-control" placeholder="">
				</div>

			</div>
      <a class="btn btn-success" href="<?php echo base_url("Owner");?>">Login</a>
      <a class="btn btn-info" href="<?php echo base_url("Register");?>">Register</a>
		</form>
