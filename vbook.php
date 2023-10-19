<html>
	<head>
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">  
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="CSS/swiper-bundle.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="https://code.jquery.com/ui/1.13.1/themes/smoothness/jquery-ui.css">
    <style type="text/css">
    	  	th{
        		vertical-align: top;
        	}
        	.thead{
		background: #4B4A4A;
	}

	th{
		color: #f3f3f3;
	}

	.tbody{
		background: #B1D1EC;
	}
    </style>
	</head>
	<body>
		<div class="container">
			<div class="row">
				<div class="col-md-12 mt-5">
					<h1>DOCTOR LIST</h1>
					<a href="<?php echo site_url("User/vbookappointments"); ?>" class="btn btn-dark" style="padding: 5px 50px; font-size: 18px;">Back</a>
					<hr>
				</div>
				<table class="table">
					<thead class="thead">
						<tr>
							<th>ID <br>No</th>
							<th>Doctor <br>Name</th>
							<th>Date</th>
							<th>Slot 1<br>[ 09:00-10:00 AM ]</th>
							<th>Slot 2<br>[ 10:00-11:00 AM ]</th>
							<th>Slot 3<br>[ 11:00-12:00 PM ]</th>
							<th>Slot 4<br>[ 12:00-01:00 PM ]</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody class="tbody">
						<?php foreach($bookingModel as $row) : ?>
							<tr>
								<td><?=$row['id'] ?></td>
								<td><?=$row['dname'] ?></td>
								<td><?=$row['date'] ?></td>
								<td><?=$row['time_slot_1'] ? 'BOOKED':'--------' ?></td>
								<td><?=$row['time_slot_2'] ? 'BOOKED':'--------' ?></td>
								<td><?=$row['time_slot_3'] ? 'BOOKED':'--------' ?></td>
								<td><?=$row['time_slot_4'] ? 'BOOKED':'--------' ?></td>
								<td>
	            	<a href="<?= base_url('public/vbookreg/'.$row['id'])?>" class="btn btn-dark">view paitent</a>
								</td>
							</tr>
						<?php endforeach; ?>
					</tbody>
				</table>
		  </div>
		</div>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"></script>
			<script>
		    // Show/hide time slots based on selected date
		    $('#date').change(function() {
		      var date = $(this).val();
		      // Make an AJAX request to retrieve the available time slots for the selected date
		        $.ajax({
		          url: '<?= base_url('booking/getAvailableTimeSlots') ?>',
		          type: 'post',
		          data: { date: date },
		           	success: function(response) {
		              // Hide all time slots
		              $('#time_slot option').hide();

		              // Show only the available time slots
		              $.each(response, function(index, timeSlot) {
		                $('#time_slot option[value="' + timeSlot + '"]').show();
		              });
		            }
		          });
		      });
	    </script>
	</body>
</html>
