<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>ADMIN PANEL</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>


<style type="text/css">
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
<body background="img/1.jpg">
  <base href="<?= site_url("/"); ?>">
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
                        <a href="<?php echo site_url("User/hoome"); ?>" class="btn btn-dark">Cancel</a>
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

<!--<div class="container">
  <div class="row">
    <div class="col-lg-4 col-md-6" style="margin-top: 20px">
      <div class="card border-primary">
        <div class="card-body bg-primary text-white">
          <div class="row">
            <div class="col-3">
              <i class="fa fa-random fa-5x"></i>
            </div>
            <div class="col-9 text-right">
              <h1>6</h1>
              <h4>Branches</h4>
            </div>
          </div>
        </div>
        <a href="https://www.linkedin.com/in/younes-elmorabit" target="_blank">
          <div class="card-footer bg-light text-primary">
            <span class="float-left">More details</span>
            <span class="float-right"><i class="fa fa-arrow-circle-right"></i></span>
            <div class="clearfix"></div>
          </div>
        </a>
      </div>
    </div>
    <div class="col-lg-4 col-md-6" style="margin-top: 20px">
      <div class="card border-secondary">
        <div class="card-body bg-secondary text-white">
          <div class="row">
            <div class="col-3">
              <i class="fa fa-user-graduate fa-5x"></i>
            </div>
            <div class="col-9 text-right">
              <h1>20+</h1>
              <h4>Specialist</h4>
            </div>
          </div>
        </div>
        <a href="https://www.linkedin.com/in/younes-elmorabit" target="_blank">
          <div class="card-footer bg-light text-secondary">
            <span class="float-left">More details</span>
            <span class="float-right"><i class="fa fa-arrow-circle-right"></i></span>
            <div class="clearfix"></div>
          </div>
        </a>
      </div>
    </div>
    <div class="col-lg-4 col-md-6" style="margin-top: 20px">
      <div class="card border-success">
        <div class="card-body bg-success text-white">
          <div class="row">
            <div class="col-3">
              <i class="fa fa-user-tie fa-5x"></i>
            </div>
            <div class="col-9 text-right">
              <h1>50+</h1>
              <h4>Doctors & nurses</h4>
            </div>
          </div>
        </div>
        <a href="https://www.linkedin.com/in/younes-elmorabit" target="_blank">
          <div class="card-footer bg-light text-success">
            <span class="float-left">More details</span>
            <span class="float-right"><i class="fa fa-arrow-circle-right"></i></span>
            <div class="clearfix"></div>
          </div>
        </a>
      </div>
    </div>
    <div class="col-lg-4 col-md-6" style="margin-top: 20px">
      <div class="card border-danger">
        <div class="card-body bg-danger text-white">
          <div class="row">
            <div class="col-3">
              <i class="fa fa-book fa-5x"></i>
            </div>
            <div class="col-9 text-right">
              <h1>60+</h1>
              <h4>Sucessful surgeries</h4>
            </div>
          </div>
        </div>
        <a href="https://www.linkedin.com/in/younes-elmorabit" target="_blank">
          <div class="card-footer bg-light text-danger">
            <span class="float-left">More details</span>
            <span class="float-right"><i class="fa fa-arrow-circle-right"></i></span>
            <div class="clearfix"></div>
          </div>
        </a>
      </div>
    </div>
    <div class="col-lg-4 col-md-6" style="margin-top: 20px">
      <div class="card border-warning">
        <div class="card-body bg-warning text-white">
          <div class="row">
            <div class="col-3">
              <i class="fa fa-university fa-5x"></i>
            </div>
            <div class="col-9 text-right">
              <h1>40+</h1>
              <h4>Well maintained rooms</h4>
            </div>
          </div>
        </div>
        <a href="https://www.linkedin.com/in/younes-elmorabit" target="_blank">
          <div class="card-footer bg-light text-warning">
            <span class="float-left">More details</span>
            <span class="float-right"><i class="fa fa-arrow-circle-right"></i></span>
            <div class="clearfix"></div>
          </div>
        </a>
      </div>
    </div>
    <div class="col-lg-4 col-md-6" style="margin-top: 20px">
      <div class="card border-info">
        <div class="card-body bg-info text-white">
          <div class="row">
            <div class="col-3">
              <i class="fa fa-suitcase fa-5x"></i>
            </div>
            <div class="col-9 text-right">
              <h1>12+</h1>
              <h4>Ambulance</h4>
            </div>
          </div>
        </div>
        <a href="https://www.linkedin.com/in/younes-elmorabit" target="_blank">
          <div class="card-footer bg-light text-info">
            <span class="float-left">More details</span>
            <span class="float-right"><i class="fa fa-arrow-circle-right"></i></span>
            <div class="clearfix"></div>
          </div>
        </a>
      </div>
    </div>
  </div>
</div>
</div>-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"></script>
</body>
</html>