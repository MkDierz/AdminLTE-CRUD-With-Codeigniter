<script type="text/javascript">
	var refInterval = window.setInterval('tampilSensor()', 3000); // 30 seconds

	var MyTable = $('#list-data').dataTable({
		"searching": false,
		"paging": false,
		"ordering": false,
		"info": false,
		"bPaginate": false
	});

	window.onload = function() {
		tampilSensor();
		<?php
		if ($this->session->flashdata('msg') != '') {
			echo "effect_msg();";
		}
		?>
	}

	function refresh() {
		MyTable = $('#list-data').dataTable({
			"searching": false,
			"paging": false,
			"ordering": false,
			"info": false,
			"bPaginate": false
		});
	}

	function effect_msg_form() {
		// $('.form-msg').hide();
		$('.form-msg').show(1000);
		setTimeout(function() {
			$('.form-msg').fadeOut(1000);
		}, 3000);
	}

	function effect_msg() {
		// $('.msg').hide();
		$('.msg').show(1000);
		setTimeout(function() {
			$('.msg').fadeOut(1000);
		}, 3000);
	}

	function tampilSensor() {
		$.get('<?php echo base_url('Sensor/tampil'); ?>',
			function(data) {
				MyTable.fnDestroy();
				$('#data-sensor').html(data);
				refresh();
			});
	}
	tampilSensor();
</script>