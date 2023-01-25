<!-- Footer -->
<footer class="sticky-footer bg-white">
	<div class="container my-auto">
		<div class="copyright text-center my-auto">
			<span>Copyright &copy; Nrulaci <?= date('Y'); ?> <a href="#">All rights
					reserved.</span>
		</div>
	</div>
</footer>
</div>
<!-- ./wrapper -->
<!-- Adminsb2 App -->
<script src="<?= base_url('assets/adminsb2/js/sb-admin-2.min.js'); ?>"></script>

<!-- Bootstrap core JavaScript-->
<script src="<?= base_url('assets/adminsb2/vendor/jquery/jquery.min.js') ?>"></script>
<script src="<?= base_url('assets/adminsb2/vendor/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>

<!-- Core plugin JavaScript-->
<script src="<?= base_url('assets/adminsb2/vendor/jquery-easing/jquery.easing.min.js') ?>"></script>
<script>
	$(document).ready(function() {
		setInterval(function() {
			var date = new Date();
			var h = date.getHours(),
				m = date.getMinutes(),
				s = date.getSeconds();
			h = ("0" + h).slice(-2);
			m = ("0" + m).slice(-2);
			s = ("0" + s).slice(-2);

			var time = h + ":" + m + ":" + s;
			$('.live-clock').html(time);
		}, 1000);
	})
</script>
</body>

</html>
