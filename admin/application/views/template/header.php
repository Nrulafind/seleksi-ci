<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title><?= $title; ?> | LMS SMK Ma'arif 1 Piyungan</title>
	<!-- Tell the browser to be responsive to screen width -->
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	<!-- Sweetalert -->
	<link rel="stylesheet" href="<?= base_url('./../assets/css/sweetalert2.min.css'); ?>">
	<!-- CSS -->
	<link rel="stylesheet" href="<?= base_url('./../assets/css/style-admin.css'); ?>">
	<!-- Sweetalert -->
	<script src="<?= base_url('./../assets/js/sweetalert2.all.min.js'); ?>"></script>
	<!-- Custom fonts for this template-->
	<link href="<?= base_url('./../assets/adminsb2/vendor/fontawesome-free/css/all.min.css'); ?>" rel="stylesheet" type="text/css">
	<link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
	<!-- Custom styles for this template-->
	<link href="<?= base_url('./../assets/adminsb2/css/sb-admin-2.min.css'); ?>" rel="stylesheet">

</head>

<body id="page-top">
	<!-- Page Wrapper -->
	<div id="wrapper">

		<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
			<!-- Sidebar - Brand -->
			<a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= base_url(); ?>">
				<div class="sidebar-brand-icon">
					<i class="fas fa-book-reader"></i>
				</div>
				<div class="sidebar-brand-text mx-3">LMS<br>SMK Ma'arif 1 Piyungan</div>
			</a>

			<!-- Divider -->
			<hr class="sidebar-divider my-0">

			<!-- Sidebar - Brand -->
			<a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= base_url(); ?>">
				<div class="sidebar-brand-text mx-3">
					<p><?= $this->session->username; ?> <i class="fas fa-circle text-success">
						</i></p>
				</div>
			</a>
			<!-- Divider -->
			<hr class="sidebar-divider my-0">
			<!-- Nav Item - Dashboard -->
			<li class="nav-item active">
				<a class="nav-link" href="<?= base_url(); ?>">
					<i class="fas fa-fw fa-tachometer-alt"></i>
					<span>Dashboard</span></a>
			</li>
			<!-- Divider -->
			<hr class="sidebar-divider my-0">
			<!-- Nav Item - Pages Collapse Menu -->

			<!-- Heading -->
			<div class="sidebar-heading">
				MENU NAVIGASI
			</div>
			<?php
			//Menu navigasi admin
			if ($this->session->status == 'admin') { ?>
				<li class="nav-item">
					<a class="nav-link" href="<?= base_url('guru'); ?>">
						<i class="fa fa-users "></i>
						<span>Guru</span>
					</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="<?= base_url('mapel'); ?>">
						<i class="fa fa-clone"></i>
						<span>Mapel</span>
					</a>
				</li>
				<li class="nav-item">
					<a class="nav-link " href="<?= base_url('tsoal'); ?>">
						<i class="fa fa-list-alt"></i>
						<span>Tambah Soal</span>
					</a>
				</li>
				<!-- Menu Soal -->
				<li class="nav-item">
					<a class="nav-link collapsed" data-toggle="collapse" data-target="#collapseSoal" href="#" aria-expanded="true" aria-controls="collapsePages">
						<i class="fa fa-list text-aqua"></i> <span>Soal</span>
					</a>
					<ul id="collapseSoal" class="collapse" data-parent="#accordionSidebar">
						<?php foreach ($perkelas as $pk) { ?>
							<li class="nav-item" style="list-style: none;">
								<a href="#" class="nav-link collapsed" data-toggle="collapse" data-target="#collapseSoalKelas"><i class="fa fa-angle-double-right" aria-hidden="true"></i>Kelas <?= $pk->kelas; ?></a>
								<ul id="collapseSoalKelas" class="collapse" style="list-style: none;">
									<?php
									$where = array('kelas' => $pk->kelas);
									$perkelasjurusan = $this->m_admin->perkelasjurusan($where)->result();
									foreach ($perkelasjurusan as $pkj) { ?>
										<li style="list-style: none;"><a class="nav-link" href="<?= base_url('soal/' . $pkj->id_kelas); ?>"><?= $pkj->kode_kelas; ?></a></li>
									<?php } ?>
								</ul>
							</li>
						<?php } ?>
					</ul>
				</li>
				<!-- End Menu Soal -->
				<!-- Menu Nilai -->
				<li class="nav-item">
					<a class="nav-link collapsed" data-toggle="collapse" data-target="#collapseNilai" href="#" aria-expanded="true" aria-controls="collapsePages">
						<i class="fa fa-table text-aqua"></i> <span>Nilai</span>
					</a>
					<ul id="collapseNilai" class="collapse" data-parent="#accordionSidebar">
						<?php foreach ($perkelas as $pk) { ?>
							<li class="nav-item" style="list-style: none;">
								<a href="#" class="nav-link collapsed" data-toggle="collapse" data-target="#collapseNilaiKelas"><i class="fa fa-angle-double-right" aria-hidden="true"></i>Kelas <?= $pk->kelas; ?></a>
								<ul id="collapseNilaiKelas" class="collapse" style="list-style: none;">
									<?php
									$where = array('kelas' => $pk->kelas);
									$perkelasjurusan = $this->m_admin->perkelasjurusan($where)->result();
									foreach ($perkelasjurusan as $pkj) { ?>
										<li style="list-style: none;"><a class="nav-link" href="<?= base_url('nilai/' . $pkj->id_kelas); ?>"><?= $pkj->kode_kelas; ?></a></li>
									<?php } ?>
								</ul>
							</li>
						<?php } ?>
					</ul>
				</li>
				<!-- End Menu Nilai -->
				<li class="nav-item">
					<a class="nav-link" href="<?= base_url('siswa'); ?>">
						<i class="fa fa-user "></i>
						<span>Siswa</span>
					</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="<?= base_url('kelas'); ?>">
						<i class="fa fa-th"></i>
						<span>Kelas</span>
					</a>
				</li>
				<li class="nav-item">
					<a class="nav-link " href="<?= base_url('ujian'); ?>">
						<i class="fa fa-th-list"></i>
						<span>Ujian</span>
					</a>
				</li>

			<?php } ?>
			<?php
			// Menu navigasi guru
			if ($this->session->status == 'guru') { ?>
				<li class="nav-item">
					<a class="nav-link " href="<?= base_url('tsoal'); ?>">
						<i class="fa fa-list-alt"></i>
						<span>Tambah Soal</span>
					</a>
				</li>
				<!-- Menu Soal -->
				<li class="nav-item">
					<a class="nav-link collapsed" data-toggle="collapse" data-target="#collapseSoal" href="#" aria-expanded="true" aria-controls="collapsePages">
						<i class="fa fa-list text-aqua"></i> <span>Soal</span>
					</a>
					<ul id="collapseSoal" class="collapse" data-parent="#accordionSidebar">
						<?php foreach ($perkelas as $pk) { ?>
							<li class="nav-item" style="list-style: none;">
								<a href="#" class="nav-link collapsed" data-toggle="collapse" data-target="#collapseSoalKelas"><i class="fa fa-angle-double-right" aria-hidden="true"></i>Kelas <?= $pk->kelas; ?></a>
								<ul id="collapseSoalKelas" class="collapse" style="list-style: none;">
									<?php
									$perkelasjurusan = $this->m_admin->perkelasjurusan_g($pk->kelas, $this->session->id)->result();
									foreach ($perkelasjurusan as $pkj) { ?>
										<li style="list-style: none;"><a class="nav-link" href="<?= base_url('soal/' . $pkj->id_kelas); ?>"><?= $pkj->kode_kelas; ?></a></li>
									<?php } ?>
								</ul>
							</li>
						<?php } ?>
					</ul>
				</li>
				<!-- End Menu Soal -->
				<!-- Menu Nilai -->
				<li class="nav-item">
					<a class="nav-link collapsed" data-toggle="collapse" data-target="#collapseNilai" href="#" aria-expanded="true" aria-controls="collapsePages">
						<i class="fa fa-table text-aqua"></i> <span>Nilai</span>
					</a>
					<ul id="collapseNilai" class="collapse" data-parent="#accordionSidebar">
						<?php foreach ($perkelas as $pk) { ?>
							<li class="nav-item" style="list-style: none;">
								<a href="#" class="nav-link collapsed" data-toggle="collapse" data-target="#collapseNilaiKelas"><i class="fa fa-angle-double-right" aria-hidden="true"></i>Kelas <?= $pk->kelas; ?></a>
								<ul id="collapseNilaiKelas" class="collapse" style="list-style: none;">
									<?php
									$perkelasjurusan = $this->m_admin->perkelasjurusan_g($pk->kelas, $this->session->id)->result();
									foreach ($perkelasjurusan as $pkj) { ?>
										<li style="list-style: none;"><a class="nav-link" href="<?= base_url('nilai/' . $pkj->id_kelas); ?>"><?= $pkj->kode_kelas; ?></a></li>
									<?php } ?>
								</ul>
							</li>
						<?php } ?>
					</ul>
				</li>
				<!-- End Menu Nilai -->
			<?php } ?>
			<!-- Divider -->
			<hr class="sidebar-divider d-none d-md-block">

			<!-- Sidebar Toggler (Sidebar) -->
			<div class="text-center d-none d-md-inline">
				<button class="rounded-circle border-0" id="sidebarToggle"></button>
			</div>
		</ul>
	</div>


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

				<!-- Topbar Navbar -->
				<ul class="navbar-nav ml-auto">
					<div class="topbar-divider d-none d-sm-block"></div>

					<!-- Nav Item - User Information -->
					<li class="nav-item dropdown no-arrow">
						<a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							<span class="mr-2 d-none d-lg-inline text-gray-600 small"><?= $this->session->status; ?></span>
							<img class="img-profile rounded-circle" src="<?= base_url('./../assets/adminsb2/img/avatar5.png'); ?>">
						</a>
						<!-- Dropdown - User Information -->
						<div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
							<a class="dropdown-item" href="#">
								<i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
								Profile
							</a>
							<a class="dropdown-item" href="<?= base_url('setting'); ?>">
								<i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
								Settings
							</a>
							<div class="dropdown-divider"></div>
							<a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
								<i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
								Logout
							</a>
						</div>
					</li>


				</ul>

			</nav>
			<!-- End of Topbar -->
			<!-- Logout Modal-->
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
							<a class="btn btn-primary" href="<?= base_url('admin/logout'); ?>">Logout</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
