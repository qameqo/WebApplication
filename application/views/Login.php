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


<div class="container">
	<div class="row mt-5">
		<div class="col">
		</div>
		<div class="photo">
			<img src="<?php echo base_url('./pic/logo.png'); ?>" />
		</div>
		<div class="col">
		</div>
	</div>
	<div class="row">
		<div class="col">
		</div>
		<div class="col">
			<H4>Login</H4>
		</div>
		<div class="col">
		</div>
	</div>
	<div class="row">
		<div class="col">
		</div>
		<div class="col">
			<label for="exampleInputEmail1">Email address</label>
			<input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
				placeholder="Enter email">
		</div>
		<div class="col">
		</div>
	</div>
	<div class="row">
		<div class="col">
		</div>
		<div class="col">
			<label for="exampleInputPassword1">Password</label>
			<input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
		</div>
		<div class="col">
		</div>
	</div>
	<div class="row">
		<div class="col">
		</div>
		<div class="col">
			<button type="button" class="btn btn-success">Login</button>
			<button class="btn btn-round" data-toggle="modal" data-target="#loginModal">Register</button>

			<div class="modal fade" id="loginModal" tabindex="-1" role="">
				<div class="modal-dialog modal-login" role="document">
					<div class="modal-content">
						<div class="card card-signup card-plain">
							<div class="modal-header">
								<div class="card-header card-header-primary text-center">
									<button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i
											class="material-icons">clear</i></button>
									<h4 class="card-title">Log in</h4>
									<div class="social-line">
										<a href="#pablo" class="btn btn-just-icon btn-link">
											<i class="fa fa-facebook-square"></i>
										</a>
										<a href="#pablo" class="btn btn-just-icon btn-link">
											<i class="fa fa-twitter"></i>
										</a>
										<a href="#pablo" class="btn btn-just-icon btn-link">
											<i class="fa fa-google-plus"></i>
											<div class="ripple-container"></div>
										</a>
									</div>
								</div>
							</div>
							<div class="modal-body">
								<form class="form" method="" action="">
									<p class="description text-center">Or Be Classical</p>
									<div class="card-body">

										<div class="form-group bmd-form-group">
											<div class="input-group">
												<span class="input-group-addon">
													<i class="material-icons">face</i>
												</span>
												<input type="text" class="form-control" placeholder="First Name...">
											</div>
										</div>

										<div class="form-group bmd-form-group">
											<div class="input-group">
												<span class="input-group-addon">
													<i class="material-icons">email</i>
												</span>
												<input type="text" class="form-control" placeholder="Email...">
											</div>
										</div>

										<div class="form-group bmd-form-group">
											<div class="input-group">
												<span class="input-group-addon">
													<i class="material-icons">lock_outline</i>
												</span>
												<input type="password" placeholder="Password..." class="form-control">
											</div>
										</div>
									</div>
								</form>
							</div>
							<div class="modal-footer justify-content-center">
								<a href="#pablo" class="btn btn-primary btn-link btn-wd btn-lg">Get Started</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col">
		</div>
	</div>
