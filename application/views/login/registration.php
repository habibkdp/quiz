<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
	<meta name="description" content="" />
	<meta name="author" content="" />
	<title>Page Title - SB Admin</title>
	<link href="<?php echo base_url() ?>assets/css/styles.css" rel="stylesheet" />
	<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js" crossorigin="anonymous">
	</script>
	<style>
	body{
		background-image: url("<?php echo base_url() ?>assets/images/komputer2.jpg");
		height: 100%;
   		background-position: center;
    	background-repeat: no-repeat;
    	background-size: cover;
	}
	</style>
</head>

<body>
	<div id="layoutAuthentication">
		<div id="layoutAuthentication_content">
			<main>
				<div class="container">
					<div class="row justify-content-center">
						<div class="col-lg-5">
							<div class="card shadow-lg border-0 rounded-lg mt-5">
								<div class="card-header">
									<h3 class="text-center font-weight-light my-4">Creat Account</h3>
								</div>
								<div class="card-body">
									<?php echo $this->session->flashdata('pesan') ?>
									<form method="post" action="<?php echo base_url('Auth/registration') ?>">
                                        <div class="form-group">
											<label class="small mb-1" for="inputFullname">Fullname</label>
											<input class="form-control py-4" id="inputFullname" type="text"
												placeholder="Enter fullname" name="fullname"/>
											<?php echo form_error('fullname', '<div class="text-danger small">','</div>'); ?>
										</div>
										<div class="form-group">
											<label class="small mb-1" for="inputUsername">Username</label>
											<input class="form-control py-4" id="inputUsername" type="text"
												placeholder="Enter username" name="username"/>
											<?php echo form_error('username', '<div class="text-danger small">','</div>'); ?>
										</div>
										<div class="form-group">
											<label class="small mb-1" for="inputPassword">Password</label>
											<input class="form-control py-4" id="inputPassword" type="password"
												placeholder="Enter password" name="password_1"/>
											<?php echo form_error('password_1', '<div class="text-danger small">','</div>'); ?>
										</div>
                                        <div class="form-group">
											<label class="small mb-1" for="inputPassword">Confirm Password</label>
											<input class="form-control py-4" id="inputPassword" type="password"
												placeholder="Renter password" name="password_2"/>
										</div>
										<div
											class="form-group d-flex align-items-center justify-content-between mt-4 mb-0">
											<button type="submit" class="btn btn-primary form-control">Create Account</button>
										</div>
									</form>
								</div>
								<div class="card-footer text-center">
									<div class="small"><a href="<?= base_url('auth/registration') ?>">Have an account? Login!</a></div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</main>
		</div>
	</div>
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous">
	</script>
	<script src="js/scripts.js"></script>
</body>

</html>
