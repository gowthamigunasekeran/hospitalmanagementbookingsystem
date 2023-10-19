<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        <?Php include 'css/style.css';?>
        @import url(https://fonts.googleapis.com/css?family=Montserrat:900|Raleway:400,400i,700,700i);
/*** VARIABLES ***/
/* Colors */
/*** EXTEND ***/
/* box-shadow */
ol.gradient-list > li::before, ol.gradient-list > li {
  box-shadow: 0.25rem 0.25rem 0.6rem rgba(0, 0, 0, 0.05), 0 0.5rem 1.125rem rgba(75, 0, 0, 0.05);
}

/*** STYLE ***/
*,
*:before,
*:after {
  box-sizing: border-box;
}

html,
body {
  margin: 0;
  padding: 0;
}

body {
  background-color: #fafafa;
  color: #1d1f20;
  font-family: "Raleway", sans-serif;
}

main {
  display: block;
  margin: 0 auto;
  max-width: 30rem;
  padding: 1rem;
  
}

ol.gradient-list {
  counter-reset: gradient-counter;
  list-style: none;
  margin: 1.75rem 0;
  padding-left: 1rem;
}
ol.gradient-list > li {
  background: white;
  border-radius: 0 0.5rem 0.5rem 0.5rem;
  counter-increment: gradient-counter;
  margin-top: 1rem;
  min-height: 3rem;
  padding: 1rem 1rem 1rem 3rem;
  position: relative;
}
ol.gradient-list > li::before, ol.gradient-list > li::after {
  background: linear-gradient(135deg, #83e4e2 0%, #a2ed56 100%);
  border-radius: 1rem 1rem 0 1rem;
  content: "";
  height: 3rem;
  left: -1rem;
  overflow: hidden;
  position: absolute;
  top: -1rem;
  width: 3rem;
}
ol.gradient-list > li::before {
  align-items: flex-end;
  content: counter(gradient-counter);
  color: #1d1f20;
  display: flex;
  font: 900 1.5em/1 "Montserrat";
  justify-content: flex-end;
  padding: 0.125em 0.25em;
  z-index: 1;
}
ol.gradient-list > li:nth-child(10n+1):before {
  background:  radial-gradient(#1fe4f5, #3fbafe);
}
ol.gradient-list > li:nth-child(10n+2):before {
  background:  radial-gradient(#1fe4f5, #3fbafe);
}
ol.gradient-list > li:nth-child(10n+3):before {
  background: radial-gradient(#1fe4f5, #3fbafe);
}
ol.gradient-list > li:nth-child(10n+4):before {
  background:  radial-gradient(#1fe4f5, #3fbafe);
}
ol.gradient-list > li:nth-child(10n+5):before {
  background: radial-gradient(#1fe4f5, #3fbafe);
}
ol.gradient-list > li:nth-child(10n+6):before {
  background: radial-gradient(#1fe4f5, #3fbafe);
}
ol.gradient-list > li:nth-child(10n+7):before {
  background: radial-gradient(#1fe4f5, #3fbafe);
}
ol.gradient-list > li:nth-child(10n+8):before {
  background:  radial-gradient(#1fe4f5, #3fbafe);
}
ol.gradient-list > li:nth-child(10n+9):before {
  background:  radial-gradient(#1fe4f5, #3fbafe);
}
ol.gradient-list > li:nth-child(10n+10):before {
  background:radial-gradient(#1fe4f5, #3fbafe);
}
ol.gradient-list > li + li {
  margin-top: 2rem;
}
.image{
    width:100%;
    height:500px;
}
.master,.image1{
    width:100%;
    height:800px;
    text-align:center;
    padding:90px;
    padding-top:50px;
  

}
.centered{
    position :absolute;
    top:20%;
    font-size:25px;
    font-weight:500px;
}
p{
    font-family: 'Montserrat', sans-serif;
    scroll-behavior: smooth;
    text-align: justify;
    color: black;
    font-size: 16px;
    margin-top: 15px;
    line-height: 1.5rem;
    font-weight: 300;
    letter-spacing: 0.09rem;
}
h1{
  font-weight:500px;
  font-size:60px;
}
h4{
  font-size:28px;
  font-weight:200px;
}




* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

body {
  font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Helvetica,
    Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol";
}

.main-container {
  padding: 30px;
}

/* HEADING */

.heading {
  text-align: center;
}

.heading__title {
  font-weight: 400px;
  font-size:38px;
}

.heading__credits {
  margin: 10px 0px;
  color: #888888;
  font-size: 25px;
  transition: all 0.5s;
}

.heading__link {
  text-decoration: none;
}

.heading__credits .heading__link {
  color: inherit;
}

/* CARDS */

.cards {
  display: flex;
  flex-wrap: wrap;
  justify-content: space-between;
}

.card {
  margin: 20px;
  padding: 20px;
  width: 200px;
  min-height: 70px;
  display: grid;
  grid-template-rows: 20px 50px 1fr 50px;
  border-radius: 10px;
  box-shadow: 0px 6px 10px rgba(0, 0, 0, 0.25);
  transition: all 0.2s;
}

.card:hover {
  box-shadow: 0px 6px 10px rgba(0, 0, 0, 0.4);
  transform: scale(1.01);
}






.card__title {
  grid-row: 3/4;
  font-weight: 400;
  color: #ffffff;
  font-size:18px;
}



/* CARD BACKGROUNDS */

.card-1 {
  background: radial-gradient(#1fe4f5, #3fbafe);
}

.card-2 {
  background:radial-gradient(#1fe4f5, #3fbafe);
}

.card-3 {
  background: radial-gradient(#1fe4f5, #3fbafe);
}

.card-4 {
  background: radial-gradient(#1fe4f5, #3fbafe);
}

.card-5 {
  background: radial-gradient(#1fe4f5, #3fbafe);
}
.card-6 {
  background: radial-gradient(#1fe4f5, #3fbafe);
}


/* RESPONSIVE */

@media (max-width: 1600px) {
  .cards {
    justify-content: center;
  }
}

    </style>
</head>
<body>
    <br>
    <br>
    <br>
    
    <img class="image" src="img/sermtc.jpg">
    <div class= "centered mx-3">
        <h1>MASTER HEALTH CHECK</h1>
</div>
<br>
<div class="row">
<div class="col-lg-6 col-md-6 col-12 py-lg-0 py-3 order-sm-2">
  <br>
  <br><br>
  <h4>Master health check</h4>

<p>In the hustle and bustle of our modern day lives, we often ignore to care of our health. 
    But the truth is nothing is more important than the well-being of a family than individual health.
    

A master health check-up is a number of clinical tests utilised to assess the overall health of a person. The master health checkup includes a physical examination ultrasound and laboratory investigations that help evaluate the health of your vital organs and metabolism to identify any early symptoms of diseases to manage individual health better.

</p>
<br>

<h3>What to expect in a master health checkup?<h3>
<p>

There are many measures one can take to prepare for a master health checkup.
 Your healthcare partner will provide a list of pre-test preparations associated with the check-up to support optimum effectiveness.
  It is crucial if you notice something unusual about your body, make it a point to discuss it with your doctor before the checkup.
   A master health checkup tests can help detect early signs of a debilitating disease that can be treated accordingly.</p>
   <br>
  <h4>Benefits of a Master Health Checkup<h4>

  <p> A master health checkup is essential for every adults over the age of 25. 
    Getting this done periodically can help you live a longer, healthier and happier life.
     There are three main reasons why you should ensure you book a master health checkup at the soonest:</p>
     <br>

<h3>To Review your overall health: <h3>
<p>The doctor can update your medical records to reflect your current health and consult appropriately which can help manage your health better; having proper medical records is important for reference, should you develop a health condition in the future.</p>
<br>
<h3>For detecting early signs of illness:<h3>
<p>The tests that are included in the master health checkup package can help identify illnesses early before the disease reaches a later stage. This is crucial as detecting diseases early can help you prevent them from getting more focussed on life style changes or other preventive steps to improve your health outcome.
   The doctor will then prescribe the required treatment and medication to nip it in the bud.</p>
<br>
<h3>Helps you maintain a good lifestyle: <h3>
<p>The tests results will give you a complete assessment of your overall health as well as make any changes to your current lifestyle that would help avoid any future health problems.</p>



</div>
<div class="col-lg-6 col-md-6 col-12 order-1 pt-5">
<main>
    <h4>The various checks offered are:</h4>
  <ol class="gradient-list">
    <li>Physician consultation</li>
    <li>Kidney profile</li>
    <li>Thyroid profile</li>
    <li>Lever function test</li>
    <li>Ultra sound abdomen</li>
    <li>Random blood sugar</li>
    <li>Ophthalmology checkup</li>
    <li>Cardiac profile</li>
    <li>ECG</li>
    <li>ECHO</li>
    <li>CHEST X-RAY</li>
    <li>Bone profile</li>
    <li>Lipid profile</li>
    <li>Cancer screening</li>
    <li>Physician checkup</li>
    <li>Dietician councelling </li>
    
  </ol>
</main>
</div>
</div>
<div class="main-container">
  <div class="heading">
    <h1 class="heading__title">Health Check Packages</h1>
  
  </div>
  <div class="cards">
    <div class="card card-1">
 
    
      <h2 class="card__title">Primary   Health Screening</h2>
    
     
     
    
        
     
    </div>
    <div class="card card-2">
      
    
     <h2 class="card__title">Executive   Health Screening</h2>
      
    </div>
    <div class="card card-3">
    
      <h2 class="card__title">Comprehensive  Health Screening</h2>
      
     
      
    </div>
    <div class="card card-4">
      
      <h2 class="card__title">Diabetic Health Screening</h2>
      
    </div>
    <div class="card card-5">
      
      <h2 class="card__title">Little star Screening</h2>
     
    </div>
  </div>
</div>

</body>
</html>