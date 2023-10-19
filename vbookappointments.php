<!DOCTYPE html>
<html>
<head>
	<title>ADMIN PANEL</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
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
	
	.roww{
		margin: 20px 0;
		padding: 5px 0 5px 0 ;
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
		<form>
		<div class="col-md-12 my-5">
			<h1>Doctors list</h1>
			<a href="<?php echo site_url("User/viewreg"); ?>" class="btn" style="background: #015EAD;">View all patients</a>	
			<hr>
			<div class="input-group my-3">
  				<input name="q" type="text" class="form-control form-control-lg mx-1" placeholder="search">
  				<div class="input-group-append">
    				<button class="btn btn-dark btn-lg" type="submit" id="button-addon2">Search</button>
						<a href="<?php echo site_url("User/vbookappointments"); ?>" class="btn btn-dark btn-lg">Back</a>	
  				</div>
			</div>			
				<?php
					if(session()->getFlashdata('status'))
					{
						echo"<h3>" .session()->getFlashdata('status')."</h3>";
					}
				?>
		</div>
	</form>
			<table class="table">
				<thead class="thead">
					<tr>
						<th>ID</th>
						<th>Doctor Name</th>
						<th>date</th>
						<th>availability</th>
						<th>Patient Name</th>
						<th>ACTION</th>
					</tr>
				</thead>
				<tbody class="tbody">
					<tr>
						<?php	foreach ($results as $row) : {
                echo '<td>'.$row->d_id . ' </td> <td>'. $row->dname . '</td><td>' .$row->date.'</td><td>'.$row->availability. '</td><td>' . $row->pname . '</td><br>';
            } ?>
            <td>
            	<a href="<?= base_url('public/User/viewreg1/'.$row->d_id)?>" class="btn btn-info">view paitent</a>
							<a href="<?= base_url('public/User/delete/'.$row->d_id)?>" class="btn btn-danger my-1">Delete</a>
            </td>
					</tr>
					<?php endforeach; ?>
				</tbody>
			</table>
	    </div>
	</div>
<link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>">
<script src="<?php echo base_url('assets/js/jquery.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/js/bootstrap.min.js'); ?>"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script>
      //$(document).ready(function () {
       
        <?php  if(session()->getFlashdata('status')) { ?>
            swal({
              title: "<?=session()->getFlashdata('status')?>",
              text: "<?=session()->getFlashdata('status_text')?>",
              icon: "<?=session()->getFlashdata('status_icon')?>",
              button: "ok!",
            });


        <?php } ?>


      //});
    </script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"></script>
</body>
</html>
