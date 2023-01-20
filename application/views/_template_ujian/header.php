<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title><?= $title; ?></title>
	<!-- Tell the browser to be responsive to screen width -->
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<!-- Latest compiled and minified JavaScript -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	<!-- Font Awesome -->
	<link rel="stylesheet" href="<?= base_url('assets/adminsb2/vendor/fontawesome-free/css/fontawesome.min.css'); ?>">
	<!-- Theme style -->
	<link rel="stylesheet" href="<?= base_url('assets/adminsb2/css/sb-admin-2.min.css'); ?>">
	<link rel="stylesheet" href="<?= base_url('assets/css/ujian.css'); ?>">


	<!-- Load Javascript -->
	<script src="<?= base_url('assets/adminsb2/vendor/jquery/jquery.min.js'); ?>"></script>
	<script src="<?= base_url('assets/js/jquery.countdown.min.js'); ?>"></script>
	<script src="<?= base_url('assets/js/sweetalert2.all.min.js'); ?>"></script>
	<script src="<?= base_url('assets/js/app.js'); ?>"></script>
	<script>
		var base_url = '<?= base_url(); ?>';
	</script>
</head>

<body class="hold-transition skin-blue layout-top-nav" oncontextmenu="return false;" style="-moz-user-select: none; cursor: default;">
	<div class="wrapper">

		<header class="main-header">
			<?php require_once('menu.php'); ?>
		</header>
		<!-- Full Width Column -->
		<div class="content-wrapper">
			<div class="container">
				<!-- Content Header (Page header) -->
				<section class="content-header">
					<h1>
						<?= $judul ?>
					</h1>
					<ol class="breadcrumb">
						<li><a href=""><i class="fa fa-dashboard"></i> <?= $detil_soal->nama_ujian; ?></a></li>
						<li><?= $detil_soal->kelas; ?></li>
						<li><?= $judul; ?></li>
					</ol>
				</section>

				<!-- Main content -->
				<section class="content">
