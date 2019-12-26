<!-- <div class="container">
  <div class="row">
    <div class="col-sm">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
    <div class="row">
    <div class="col-sm">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
    <button type="button" class="btn btn-success">Login</button>
    </div>
    </div>
  </div>
</div> -->

<!-- Login -->


<!-- <div class="container">
	<div class="photo mt-5 mb-3" style="text-align: center;">
		<img src="<?php echo base_url('./pic/logo.png'); ?>" />
	</div>
	<div class="row justify-content-center">
		<div class="col-sm-4 shadow p-3 mb-5 bg-white rounded"
			style="background-color: #FFFFFF; border-radius: 10px ; margin-left: 1em ; margin-right: 1em ;">
			<form class="form-signin" id="login" name="login" method="post">
				<H4>Login</H4>
				<label for="exampleInputEmail1">Email address</label>
				<input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
					placeholder="Enter email">
				<label for="exampleInputPassword1">Password</label>
				<input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
				<button class="btn btn-success">Login</button>
				<a class="btn btn-success" href="<?php echo base_url("Register");?>">Register</a>
			</form>
		</div>
	</div>
</div> -->
<div class="photo mt-5 mb-3" style="text-align: center; ">
	<img src="<?php echo base_url('./pic/logo.png'); ?>"
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
