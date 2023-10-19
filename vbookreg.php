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
					<h1>PATIENT DETAILS</h1>
					<a href="<?php echo site_url("vbook"); ?>" class="btn btn-dark" style="padding: 5px 50px; font-size: 18px;">Back</a>
					<hr>
				</div>
				<table class="table">
					<thead class="thead">
						<tr>
							<th>ID No</th>
							<th>Patient Name</th>
							<th>DOB</th> 
							<th>Age</th> 
							<th>Gender</th> 
							<th>Email</th> 
						</tr>
					</thead>
					<tbody class="tbody">
						<?php foreach($results as $row) : ?>
						<tr>
							<td><?=$row['id'] 	 ?></td>
							<td><?=$row['name']  ?></td>
							<td><?=$row['dob']   ?></td>
							<td><?=$row['age']	 ?></td>
							<td><?=$row['gender']?></td>
							<td><?=$row['email'] ?></td>
						</tr>
						<?php endforeach; ?>
					</tbody>
				</table>
	    	</div>
		</div>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"></script>
	</body>
</html>
