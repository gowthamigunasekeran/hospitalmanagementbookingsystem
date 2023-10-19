<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>ADMIN PANEL</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
	<style type="text/css">
	.btn{
		color: white;
	}

	.thead{
		background: #015EAD;
	}

	th{
		color: #f3f3f3;
	}

	.tbody{
		background: #B1D1EC;
	}
	nav{
    background: #015EAD;
  }

  .nav-item .nav-link{
    color: white;
  }
  .nav-item .nav-link{
    font-size: 25px;
    align-items: right;
  }

  span{
    color: black;
  }

  h2{
    color: white;
  }
  .nav-item .nav-link:hover {
    color: black;
  }

  .modal-header{
  	background: #015EAD;
  }
	</style>
</head>
<body>
	
	<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <h2>BEST <span>HOSPITAL</span><h2>
      </li>
    </ul>
    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
      <li class="nav-item d-none d-sm-inline-block">
        <a href="<?php echo site_url("User/hoome"); ?>" class="nav-link">HOME</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="<?php echo site_url("User/vbookappointments"); ?>" class="nav-link">DOCTORS LIST</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="<?php echo site_url("User/logout"); ?>" class="nav-link btn btn-danger mx-1" data-bs-toggle="modal" data-bs-target="#myModals">LOGOUT</a>
    			<div class="modal" id="myModals">
						<div class="modal-dialog">
				        <div class="modal-content">
				            <div class="modal-header">
				                <h4 class="modal-title" style="margin-left: 120px;">CONFIRM LOGOUT</h4>
				            </div>
				            <div class="modal-body">
				                You want to LOGOUT ?
				            </div>
				            <div class="modal-footer">
												<a href="<?php echo site_url("User/logout"); ?>" class="btn btn-danger">YES</a>
				                <a href=" " class="btn btn-dark">Cancel</a>
				            </div>
				        </div>
				    </div>
					</div>
      </li>
    </ul>
</nav>

<div class="my-3">
  <?php $session = session();?>
  <?php echo  $session->getFlashdata('loggin');?>
  <h1>Welcome <span style="color: #133486"><?php echo $session->get('user');?></span></h1>    
</div>
	<div class="container">
	<div class="row">
		<div class="col-md-12 mt-5">
			<h1>PATIENT DETAILS</h1>
				<a href="<?php echo site_url("User/vbookappointments"); ?>" class="btn" style="background: #015EAD; padding: 5px 50px; font-size: 18px;">Back</a>
				<hr>
		</div>
			<table class="table">
				<thead class="thead">
					<tr>
						<th>Token No</th>
						<th>Patient Name</th>
						<th>Dob</th>
						<th>Age</th>
						<th>Phone</th>
						<th>Gender</th>
						<th>Email</th>
					</tr>
				</thead>
				<tbody class="tbody">
					<?php foreach($results as $row) : ?>
					<tr>
						<td><?= $row['d_id'] ?></td>
						<td><?= $row['pname'] ?></td>
						<td><?= $row['dob'] ?></td>
						<td><?= $row['age'] ?></td>
						<td><?= $row['phone'] ?></td>
						<td><?= $row['gender'] ?></td>
						<td><?= $row['email'] ?></td>
					</tr>
					<?php endforeach; ?> 
				</tbody>
			</table>
	    </div>
	</div>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"></script>
</body>
</html>




