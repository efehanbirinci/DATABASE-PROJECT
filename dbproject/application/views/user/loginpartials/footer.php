<script src="<?=base_url('assets/login/vendor/jquery/jquery-3.2.1.min.js')?>"></script>
	<script src="<?=base_url('assets/login/vendor/bootstrap/js/popper.js')?>"></script>
	<script src="<?=base_url('assets/login/vendor/bootstrap/js/bootstrap.min.js')?>"></script>
	<script src="<?=base_url('assets/login/vendor/select2/select2.min.js')?>"></script>
	<script src="<?=base_url('assets/login/vendor/tilt/tilt.jquery.min.js')?>"></script>
	<script>
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
	<script src="<?=base_url('assets/login/js/main.js')?>"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<?php if ($alert): ?>
  <script type="text/javascript">
  Swal.fire({
title: '<?=$alert['status']?>',
text: '<?=$alert['content']?>',
icon: '<?=$alert['status']?>'
});
  </script>
<?php endif; ?>
</body>

</html>