<div class="container">
	<div class="photo mt-5 mb-3" style="text-align: center;">
		<img src="<?php echo base_url('./pic/logo.png'); ?>" style="background-color: #5DBCD2; border-radius: 10px ; margin-left: 1em ; margin-right: 1em ;"/>
	</div>
	<div class="row justify-content-center">
		<div class="col-sm-4 shadow p-3 mb-5 bg-white rounded"
			style="background-color: #FFFFFF; border-radius: 10px ; margin-left: 1em ; margin-right: 1em ;">
			<form class="form-signin" id="register" name="register" method="post">
				<H4>Register</H4>
				<label for="email" style="color: #000; margin-top: 1em ;">Email address</label>
				<input type="email" class="form-control" id="email" aria-describedby="emailHelp"
					placeholder="Enter email">

				<label for="password" style="color: #000; margin-top: 1em ;">Password</label>
				<input type="password" class="form-control" id="password" placeholder="Password">

				<label for="fname" style="color: #000; margin-top: 1em ;">First Name</label>
				<input type="text" class="form-control" id="fname" placeholder="First Name">

				<label for="lname" style="color: #000; margin-top: 1em ;">Last Name</label>
				<input type="text" class="form-control" id="lname" placeholder="Last Name">

				<label class="label-control" style="color: #000; margin-top: 1em ;">Date of Birth</label>
    			<input type="text" class="form-control datetimepicker" value="18/12/2019"/>

				<label for="address" style="color: #000; margin-top: 1em ;">Address</label>
    			<textarea class="form-control" id="address" rows="3"></textarea>

				<label for="tel" style="color: #000; margin-top: 1em ;">Tel.</label>
				<input type="text" class="form-control" id="lname" placeholder="+66">

				<input type="hidden" class="form-control" id="type" value="CarOwner">

				<a class="btn btn-success" href="<?php echo base_url("Login");?>">Register</a>
			</form>
		</div>
	</div>
</div>
