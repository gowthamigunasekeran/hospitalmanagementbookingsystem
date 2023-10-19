<!DOCTYPE html>
<html>
  <head>
  <base href="<?= site_url("/"); ?>">
    <title>Registration Form</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <style>
   <?php include 'css/style6.css';

</style>
  </head>
  <body>
    
  <?php $validation =  \Config\Services::validation(); ?>
                    
    <div class="testbox">
    <form action="<?= base_url('public/register/store') ?>" method ="post">
    
        <div class="banner">
        
          <h1>REGISTRATION <br><br>FORM</h1>
        </div>
        <div class="item">
            <p>NAME</p>
            <div class="item">
            <input type="name" name="name" id="name" class="form-control <?= ($validation->getError('name')) ? 'is-invalid' : ''  ?>"placeholder="Enter name" value="<?= set_value('name') ?>" >
                            <?php if($validation->getError('name')) : ?>
                                <div class="invalid-feedback"><?= $validation->getError('name') ?></div>
                                <?php endif; ?>
                            
              
            </div>
          </div>
        <div class="item">
          <p>DATE OF BIRTH</p>
          
          <input type="date" name="date" id="date" class="form-control <?= ($validation->getError('date')) ? 'is-invalid' : ''  ?>"placeholder="Enter date" value="<?= set_value('date') ?>" >
                            <?php if($validation->getError('date')) : ?>
                                <div class="invalid-feedback"><?= $validation->getError('date') ?></div>
                                <?php endif; ?>
          <i class="fas fa-calendar-alt"></i>
        </div>
        <div class="item">
            <p>Age</p>
            <br>
            <input type="age" name="age" id="age" class="form-control <?= ($validation->getError('age')) ? 'is-invalid' : ''  ?>"placeholder="Enter age" value="<?= set_value('age') ?>" >
                            <?php if($validation->getError('age')) : ?>
                                <div class="invalid-feedback"><?= $validation->getError('age') ?></div>
                                <?php endif; ?>
                            
          </div>
          <div class="question">
            <p>GENDER</p>
            <br>
            <div class="question-answer">
              <div>
                <input type="radio" value="male" id="radio_1" name="gender"/>
                <label for="radio_1" class="radio"><span>Male</span></label>
              </div>
              <div>
              <input type="radio" value="female" id="radio_2" name="gender"class="form-control <?= ($validation->getError('gender')) ? 'is-invalid' : ''  ?>" value="<?= set_value('gender') ?>" >
                           
                <label for="radio_2" class="radio"><span>Female</span></label>
                <?php if($validation->getError('gender')) : ?>
                                <div class="invalid-feedback"><?= $validation->getError('gender') ?></div>
                                <?php endif; ?>
              </div>
            </div>
          </div>
          <div class="item">
            <p>PHONE</p>
            <br>
            <input type="phone" name="phone" id="phone" class="form-control <?= ($validation->getError('phone')) ? 'is-invalid' : ''  ?>"placeholder="Enter phone number" value="<?= set_value('phone') ?>" >
                            <?php if($validation->getError('phone')) : ?>
                                <div class="invalid-feedback"><?= $validation->getError('phone') ?></div>
                                <?php endif; ?>
                            
          </div>
        
        <div class="item">
          <p>EMAIL</p>
          <br>
          <input type="email" name="email" id="email" class="form-control <?= ($validation->getError('email')) ? 'is-invalid' : ''  ?>"placeholder="Enter E-mail" value="<?= set_value('email') ?>" >
                            <?php if($validation->getError('email')) : ?>
                                <div class="invalid-feedback"><?= $validation->getError('email') ?></div>
                                <?php endif; ?>
                           
         </div>
        
        
          
        
        <div class="item">
          <p>ADDRESS</p>
          <textarea name="address" id="address" rows="4" class="form-control <?= ($validation->getError('address')) ? 'is-invalid' : ''  ?>" placeholder="address" value="<?= set_value('address') ?>"></textarea>
                            <?php if($validation->getError('address')) : ?>
                                <div class="invalid-feedback"><?= $validation->getError('address') ?></div>
                                <?php endif; ?>
                           
                      
        </div>
       
        <div class="btn-block">
          <button type="submit" href="/">SUBMIT</button>
        </div>
      </form>
    </div>
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
  </body>
</html>