<!-- booking-form.php -->
<html>
    <head>
        <style type="text/css">
            <?php include 'css/style5.css'; ?>
        </style>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">  
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="CSS/swiper-bundle.min.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="https://code.jquery.com/ui/1.13.1/themes/smoothness/jquery-ui.css">
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css" />
    </head>
    <body>
    <div class="container">
    <div class="row" id="gyno">
                <h1>GYNECOLOGY</h1> 
            </div>
            <br>
            <br>
            <div class="row">
                <div class="col-md-3">
                    <div class="card-sl">
                        <div class="card-image2">
                            <img src="img/13.jpg">
                        </div>
                        <a class="card-action2"><i class="fa fa-heart"></i></a>
                            <form method="post" action="<?= base_url('public/book/submitBooking') ?>">
                            <div  class="card-heading">
                                <label>DR Jennie</label>
                                <h6> (Gynecologist)</h6>
                            </div>
                            <div class="card-text2">
                                <div class="seats">
                                <div hidden>
                                    <input type="text" name="dname" value="DR Jennie (Gynecologist)"> 
                                </div>                                      
                                    <label for="date">Date:</label>
                                    <input type="text" id="date" class="form-control datepicker" name="date" autocomplete="off" required />
                                    </div><hr>
                                <div class="seats" hidden>
                                    <label for="time_slot" style="color: black; font-weight: bolder;">AVAILABILITY  :  </label>
                                    <select name="time_slot" id="time_slot" class="form-control" disabled>
                                        <option>SELECT--TIME</option>
                                        <option value="time_slot_1" class="booked">09:00 am - 10:00 am</option>
                                        <option value="time_slot_2" class="booked">10:00 am - 11:00 am</option>
                                        <option value="time_slot_3" class="booked">11:00 am - 12:00 pm</option>
                                        <option value="time_slot_4" class="booked">12:00 pm - 01:00 pm</option>
                                    </select>
                                </div>
                            </div>
                            <div class="card-text2" style="font-weight: bolder; color: black;">
                                FEE : RS.500/-
                            </div>
                            <button type="submit" class="card-button2"> Book now</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html> 
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
     <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
    <script>
        $(document).ready(function() {
            $('.datepicker').datepicker({
                format: 'dd-mm-yyyy',
                startDate: new Date(),
                autoclose: true,
                todayHighlight: true,
            }).on('change', function(e) {
                // Enable time slot selection
                $('#time_slot').prop('disabled', false);
            }).on('changeDate', function(e) {
                // Unhidden time slot selection
                $('.seats').prop('hidden', false);
            });
        });
    </script>
    <script>
        $(document).ready(function() {
            $('.datepicker1').datepicker({
                format: 'dd-mm-yyyy',
                startDate: new Date(),
                autoclose: true,
                todayHighlight: true,
            }).on('change', function(e) {
                // Enable time slot selection
                $('#time_slot1').prop('disabled', false);
            }).on('changeDate', function(e) {
                // Unhidden time slot selection
                $('.seatss').prop('hidden', false);
            });
        });
    </script>
</body>
</html>