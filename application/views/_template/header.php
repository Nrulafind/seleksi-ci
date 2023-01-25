<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title><?= $title; ?></title>
	<!-- Tell the browser to be responsive to screen width -->
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	<!-- Font Awesome -->
	<link rel="stylesheet" href="<?= base_url('assets/adminsb2/vendor/fontawesome-free/css/fontawesome.min.css'); ?>">
	<!-- Theme style -->
	<link rel="stylesheet" href="<?= base_url('assets/adminsb2/vendor/css/sb-admin-2.min.css'); ?>">
	<!-- Load Javascript -->
	<script src="<?= base_url('assets/adminsb2/vendor/jquery/jquery.min.js'); ?>"></script>
	<script src="<?= base_url('assets/js/sweetalert2.all.min.js'); ?>"></script>

	<link rel="stylesheet" href="<?= base_url('assets/css/sweetalert2.min.css'); ?>">
	<!-- CSS -->
	<link rel="stylesheet" href="<?= base_url('assets/css/style-admin.css'); ?>">
	<!-- Custom fonts for this template-->
	<script src="https://kit.fontawesome.com/25af777db1.js" crossorigin="anonymous"></script>
	<link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
	<!-- Custom styles for this template-->
	<link href="<?= base_url('assets/adminsb2/css/sb-admin-2.min.css'); ?>" rel="stylesheet">
</head>

<body id="page-top" class="hold-transition skin-blue fixed sidebar-mini" oncontextmenu="return false;" style="-moz-user-select: none; cursor: default;">
	<div id="wrapper">

		<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
			<a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= base_url(); ?>">
				<div class="sidebar-brand-icon">
					<i class="fas fa-book-reader"></i>
				</div>
				<div class="sidebar-brand-text mx-3">LMS<br>SMK Ma'arif 1 Piyungan</div>
			</a>
			<!-- Divider -->
			<hr class="sidebar-divider my-2">
			<!-- Sidebar - Brand -->
			<a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= base_url(); ?>">
				<div class="sidebar-brand-text mx-1">
					<p><?= $this->session->nama . ' | ' . $this->session->kelas . ' | ' . $this->session->nis; ?> <i class="fas fa-circle text-success">
						</i></p>
				</div>
			</a>
			<!-- Divider -->
			<hr class="sidebar-divider my-2">
			<!-- Heading -->
			<div class="sidebar-heading">
				MAIN NAVIGATION</div>

			<!-- Nav Item - Dashboard -->
			<li class="nav-item active">
				<a class="nav-link" href="<?= base_url(); ?>">
					<i class="fas fa-fw fa-tachometer-alt"></i>
					<span>Dashboard</span></a>
			</li>

			<li class="nav-item">
				<a class="nav-link" href="<?= base_url('setting'); ?>">
					<i class="fa-solid fa-gear"></i>
					<span>Settings</span>
				</a>
			</li>
		</ul>


		<div id="content-wrapper" class="d-flex flex-column d-flex justify-content-start">

			<!-- Main Content -->
			<div id="content">

				<!-- Topbar -->
				<nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

					<!-- Sidebar Toggle (Topbar) -->
					<button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
						<i class="fa fa-bars"></i>
					</button>

					<!-- Topbar Search -->
					<form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
						<div class="input-group">
							<input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
							<div class="input-group-append">
								<button class="btn btn-primary" type="button">
									<i class="fas fa-search fa-sm"></i>
								</button>
							</div>
						</div>
					</form>
					<ul class="navbar-nav ml-auto">
						<div class="topbar-divider d-none d-sm-block"></div>

						<!-- Nav Item - User Information -->
						<li class="nav-item dropdown no-arrow">
							<a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<span class="mr-2 d-none d-lg-inline text-gray-600 small"><?= $this->session->status; ?></span>
								<img class="img-profile rounded-circle" src="<?= base_url('assets/img/user1.png'); ?>">
							</a>
							<!-- Dropdown - User Information -->
							<div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
								<a class="dropdown-item" href="#">
									<i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
									<?= $this->session->nama; ?><br>
									<?= $this->session->nis; ?><br>
									<?= $this->session->kelas; ?>
								</a>
								<a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
									<i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
									Logout
								</a>
							</div>
						</li>
					</ul>
				</nav>
				<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
					<div class="modal-dialog" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
								<button class="close" type="button" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">×</span>
								</button>
							</div>
							<div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
							<div class="modal-footer">
								<button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
								<a class="btn btn-primary" href="<?= base_url('logout'); ?>">Logout</a>
							</div>
						</div>
					</div>
				</div>
