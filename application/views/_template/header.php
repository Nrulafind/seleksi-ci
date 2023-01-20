<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title><?= $title; ?></title>
	<!-- Tell the browser to be responsive to screen width -->
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	<!-- Bootstrap 3.3.7 -->
	<link rel="stylesheet" href="<?= base_url('assets/adminsb2/vendor/bootstrap/css/bootstrap.min.css'); ?>">
	<!-- Font Awesome -->
	<link rel="stylesheet" href="<?= base_url('assets/adminsb2/vendor/fontawesome-free/css/fontawesome.min.css'); ?>">
	<!-- Theme style -->
	<link rel="stylesheet" href="<?= base_url('assets/adminsb2/vendor/css/sb-admin-2.min.css'); ?>">
	<!-- Load Javascript -->
	<script src="<?= base_url('assets/adminsb2/vendor/jquery/jquery.min.js'); ?>"></script>
	<script src="<?= base_url('assets/js/sweetalert2.all.min.js'); ?>"></script>
</head>

<body class="hold-transition skin-blue fixed sidebar-mini" oncontextmenu="return false;" style="-moz-user-select: none; cursor: default;">
	<div class="wrapper">

		<header class="main-header">
			<?php require_once('topmenu.php'); ?>
		</header>

		<!-- sidebar -->
		<?php require_once('sidebar.php'); ?>
		<!-- /.sidebar -->

		<!-- Content Wrapper. Contains page content -->
		<div class="content-wrapper">
			<!-- Content Header (Page header) -->
			<section class="content-header">
				<h1>
					<?= $judul; ?>
				</h1>
				<ol class="breadcrumb">
					<li><a href="<?= base_url(); ?>"><i class="fa fa-dashboard"></i> Home</a></li>
					<li class="active"><?= $judul; ?></li>
				</ol>
			</section>

			<!-- Main content -->
			<section class="content">
