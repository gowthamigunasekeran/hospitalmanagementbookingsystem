<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<style type="text/css">
	<?php include 'css/style5.css' ; ?>
    
.todoLeftImportance{
  opacity: 0.0;
  transition: all 300ms linear;
}

.todoLeftImportance:hover{
  opacity: 1.0;
}
</style>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="https://code.jquery.com/ui/1.13.1/themes/smoothness/jquery-ui.css">
    
    

<body>
  	<div class="container" style="margin: 70px;">
  		<div class="row">
  			<h2>CATEGORIES</h2>
  			<div class="col">
		    	<a href="#ent" class="list-group-item list-group-item-action">ENT</a>
		  	</div>
		  	<div class="col">
		  		<a href="#cardio" class="list-group-item list-group-item-action">CARDIOLOGY</a>
		  	</div>
		  	<div class="col">
		  		<a href="#dentistry" class="list-group-item list-group-item-action">DENTISTRY</a>
		  	</div>
		  	<div class="col">
		  		<a href="#eye" class="list-group-item list-group-item-action">EYE SPECIALIST</a>
		  	</div>
		  	<div class="col">
		  		<a href="#gyno" class="list-group-item list-group-item-action">GYNECOLOGY</a>
		  	</div>
  		</div>
  		<br>
  		<br>
  		<br>
  		<div class="row" id="ent">
			<h1>ENT</h1>	
  		</div>
  		<br>
  		<br>
        <div class="row">
            <div class="col-md-3">
                <div class="card-sl">
                    <div class="card-image2">
                        <img src="img/10.jpg">
                    </div>
                    <a class="card-action2" href=""><i class="fa fa-heart"></i></a>
                        <form action="<?= base_url('public/bookappointments/store') ?>" method ="post">
                        <div  class="card-heading">
                            <label>DR Andrew</label>
                            <h6> (ENT specialist)</h6>
                            <div hidden>
                                <input type="text" name="dname" value="DR Andrew (ENT specialist)"> 
                            </div>
                        </div>
                        <div class="card-text2">
                            <div class="seats"> 
                                <label class="my-2" style="color: black; font-weight: bolder;">SELECT DATE: </label>
                                <input  type="text" name="date" id="datepicker1" placeholder="dd-mm-yy" required> 
                            </div><hr>
                            <div id="divvv">
                            <div class="seats">
                                <label style="color: black; font-weight: bolder;">AVAILABILITY: </label><br>
                                <div class="row" >
                                    <div class="seat col-md-6 my-2">
                                      <input type="checkbox" id="slot1" name="availability" value="10:00-11:00 AM">
                                      <label for="slot1"> 10:00-11:00 AM</label>
                                    </div>
                                    <div class="seat col-md-6 my-2"> 
                                      <input type="checkbox" id="slot2" name="availability" value="12:00-01:00 PM">
                                      <label for="slot2"> 12:00-01:00 PM</label><br>
                                    </div>
                                    <div class="seat col-md-6">
                                      <input type="checkbox" id="slot3" name="availability" value="03:00-04:00 PM">
                                      <label for="slot3"> 03:00-04:00 PM</label>
                                    </div>
                                    <div class="seat col-md-6">
                                      <input type="checkbox" id="slot4" name="availability" value="06:00-07:00 PM">
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
</div>
</div>
</body>
</head>
</html>