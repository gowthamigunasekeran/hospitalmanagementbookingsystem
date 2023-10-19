<html>
    <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="https://code.jquery.com/ui/1.13.1/themes/smoothness/jquery-ui.css">

        <style type="text/css">

            .container{
            max-width: 500px;
            align-items: center;
        }

        .card{
            border: 5px solid;
            box-shadow: 5px 5px 25px black;
        }

         #hide1{
            float: right;
            display: none;
            font-size: 30px;
        }
        #hide2{
            float: right;
            position: relative;
            font-size: 30px;
        }
        </style>
    </head>
<body>
    <div id="image">
    <base href="<?= site_url("/"); ?>">

    <div class="row mx-0">
        <h1 style="text-align:center; background: #46AACA; font-size: 50px;">ADMIN PANEL</h1>
    </div>
    <div class="container my-5">
        <div class="card" style="background: #46AACA;">
            <form action="<?php echo site_url('Usee/reg');?>" method="post">
                <?php $validation =  \Config\Services::validation(); ?>
                <div class="card-body">
                    <h1 style="text-align: center; color: white;" >REGISTRATION</h1>
                <div class="form-group">
                    <h4><i class="fa fa-align-justify"></i> Name</h4>
                    <input type="name" name="name" id="name" class="form-control <?= ($validation->getError('name')) ? 'is-invalid' : ''  ?>"placeholder="Enter name" value="<?= set_value('name') ?>" >
                    <?php if($validation->getError('name')) : ?>
                        <div class="invalid-feedback"><?= $validation->getError('name') ?></div>
                    <?php endif; ?>
                </div>
                <div class="form-group ">
                    <br>
                    <h4><i class="fa fa-envelope-o"></i> Email</h4>
                    <input type="email" name="email" id="email" class="form-control <?= ($validation->getError('email')) ? 'is-invalid' : ''  ?>"placeholder="Enter E-mail" value="<?= set_value('email') ?>" >
                    <?php if($validation->getError('email')) : ?>
                        <div class="invalid-feedback"><?= $validation->getError('email') ?></div>
                    <?php endif; ?>
                </div>
                <div class="form-group">
                    <br>
                    <h4><i class="fa fa-key"></i> Password</h4>
                    <input type="password" name="password" id="password" class="form-control <?= ($validation->getError('password')) ? 'is-invalid' : ''  ?>"placeholder="Enter password" value="<?= set_value('password') ?>" >
                    <span class="eye" onclick="myFunction()">
                                <i id="hide1" class="fa fa-eye"></i>
                                <i id="hide2" class="fa fa-eye-slash"></i>
                            </span>
                    <?php if($validation->getError('password')) : ?>
                        <div class="invalid-feedback"><?= $validation->getError('password') ?></div>
                    <?php endif; ?>
                </div>
                <div class="form-group">
                    <br>
                    <h4><i class="fa fa-key"></i> Confirm password</h4>
                    <input type="password" name="cpassword" id="cpassword" class="form-control <?= ($validation->getError('cpassword')) ? 'is-invalid' : ''  ?>"placeholder="Enter confirm password" value="<?= set_value('cpassword') ?>" >
                    <span class="eye" onclick="myFunction()">
                                <i id="hide1" class="fa fa-eye"></i>
                                <i id="hide2" class="fa fa-eye-slash"></i>
                            </span>
                    <?php if($validation->getError('cpassword')) : ?>
                        <div class="invalid-feedback"><?= $validation->getError('cpassword') ?></div>
                    <?php endif; ?>
                </div>
                <br>
                <button type ="submit" class="btn btn-primary">REGISTER</button>
                <a href="loggin" class="btn btn-dark">BACK</a>
                </div>
            </form>
        </div>
    </div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script type="text/javascript">
        function myFunction(){
            var x = document.getElementById("password");
            var y = document.getElementById("hide1");
            var z = document.getElementById("hide2");

            if(x.type =='password'){
                x.type = "text";
                y.style.display = "block";
                z.style.display = "none";
            }
            else{
                x.type = "password";
                y.style.display = "none";
                z.style.display = "block";   
            }
        }
    </script>
</div>
</body>
</html>