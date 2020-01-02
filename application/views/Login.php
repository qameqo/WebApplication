
<style>
.field-icon {
  float: right;
  margin-left: -25px;
  margin-top: -27px;
  position: relative;
  z-index: 2;
}

.container{
  padding-top:50px;
  margin: auto;
}</style>
<div class="photo mt-5 mb-3" style="text-align: center; ">
	<img src="<?php echo base_url('./pic/logo55.png'); ?>"
		style="background-color: #5DBCD2; border-radius: 10px ; margin-left: 1em ; margin-right: 1em ;" />
</div>
<div class="row justify-content-center">
	<div class="col-sm-4 shadow p-3 mb-5 bg-white rounded"
		style="background-color: #FFFFFF; border-radius: 10px ; margin-left: 1em ; margin-right: 1em ;">
		<form class="form-login" id="login" name="login" method="post" action="<?php echo base_url(); ?>Login/Loginn">
			<H4>Login</H4>
			<div class="form-group">

				<div class="form-group bmd-form-group">
					<label class="bmd-label-floating">Email Address</label>
					<input type="email" id="email" class="form-control" placeholder="" required name="email">
				</div>

				<div class="form-group bmd-form-group">
					<label class="bmd-label-floating">Password</label>
					<input id="password-field" type="password" class="form-control" name="password" required>
              		<span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
				</div>

			</div>
			<button class="btn btn-success" type="submit">Login</botton>
				<!-- <a class="btn btn-info" href="<?php echo base_url("Register");?>">Register</a> -->
	</div>

	</form>