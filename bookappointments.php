<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<style type="text/css">
	<?php include 'css/style5.css'; ?>

    </style>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="https://code.jquery.com/ui/1.13.1/themes/smoothness/jquery-ui.css">
</head>
<body><br><br><br><br><br><br>
    <div class="container my-5"> 
        <div class="row">
            <h2>CATEGORIES</h2>
            <p>Please choose your speciality below:</p>
        </div>
        <div class="row">
            <div class="col"> 
                <a href="bookappointments#gc" class="list-group-item list-group-item-action">GENERAL CHECKUP</a> 
            </div>
            <div class="col"> 
                <a href="bookappointments#ent" class="list-group-item list-group-item-action">ENT</a>
            </div> 
            <div class="col">
                <a href="bookappointments#cardio" class="list-group-item list-group-item-action">CARDIOLOGY</a> 
            </div>
        </div><br>
        <div class="row"> 
            <div class="col"> 
                <a href="bookappointments#dentistry" class="list-group-item list-group-item-action">DENTISTRY</a>
            </div> 
            <div class="col"> 
                <a href="bookappointments#eye" class="list-group-item list-group-item-action">EYE SPECIALIST</a> 
            </div> 
            <div class="col"> 
                <a href="bookappointments#gyno" class="list-group-item list-group-item-action">GYNECOLOGY</a> 
            </div> 
        </div>
        <base href="<?= site_url("/"); ?>"> 
        <?php $validation =  \Config\Services::validation(); ?> <hr> <br> <br>
        <div class="row" id="gc">
            <h1>GENERAL PHYSICIAN</h1> 
        </div>
        <br>
        <br>
        <div class="row">
            <div class="col-md-3">
                <div class="card-sl">
                    <div class="card-image2">
                        <img src="img/16.jpg">
                    </div>
                    <a class="card-action2"><i class="fa fa-heart"></i></a>
                        <form action="<?= base_url('public/bookappointments/store') ?>" method ="post">
                        <div  class="card-heading">
                            <label>DR JACK</label>
                            <h6> (General physician)</h6>
                            <div hidden>
                                <input type="text" name="dname" value="DR Jack (General physician)"> 
                            </div>
                        </div>
                        <div class="card-text2">
                            <div class="seats"> 
                                <label class="my-2" style="color: black; font-weight: bolder;">SELECT DATE: </label>
                                <input  type="text" name="date" id="datepicker11" placeholder="dd-mm-yy" required> 
                            </div><hr>
                            <div id="divvv">
                            <div class="seats">
                                <label style="color: black; font-weight: bolder;">AVAILABILITY: </label><br>
                                <div class="row" >
                                    <div class="seat col-md-6 my-2">
                                      <input type="radio" id="slot38" name="availability" value="10:00-11:00 AM">
                                      <label for="slot38"> 10:00-11:00 AM</label>
                                    </div>
                                    <div class="seat col-md-6 my-2"> 
                                      <input type="radio" id="slot39" name="availability" value="12:00-01:00 PM">
                                      <label for="slot39"> 12:00-01:00 PM</label><br>
                                    </div>
                                    <div class="seat col-md-6">
                                      <input type="radio" id="slot40" class=" <?= ($validation->getError('availability')) ? 'is-invalid' : ''  ?>" name="availability" value="03:00-04:00 PM">
                                      <label for="slot40"> 03:00-04:00 PM</label><br>
                                      <?php if($validation->getError('availability')) : ?>
                                <div class="invalid-feedback"><?= $validation->getError('availability') ?></div>
                                <?php endif; ?>
                                    </div>
                                    <div class="seat col-md-6">
                                      <input type="radio" id="slot41" name="availability" value="06:00-07:00 PM">
                                      <label for="slot41"> 06:00-07:00 PM</label>
                                    </div>   
                                </div>
                            </div>
                            </div>
                        </div>
                        <div class="card-text2" style="font-weight: bolder; color: black;">
                            FEE : RS.300/-
                        </div>
                        <button class="card-button2"> Book now</button>
                    </form>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card-sl">
                    <div class="card-image2">
                        <img src="img/14.jpg">
                    </div>
                    <a class="card-action2"><i class="fa fa-heart"></i></a>
                        <form action="<?= base_url('public/bookappointments/store') ?>" method ="post">
                        <div  class="card-heading">
                            <label>DR VIRAT</label>
                            <h6> (General physician)</h6>
                            <div hidden>
                                <input type="text" name="dname" value="DR Virat (General physician)"> 
                            </div>
                        </div>
                        <div class="card-text2">
                            <div class="seats"> 
                                <label class="my-2" style="color: black; font-weight: bolder;">SELECT DATE: </label>
                                <input  type="text" name="date" id="datepicker12" placeholder="dd-mm-yy" required> 
                            </div><hr>
                            <div id="divvv">
                            <div class="seats">
                                <label style="color: black; font-weight: bolder;">AVAILABILITY: </label><br>
                                <div class="row" >
                                    <div class="seat col-md-6 my-2">
                                      <input type="radio" id="slot42" name="availability" value="10:00-11:00 AM">
                                      <label for="slot42"> 10:00-11:00 AM</label>
                                    </div>
                                    <div class="seat col-md-6 my-2"> 
                                      <input type="radio" id="slot43" name="availability" value="12:00-01:00 PM">
                                      <label for="slot43"> 12:00-01:00 PM</label><br>
                                    </div>
                                    <div class="seat col-md-6">
                                      <input type="radio" id="slot44" class=" <?= ($validation->getError('availability')) ? 'is-invalid' : ''  ?>" name="availability" value="03:00-04:00 PM">
                                      <label for="slot44"> 03:00-04:00 PM</label><br>
                                      <?php if($validation->getError('availability')) : ?>
                                <div class="invalid-feedback"><?= $validation->getError('availability') ?></div>
                                <?php endif; ?>
                                    </div>
                                    <div class="seat col-md-6">
                                      <input type="radio" id="slot45" name="availability" value="06:00-07:00 PM">
                                      <label for="slot45"> 06:00-07:00 PM</label>
                                    </div>   
                                </div>
                            </div>
                            </div>
                        </div>
                        <div class="card-text2" style="font-weight: bolder; color: black;">
                            FEE : RS.300/-
                        </div>
                        <button class="card-button2"> Book now</button>
                    </form>
                </div>
            </div>
        </div>
        <br>
        <br> 
        <div class="row" id="ent"> 
            <h1>ENT</h1>	 
        </div><br><br> 
        <div class="row"> 
            <div class="col-md-3"> 
                <div class="card-sl"> 
                    <div class="card-image2"> 
                        <img src="img/10.jpg"> 
                        </div> <a class="card-action2"><i class="fa fa-heart"></i></a> 
                    <form action="<?= base_url('public/bookappointments/store') ?>" method ="post"> 
                        <div class="card-heading"> 
                            <label>DR Andrew</label> <h6> (ENT specialist)</h6>
                            <div hidden> 
                                <input type="text" name="dname" value="DR Andrew (ENT specialist)"> 
                            </div> 
                        </div> 
                        <div class="card-text2"> 
                            <div class="seats">
                                <label class="my-2" style="color: black; font-weight: bolder;">SELECT DATE: </label> 
                                <input  type="text" name="date" id="datepicker1" placeholder="dd-mm-yy" class=" <?= ($validation->getError('date')) ? 'is-invalid' : ''  ?>"placeholder="Enter date" value="<?= set_value('date') ?>" > <?php if($validation->getError('date')) : ?> 
                                <div class="invalid-feedback"><?= $validation->getError('date') ?>
                                    
                                </div> 
                                <?php endif; ?>
                            </div><hr> 
                            <div id="divvv"> 
                                <div class="seats"> 
                                    <label style="color: black; font-weight: bolder;">AVAILABILITY: </label><br> 
                                    <div class="row" > 
                                        <div class="seat col-md-6 my-2"> 
                                            <input type="radio" id="slot1" name="availability" value="10:00-11:00 AM"> 
                                            <label for="slot1"> 10:00-11:00 AM</label> 
                                        </div> 
                                        <div class="seat col-md-6 my-2"> 
                                            <input type="radio" id="slot2" name="availability" value="12:00-01:00 PM"> 
                                            <label for="slot2"> 12:00-01:00 PM</label><br> 
                                        </div> 
                                        <div class="seat col-md-6"> 
                                            <input type="radio" id="slot3" class=" <?= ($validation->getError('availability')) ? 'is-invalid' : ''  ?>"  name="availability" value="03:00-04:00 PM"> 
                                            <label for="slot3"> 03:00-04:00 PM</label><br> 
                                            <?php if($validation->getError('availability')) : ?> 
                                                <div class="invalid-feedback"><?= $validation->getError('availability') ?>
                                                </div> 
                                            <?php endif; ?> 
                                        </div> 
                                        <div class="seat col-md-6">
                                            <input type="radio" id="slot4" name="availability" value="06:00-07:00 PM">
                                            <label for="slot4"> 06:00-07:00 PM</label> 
                                        </div>   
                                    </div> 
                                </div> 
                            </div>
                        </div> 
                        <div class="card-text2" style="font-weight: bolder; color: black;">
                            FEE : RS.500/-
                        </div> 
                    <button class="card-button2"> Book now</button> 
                </form>
            </div> 
        </div> 
        <div class="col-md-3"> 
                <div class="card-sl"> 
                    <div class="card-image2"> 
                        <img src="img/15.jpg">
                        </div> <a class="card-action2"><i class="fa fa-heart"></i></a> 
                    <form action="<?= base_url('public/bookappointments/store') ?>" method ="post"> 
                        <div class="card-heading"> 
                            <label>DR Nitin</label> <h6> (ENT specialist)</h6>
                            <div hidden> 
                                <input type="text" name="dname" value="DR Nitin (ENT specialist)"> 
                            </div> 
                        </div> 
                        <div class="card-text2"> 
                            <div class="seats">
                                <label class="my-2" style="color: black; font-weight: bolder;">SELECT DATE: </label> 
                                <input  type="text" name="date" id="datepicker2" placeholder="dd-mm-yy" class=" <?= ($validation->getError('date')) ? 'is-invalid' : ''  ?>"placeholder="Enter date" value="<?= set_value('date') ?>" > <?php if($validation->getError('date')) : ?> 
                                <div class="invalid-feedback"><?= $validation->getError('date') ?>
                                    
                                </div> 
                                <?php endif; ?>
                            </div><hr> 
                            <div id="divvv"> 
                                <div class="seats"> 
                                    <label style="color: black; font-weight: bolder;">AVAILABILITY: </label><br> 
                                    <div class="row" > 
                                        <div class="seat col-md-6 my-2"> 
                                            <input type="radio" id="slot5" name="availability" value="10:00-11:00 AM"> 
                                            <label for="slot5"> 10:00-11:00 AM</label> 
                                        </div> 
                                        <div class="seat col-md-6 my-2"> 
                                            <input type="radio" id="slot6" name="availability" value="12:00-01:00 PM"> 
                                            <label for="slot6"> 12:00-01:00 PM</label><br> 
                                        </div> 
                                        <div class="seat col-md-6"> 
                                            <input type="radio" id="slot7" class=" <?= ($validation->getError('availability')) ? 'is-invalid' : ''  ?>"  name="availability" value="03:00-04:00 PM"> 
                                            <label for="slot7"> 03:00-04:00 PM</label><br> 
                                            <?php if($validation->getError('availability')) : ?> 
                                                <div class="invalid-feedback"><?= $validation->getError('availability') ?>
                                                </div> 
                                            <?php endif; ?> 
                                        </div>    
                                    </div> 
                                </div> 
                            </div>
                        </div> 
                        <div class="card-text2" style="font-weight: bolder; color: black;">
                            FEE : RS.500/-
                        </div> 
                    <button class="card-button2"> Book now</button> 
                </form>
            </div> 
        </div>
            <div class="col-md-3">
                <div class="card-sl">
                    <div class="card-image2">
                        <img src="img/11.jpg">
                    </div>
                    <a class="card-action2"><i class="fa fa-heart"></i></a>
                        <form action="<?= base_url('public/bookappointments/store') ?>" method ="post">
                        <div  class="card-heading">
                            <label>DR Rocky</label>
                            <h6> (ENT specialist)</h6>
                            <div hidden>
                                <input type="text" name="dname" value="DR Rocky (ENT specialist)"> 
                            </div>
                        </div>
                        <div class="card-text2">
                            <div class="seats"> 
                                <label class="my-2" style="color: black; font-weight: bolder;">SELECT DATE: </label>
                                <input  type="text" name="date" id="datepicker3" placeholder="dd-mm-yy" required> 
                            </div><hr>
                            <div id="divvv">
                            <div class="seats">
                                <label style="color: black; font-weight: bolder;">AVAILABILITY: </label><br>
                                <div class="row" >
                                    <div class="seat col-md-6 my-2">
                                      <input type="radio" id="slot8" name="availability" value="10:00-11:00 AM">
                                      <label for="slot8"> 10:00-11:00 AM</label>
                                    </div>
                                    <div class="seat col-md-6 my-2"> 
                                      <input type="radio" id="slot9" name="availability" value="12:00-01:00 PM">
                                      <label for="slot9"> 12:00-01:00 PM</label><br>
                                    </div>
                                    <div class="seat col-md-6">
                                      <input type="radio" id="slot10" class=" <?= ($validation->getError('availability')) ? 'is-invalid' : ''  ?>"  name="availability" value="03:00-04:00 PM">
                                      <label for="slot10"> 03:00-04:00 PM</label><br>
                                      <?php if($validation->getError('availability')) : ?>
                                <div class="invalid-feedback"><?= $validation->getError('availability') ?></div>
                                <?php endif; ?>
                                    </div>
                                    <div class="seat col-md-6">
                                      <input type="radio" id="slot11" name="availability" value="06:00-07:00 PM">
                                      <label for="slot11"> 06:00-07:00 PM</label>
                                    </div>   
                                </div>
                            </div>
                            </div>
                        </div>
                        <div class="card-text2" style="font-weight: bolder; color: black;">
                            FEE : RS.500/-
                        </div>
                        <button class="card-button2"> Book now</button>
                    </form>
                </div>
            </div>
        </div>
        <br>
        <br>
        <div class="row" id="cardio">
			<h1>CARDIOLOGY</h1>	
  		</div>
  		<br>
  		<br>
        <div class="row">
            <div class="col-md-3">
                <div class="card-sl">
                    <div class="card-image2">
                        <img src="img/16.jpg">
                    </div>
                    <a class="card-action2"><i class="fa fa-heart"></i></a>
                        <form action="<?= base_url('public/bookappointments/store') ?>" method ="post">
                        <div  class="card-heading">
                            <label>DR John</label>
                            <h6> (Cardiologist)</h6>
                            <div hidden>
                                <input type="text" name="dname" value="DR John (Cardiologist)"> 
                            </div>
                        </div>
                        <div class="card-text2">
                            <div class="seats"> 
                                <label class="my-2" style="color: black; font-weight: bolder;">SELECT DATE: </label>
                                <input  type="text" name="date" id="datepicker4" placeholder="dd-mm-yy" required> 
                            </div><hr>
                            <div id="divvv">
                            <div class="seats">
                                <label style="color: black; font-weight: bolder;">AVAILABILITY: </label><br>
                                <div class="row" >
                                    <div class="seat col-md-6 my-2">
                                      <input type="radio" id="slot12" name="availability" value="10:00-11:00 AM">
                                      <label for="slot12"> 10:00-11:00 AM</label>
                                    </div>
                                    <div class="seat col-md-6 my-2"> 
                                      <input type="radio" id="slot13" name="availability" value="12:00-01:00 PM">
                                      <label for="slot13"> 12:00-01:00 PM</label><br>
                                    </div>
                                    <div class="seat col-md-6">
                                      <input type="radio" id="slot14" class=" <?= ($validation->getError('availability')) ? 'is-invalid' : ''  ?>"  name="availability" value="03:00-04:00 PM">
                                      <label for="slot14"> 03:00-04:00 PM</label><br>
                                      <?php if($validation->getError('availability')) : ?>
                                <div class="invalid-feedback"><?= $validation->getError('availability') ?></div>
                                <?php endif; ?>
                                    </div>
                                    <div class="seat col-md-6">
                                      <input type="radio" id="slot15" name="availability" value="06:00-07:00 PM">
                                      <label for="slot15"> 06:00-07:00 PM</label>
                                    </div>   
                                </div>
                            </div>
                            </div>
                        </div>
                        <div class="card-text2" style="font-weight: bolder; color: black;">
                            FEE : RS.500/-
                        </div>
                        <button class="card-button2"> Book now</button>
                    </form>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card-sl">
                    <div class="card-image2">
                        <img src="img/14.jpg">
                    </div>
                    <a class="card-action2"><i class="fa fa-heart"></i></a>
                        <form action="<?= base_url('public/bookappointments/store') ?>" method ="post">
                        <div  class="card-heading">
                            <label>DR Thomas</label>
                            <h6> (Cardiologist)</h6>
                            <div hidden>
                                <input type="text" name="dname" value="DR Thomas (Cardiologist)"> 
                            </div>
                        </div>
                        <div class="card-text2">
                            <div class="seats"> 
                                <label class="my-2" style="color: black; font-weight: bolder;">SELECT DATE: </label>
                                <input  type="text" name="date" id="datepicker5" placeholder="dd-mm-yy" required> 
                            </div><hr>
                            <div id="divvv">
                            <div class="seats">
                                <label style="color: black; font-weight: bolder;">AVAILABILITY: </label><br>
                                <div class="row" >
                                    <div class="seat col-md-6 my-2">
                                      <input type="radio" id="slot16" name="availability" value="10:00-11:00 AM">
                                      <label for="slot16"> 10:00-11:00 AM</label>
                                    </div>
                                    <div class="seat col-md-6 my-2"> 
                                      <input type="radio" id="slot17" name="availability" value="12:00-01:00 PM">
                                      <label for="slot17"> 12:00-01:00 PM</label><br>
                                    </div>
                                    <div class="seat col-md-6">
                                      <input type="radio" id="slot18" class=" <?= ($validation->getError('availability')) ? 'is-invalid' : ''  ?>"  name="availability" value="03:00-04:00 PM">
                                      <label for="slot18"> 03:00-04:00 PM</label><br>
                                      <?php if($validation->getError('availability')) : ?>
                                <div class="invalid-feedback"><?= $validation->getError('availability') ?></div>
                                <?php endif; ?>
                                    </div>
                                    <div class="seat col-md-6">
                                      <input type="radio" id="slot19" name="availability" value="06:00-07:00 PM">
                                      <label for="slot19"> 06:00-07:00 PM</label>
                                    </div>   
                                </div>
                            </div>
                            </div>
                        </div>
                        <div class="card-text2" style="font-weight: bolder; color: black;">
                            FEE : RS.500/-
                        </div>
                        <button class="card-button2"> Book now</button>
                    </form>
                </div>
            </div>
        </div>
        <br>
        <br>
        <div class="row" id="dentistry">
			<h1>DENTISTRY</h1>	
  		</div>
  		<br>
  		<br>
        <div class="row">
            <div class="col-md-3">
                <div class="card-sl">
                    <div class="card-image2">
                        <img src="img/i.jpg">
                    </div>
                    <a class="card-action2"><i class="fa fa-heart"></i></a>
                        <form action="<?= base_url('public/bookappointments/store') ?>" method ="post">
                        <div  class="card-heading">
                            <label>DR Thangavel</label>
                            <h6> (Dentist)</h6>
                            <div hidden>
                                <input type="text" name="dname" value="DR Thangavel (Dentist)"> 
                            </div>
                        </div>
                        <div class="card-text2">
                            <div class="seats"> 
                                <label class="my-2" style="color: black; font-weight: bolder;">SELECT DATE: </label>
                                <input  type="text" name="date" id="datepicker6" placeholder="dd-mm-yy" required> 
                            </div><hr>
                            <div id="divvv">
                            <div class="seats">
                                <label style="color: black; font-weight: bolder;">AVAILABILITY: </label><br>
                                <div class="row" >
                                    <div class="seat col-md-6 my-2">
                                      <input type="radio" id="slot20" name="availability" value="10:00-11:00 AM">
                                      <label for="slot20"> 10:00-11:00 AM</label>
                                    </div>
                                    <div class="seat col-md-6 my-2"> 
                                      <input type="radio" id="slot21" name="availability" value="12:00-01:00 PM">
                                      <label for="slot21"> 12:00-01:00 PM</label><br>
                                    </div>
                                    <div class="seat col-md-6">
                                      <input type="radio" id="slot22" class=" <?= ($validation->getError('availability')) ? 'is-invalid' : ''  ?>"  name="availability" value="03:00-04:00 PM">
                                      <label for="slot22"> 03:00-04:00 PM</label><br>
                                      <?php if($validation->getError('availability')) : ?>
                                <div class="invalid-feedback"><?= $validation->getError('availability') ?></div>
                                <?php endif; ?>
                                    </div>
                                    <div class="seat col-md-6">
                                      <input type="radio" id="slot23" name="availability" value="06:00-07:00 PM">
                                      <label for="slot23"> 06:00-07:00 PM</label>
                                    </div>   
                                </div>
                            </div>
                            </div>
                        </div>
                        <div class="card-text2" style="font-weight: bolder; color: black;">
                            FEE : RS.500/-
                        </div>
                        <button class="card-button2"> Book now</button>
                    </form>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card-sl">
                    <div class="card-image2">
                        <img src="img/j.jpg">
                    </div>
                    <a class="card-action2"><i class="fa fa-heart"></i></a>
                        <form action="<?= base_url('public/bookappointments/store') ?>" method ="post">
                        <div  class="card-heading">
                            <label>DR Gopal</label>
                            <h6> (Dentist)</h6>
                            <div hidden>
                                <input type="text" name="dname" value="DR Gopal (Dentist)"> 
                            </div>
                        </div>
                        <div class="card-text2">
                            <div class="seats"> 
                                <label class="my-2" style="color: black; font-weight: bolder;">SELECT DATE: </label>
                                <input  type="text" name="date" id="datepicker7" placeholder="dd-mm-yy" required> 
                            </div><hr>
                            <div id="divvv">
                            <div class="seats">
                                <label style="color: black; font-weight: bolder;">AVAILABILITY: </label><br>
                                <div class="row" >
                                    <div class="seat col-md-6 my-2">
                                      <input type="radio" id="slot24" name="availability" value="10:00-11:00 AM">
                                      <label for="slot24"> 10:00-11:00 AM</label>
                                    </div>
                                    <div class="seat col-md-6 my-2"> 
                                      <input type="radio" id="slot25" name="availability" value="12:00-01:00 PM">
                                      <label for="slot25"> 12:00-01:00 PM</label><br>
                                    </div>
                                    <div class="seat col-md-6">
                                      <input type="radio" id="slot26" class=" <?= ($validation->getError('availability')) ? 'is-invalid' : ''  ?>" name="availability" value="03:00-04:00 PM">
                                      <label for="slot26"> 03:00-04:00 PM</label><br>
                                      <?php if($validation->getError('availability')) : ?>
                                <div class="invalid-feedback"><?= $validation->getError('availability') ?></div>
                                <?php endif; ?>
                                    </div>   
                                </div>
                            </div>
                            </div>
                        </div>
                        <div class="card-text2" style="font-weight: bolder; color: black;">
                            FEE : RS.500/-
                        </div>
                        <button class="card-button2"> Book now</button>
                    </form>
                </div>
            </div>
        </div>
        <br>
        <br>
        <div class="row" id="eye">
			<h1>EYE SPECIALIST</h1>	
  		</div>
  		<br>
  		<br>
        <div class="row">
            <div class="col-md-3">
                <div class="card-sl">
                    <div class="card-image2">
                        <img src="img/k.jpg">
                    </div>
                    <a class="card-action2"><i class="fa fa-heart"></i></a>
                        <form action="<?= base_url('public/bookappointments/store') ?>" method ="post">
                        <div  class="card-heading">
                            <label>DR Franklin</label>
                            <h6> (EYE specialist)</h6>
                            <div hidden>
                                <input type="text" name="dname" value="DR Franklin (EYE specialist)"> 
                            </div>
                        </div>
                        <div class="card-text2">
                            <div class="seats"> 
                                <label class="my-2" style="color: black; font-weight: bolder;">SELECT DATE: </label>
                                <input  type="text" name="date" id="datepicker8" placeholder="dd-mm-yy" required> 
                            </div><hr>
                            <div id="divvv">
                            <div class="seats">
                                <label style="color: black; font-weight: bolder;">AVAILABILITY: </label><br>
                                <div class="row" >
                                    <div class="seat col-md-6 my-2">
                                      <input type="radio" id="slot27" name="availability" value="10:00-11:00 AM">
                                      <label for="slot27"> 10:00-11:00 AM</label>
                                    </div>
                                    <div class="seat col-md-6 my-2"> 
                                      <input type="radio" id="slot28" name="availability" value="12:00-01:00 PM">
                                      <label for="slot28"> 12:00-01:00 PM</label><br>
                                    </div>
                                    <div class="seat col-md-6">
                                      <input type="radio" id="slot29" class=" <?= ($validation->getError('availability')) ? 'is-invalid' : ''  ?>" name="availability" value="03:00-04:00 PM">
                                      <label for="slot29"> 03:00-04:00 PM</label><br>
                                      <?php if($validation->getError('availability')) : ?>
                                <div class="invalid-feedback"><?= $validation->getError('availability') ?></div>
                                <?php endif; ?>
                                    </div>
                                    <div class="seat col-md-6">
                                      <input type="radio" id="slot30" name="availability" value="06:00-07:00 PM">
                                      <label for="slot30"> 06:00-07:00 PM</label>
                                    </div>   
                                </div>
                            </div>
                            </div>
                        </div>
                        <div class="card-text2" style="font-weight: bolder; color: black;">
                            FEE : RS.500/-
                        </div>
                        <button class="card-button2"> Book now</button>
                    </form>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card-sl">
                    <div class="card-image2">
                        <img src="img/12.jpg">
                    </div>
                    <a class="card-action2"><i class="fa fa-heart"></i></a>
                        <form action="<?= base_url('public/bookappointments/store') ?>" method ="post">
                        <div  class="card-heading">
                            <label>DR Lisa</label>
                            <h6> (EYE specialist)</h6>
                            <div hidden>
                                <input type="text" name="dname" value="DR Lisa (EYE specialist)"> 
                            </div>
                        </div>
                        <div class="card-text2">
                            <div class="seats"> 
                                <label class="my-2" style="color: black; font-weight: bolder;">SELECT DATE: </label>
                                <input  type="text" name="date" id="datepicker9" placeholder="dd-mm-yy" required> 
                            </div><hr>
                            <div id="divvv">
                            <div class="seats">
                                <label style="color: black; font-weight: bolder;">AVAILABILITY: </label><br>
                                <div class="row" >
                                    <div class="seat col-md-6 my-2">
                                      <input type="radio" id="slot31" name="availability" value="10:00-11:00 AM">
                                      <label for="slot31"> 10:00-11:00 AM</label>
                                    </div>
                                    <div class="seat col-md-6 my-2"> 
                                      <input type="radio" id="slot32" name="availability" value="12:00-01:00 PM">
                                      <label for="slot32"> 12:00-01:00 PM</label><br>
                                    </div>
                                    <div class="seat col-md-6">
                                      <input type="radio" id="slot33" class=" <?= ($validation->getError('availability')) ? 'is-invalid' : ''  ?>" name="availability" value="03:00-04:00 PM">
                                      <label for="slot33"> 03:00-04:00 PM</label><br>
                                      <?php if($validation->getError('availability')) : ?>
                                <div class="invalid-feedback"><?= $validation->getError('availability') ?></div>
                                <?php endif; ?>
                                    </div>   
                                </div>
                            </div>
                            </div>
                        </div>
                        <div class="card-text2" style="font-weight: bolder; color: black;">
                            FEE : RS.500/-
                        </div>
                        <button class="card-button2"> Book now</button>
                    </form>
                </div>
            </div>
        </div>
        <br>
        <br>
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
                        <form action="<?= base_url('public/bookappointments/store') ?>" method ="post">
                        <div  class="card-heading">
                            <label>DR Jennie</label>
                            <h6> (Gynecologist)</h6>
                            <div hidden>
                                <input type="text" name="dname" value="DR Jennie (Gynecologist)"> 
                            </div>
                        </div>
                        <div class="card-text2">
                            <div class="seats"> 
                                <label class="my-2" style="color: black; font-weight: bolder;">SELECT DATE: </label>
                                <input  type="text" name="date" id="datepicker10" placeholder="dd-mm-yy" required> 
                            </div><hr>
                            <div id="divvv">
                            <div class="seats">
                                <label style="color: black; font-weight: bolder;">AVAILABILITY: </label><br>
                                <div class="row" >
                                    <div class="seat col-md-6 my-2">
                                      <input type="radio" id="slot34" name="availability" value="10:00-11:00 AM">
                                      <label for="slot34"> 10:00-11:00 AM</label>
                                    </div>
                                    <div class="seat col-md-6 my-2"> 
                                      <input type="radio" id="slot35" name="availability" value="12:00-01:00 PM">
                                      <label for="slot35"> 12:00-01:00 PM</label><br>
                                    </div>
                                    <div class="seat col-md-6">
                                      <input type="radio" id="slot36" class=" <?= ($validation->getError('availability')) ? 'is-invalid' : ''  ?>" name="availability" value="03:00-04:00 PM">
                                      <label for="slot36"> 03:00-04:00 PM</label><br>
                                      <?php if($validation->getError('availability')) : ?>
                                <div class="invalid-feedback"><?= $validation->getError('availability') ?></div>
                                <?php endif; ?>
                                    </div>
                                    <div class="seat col-md-6">
                                      <input type="radio" id="slot37" name="availability" value="06:00-07:00 PM">
                                      <label for="slot37"> 06:00-07:00 PM</label>
                                    </div>   
                                </div>
                            </div>
                            </div>
                        </div>
                        <div class="card-text2" style="font-weight: bolder; color: black;">
                            FEE : RS.500/-
                        </div>
                        <button class="card-button2"> Book now</button>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <!-- Including Bootstrap JS (with its jQuery dependency) so that dynamic components work -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="https://code.jquery.com/ui/1.13.1/jquery-ui.js"></script>
    

    <script type="text/javascript">
        $(function(){
            $('#datepicker').datepicker(
                {
            dateFormat:'dd-mm-yy',
            beforeShowDay: function (date) {

            if (date.getDay() == 0 || date.getDay() == 6) {
                return [false, ''];
            }
            return [true, ''];
           }
        });
        });
    </script>
    <script>
        <?php require_once("js/script.js");?>
    </script>
    <script>
        function toggle(){
            var x = document.getElementById("divv");

            if (x.style.display === "none") {
                x.style.display = "block";
            }
            else{
                x.style.display = "block";
            }
        }
    </script>
    <script type="text/javascript">
        $(document).ready(function(){
            var dtToday = new Date();
            var month = dtToday.getMonth() + 1;
            var day = dtToday.getDate();
            var year = dtToday.getFullYear();
            if( month < 10)
                month = '0' + month.toString();
            if(day < 10)
                day = 'o' + day.toString();
            var maxDate = year + '-' + month + '-' + day;
            $('#datepicker').attr('min', maxDate);
        });
    </script>

    
 
<script type="text/javascript">  
    function OnClientAppointmentInserting(sender, args) {  
        var dt = new Date();  
        dt = args.get_startTime();  
        // Now Check for condition 
        if (condition) {  
            args.set_cancel(true); // Cancel the event  
            alert("Cannot insert");  
        }  
    }  
</script> 


  </body>
</html>





