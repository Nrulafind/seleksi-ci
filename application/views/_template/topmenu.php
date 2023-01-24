<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
	<a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= base_url(); ?>">
		<div class="sidebar-brand-icon">
			<i class="fas fa-book-reader"></i>
		</div>
		<div class="sidebar-brand-text mx-3">LMS<br>SMK Ma'arif 1 Piyungan</div>
	</a>

	<!-- Header Navbar: style can be found in header.less -->
	<nav class="navbar navbar-static-top">
		<!-- Sidebar toggle button-->
		<a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
			<span class="sr-only">Toggle navigation</span>
		</a>
		<!-- Navbar Right Menu -->
		<div class="navbar-custom-menu">
			<ul class="nav navbar-nav">
				<!-- User Account: style can be found in dropdown.less -->
				<li class="dropdown user user-menu">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">
						<img src="<?= base_url('assets/img/user1.png'); ?>" class="user-image" alt="User Image">
						<span class="hidden-xs"><?= $this->session->nama; ?></span>
					</a>
					<ul class="dropdown-menu">
						<!-- User image -->
						<li class="user-header">
							<img src="<?= base_url('assets/img/user1.png'); ?>" class="img-circle" alt="User Image">

							<p><?= $this->session->nama; ?><br>
								<?= $this->session->nis; ?><br>
								<?= $this->session->kelas; ?></p>
						</li>
						<!-- Menu Footer-->
						<li class="user-footer">
							<div>
								<a href="<?= base_url('logout'); ?>" class="btn btn-danger btn-block btn-flat"><i class="fa fa-sign-out"></i> Keluar</a>
							</div>
						</li>
					</ul>
				</li>
			</ul>
		</div>

	</nav>
