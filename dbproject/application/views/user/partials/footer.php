</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="<?=base_url('assets/admin/js/spur.js')?>"></script>
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