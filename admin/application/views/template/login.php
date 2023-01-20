<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Login</title>
	<!-- Tell the browser to be responsive to screen width -->
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	<!-- Custom fonts for this template-->
	<link href="<?= base_url('./../assets/adminsb2/vendor/fontawesome-free/css/all.min.css'); ?>" rel="stylesheet" type="text/css">
	<link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

	<!-- Custom styles for this template-->
	<link href="<?= base_url('./../assets/adminsb2/css/sb-admin-2.min.css'); ?>" rel="stylesheet">
</head>

<body class="bg-gradient-primary">


	<div class="container">

		<!-- Outer Row -->
		<div class="row justify-content-center">

			<div class="col-xl-10 col-lg-12 col-md-9">

				<div class="card o-hidden border-0 shadow-lg my-5">
					<div class="card-body p-0">
						<!-- Nested Row within Card Body -->
						<div class="row">
							<div class="col-lg-6 d-none d-lg-block text-center" style="padding: 5%;"><img src="<?= base_url('./../assets/img/lsmk.jpg'); ?>">
								<hr>
								<strong><b>SMK Ma'arif 1 Piyungan</b></strong>
							</div>
							<div class="col-lg-6">
								<div class="p-5">
									<div class="text-center">
										<h1 class="h4 text-gray-900 mb-4">Login</h1>
									</div>
									<?php if ($this->session->flashdata('gagal') == true) { ?>
										<div class="alert alert-danger alert-dismissable">
											<button class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
											<i class="fa fa-warning"></i> Username / Password salah
										</div>
									<?php } ?>

									<form action="<?= base_url('login/actlogin'); ?>" method="post">
										<div class="form-group has-feedback">
											<input type="text" name="username" class="form-control" placeholder="Username">
											<span class="glyphicon glyphicon-user form-control-feedback"></span>
										</div>
										<div class="form-group has-feedback">
											<input type="password" name="password" class="form-control" placeholder="Password">
											<span class="glyphicon glyphicon-lock form-control-feedback"></span>
										</div>
										<div class="form-group">
											<select name="akses" id="" class="form-control" required>
												<option value="">Login sebagai . . .</option>
												<option value="admin">Admin</option>
												<option value="guru">Guru</option>
												<option value="panitia_ppdb">Panitia PPDB</option>
											</select>
										</div>
										<button type="submit" class="btn btn-info btn-block btn-flat"><i class="fa fa-sign-in"></i> Login</button>
									</form>
									<hr>
									<div class="text-center">
										<a class="small" href="#">Forgot Password?</a>
									</div>
									<div class="text-center">
										<a class="small" href="#">Create an Account!</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

			</div>

		</div>

	</div>

	<!-- Bootstrap core JavaScript-->
	<script src="<?= base_url('./../assets/adminsb2/vendor/jquery/jquery.min.js') ?>"></script>
	<script src="<?= base_url('./../assets/adminsb2/vendor/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>

	<!-- Core plugin JavaScript-->
	<script src="<?= base_url('./../assets/adminsb2/vendor/jquery-easing/jquery.easing.min.js') ?>"></script>

	<!-- Custom scripts for all pages-->
	<script src="<?= base_url('./../assets/adminsb2/js/sb-admin-2.min.js') ?>"></script>
</body>

</html>
