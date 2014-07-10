	<footer>
		&copy; 2014 Alex Neises | Version <?php print $this->config->item('version'); ?>
	</footer>

	<script src="<?php print base_url('static/foundation/bower_components/foundation/js/vendor/jquery.js?').time(); ?>"></script>
	<script src="<?php print base_url('static/foundation/bower_components/foundation/js/foundation.min.js?').time(); ?>"></script>
	<script>
    	$(document).foundation();
  	</script>
</body>
</html>