    </section>
    <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <footer class="main-footer">
    	<div class="pull-right hidden-xs">
    		<b>Version</b> 1.0
    	</div>
    	<strong>Copyright &copy; <?= date('Y'); ?> <a href="<?= base_url(); ?>">Nrulaci</a>.</strong> All rights
    	reserved.
    </footer>
    </div>
    <!-- ./wrapper -->

    <!-- Bootstrap 3.3.7 -->
    <script src="<?= base_url('assets/adminsb2/vendor/bootstrap/js/bootstrap.min.js'); ?>"></script>
    <!-- Adminsb2 App -->
    <script src="<?= base_url('assets/adminsb2/js/sb-admin-2.min.js'); ?>"></script>
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
