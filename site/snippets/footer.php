<!--Footer-->
<div class="container">
	<p><?= html($site->footer()) ?></p>
</div>

<!--jQuery Plugin-->
<?= js('assets/js/jquery-1.9.1.min.js') ?>
<?= js('assets/js/jquery.pageslide.min.js') ?>

    
<script type="text/javascript">

    $(document).ready(function() {

    	$('.logo').pageslide();

    });
</script>

</body>
</html>
