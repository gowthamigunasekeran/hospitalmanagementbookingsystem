

<!-- Contact Section -->
<html>
<head>
    <style>
   <?php include 'css/style4.css';?>
   <?php include 'css/style.css';?>
</style>
</head>
    <body>
    <base href="<?= site_url("/"); ?>">
  <section id="contact">
    <div class="contact container">
      <div>
        <h3 class="section-title" style="font-size:40px">Contact<span>info</span></h3><br>
      </div>
      <div class="contact-items">
        <div class="contact-item">
          <div class="icon"><img src="img/imp12.jpg" /></div>
          <div class="contact-info">
            <h1 style="font-size: 25px; font-weight: bolder;">Phone</h1>
            <h2 style="font-size: 20px;">+1 23717414</h2>
            <h2 style="font-size: 20px;">+1 24891313</h2>
          </div>
        </div>
        <div class="contact-item">
          <div class="icon"><img src="img/imp13.jpg" /></div>
          <div class="contact-info">
            <h1  style="font-size: 25px; font-weight: bolder;">Email</h1>
            <h2  style="font-size: 20px;">best@gmail.com</h2>
          </div>
        </div>
        <div class="contact-item">
          <div class="icon"><img src="img/imp14.jpg" /></div>
          <div class="contact-info">
            <h1  style="font-size: 25px; font-weight: bolder;"> Address</h1>
            <h2  style="font-size: 15px;">No.325, PH road, chetpet, chennai-600029.</h2>
          </div>
        </div>
      </div>
    </div>
  </section>
 
  <section id="contactus" class="contact-section-padding">
  <div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="section-header text-center pb-9">
                <br> 
            </div>
        </div>
    </div>
      <div class="row">
        <div class="col-md-6">
                <?php $validation =  \Config\Services::validation(); ?>
                <form action="<?= base_url('public/contactus/store') ?>" method ="post">
                    <div class="row">
                        <h2 style="text-align: center">Contact Us</h2>
                        <div class="col-md-12">
                            <div class="mb-3">
                                <label class="form-label">Name</label>
                                <input type="name" name="name" id="name" class="form-control <?= ($validation->getError('name')) ? 'is-invalid' : ''  ?>"placeholder="Enter name" value="<?= set_value('name') ?>" >
                            <?php if($validation->getError('name')) : ?>
                                <div class="invalid-feedback"><?= $validation->getError('name') ?></div>
                                <?php endif; ?>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Phone number</label>
                                <input type="phone" name="phone" id="phone" class="form-control <?= ($validation->getError('phone')) ? 'is-invalid' : ''  ?>"placeholder="Enter phone number" value="<?= set_value('phone') ?>" >
                            <?php if($validation->getError('phone')) : ?>
                                <div class="invalid-feedback"><?= $validation->getError('phone') ?></div>
                                <?php endif; ?>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Email</label>
                                <input type="email" name="email" id="email" class="form-control <?= ($validation->getError('email')) ? 'is-invalid' : ''  ?>"placeholder="Enter E-mail" value="<?= set_value('email') ?>" >
                            <?php if($validation->getError('email')) : ?>
                                <div class="invalid-feedback"><?= $validation->getError('email') ?></div>
                                <?php endif; ?>
                            </div>
                            <div class="mb-3">
                            <label for="message">Message</label>
                            <textarea name="message" id="message" rows="4" class="form-control <?= ($validation->getError('message')) ? 'is-invalid' : ''  ?>" placeholder="Message" value="<?= set_value('message') ?>"></textarea>
                            <?php if($validation->getError('message')) : ?>
                                <div class="invalid-feedback"><?= $validation->getError('message') ?></div>
                                <?php endif; ?>
                            </div> 
                            <button class="btn btn-primary btn-lg btn-block mt-3">Submit</button>
                        </div>
                    </div>
                </form>
            </div><br><br>
            <div class="col-md-12" style="width: 50%; height: 700px;">
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7772.768143384892!2d80.231612!3d13.074828!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a526f9936fe7117%3A0x1e11d3e67405a7ee!2sDream%20Effects%20Multimedia%20%26%20IT%20Solutions%20-%20Web%20Development%20%7C%20Digital%20Marketing%20%7C%20Branding%20Designs!5e0!3m2!1sen!2sin!4v1676872977715!5m2!1sen!2sin" 
            width="600" height="500" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </div>
    <br>
</section>

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

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"></script>