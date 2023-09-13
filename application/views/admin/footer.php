<div class="footer">
	<hr/>
	<p class="text-center">
		&copy; 
		<?php 
			$date = date("Y");
			if($date == "2019") {
				echo "";
			}
			else {
				echo "2019 - ";
			}
		?>
		<?php echo date("Y"); ?> Nur Fadillah, 
		<i>All Right Reserved</i>
	</p>
</div>

<script src="<?php echo base_url(); ?>asset/vendor/jquery/jquery.js"></script>
<script src="<?php echo base_url(); ?>asset/vendor/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="<?php echo base_url(); ?>asset/vendor/datatables/datatables.min.js"></script>
<script src="<?php echo base_url(); ?>asset/vendor/responsive-tables/responsive-tables.js"></script>
<script>
$(document).ready( function () {
    $('#myTable').DataTable();
} );
</script>
</body>
</html>
