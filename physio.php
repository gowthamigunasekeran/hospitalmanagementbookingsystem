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


    .image{
    width:100%;
    height:500px;
}
.centered{
    position :absolute;
    top:20%;
    font-size:25px;
    font-weight:500px;
}
.image1{
    width:80%;
    height:90%;
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


@import url("https://fonts.googleapis.com/css2?family=Abril+Fatface&display=swap");
@import url("https://fonts.googleapis.com/css2?family=Montserrat&display=swap");
/*media queries*/
html {
  box-sizing: border-box;
}

*, *:before, *:after {
  box-sizing: inherit;
}

body {

  font-family: "Montserrat", sans-serif;
  font-size: 0.875em;
  color: #444444;
  line-height: 1.5;
}

.dl-blurbs {
  display: grid;
  background-color: #eaeaeaff;
}
@media (min-width: 768px) {
  .dl-blurbs {
    grid-template-columns: repeat(2, 1fr);
    gap: 2vw;
  }
}

/* LIST */
dl {
    background-color: #eaeaeaff;
  counter-reset: count;
  background: linear-gradient(90deg, rgba(0, 0, 0, 0.04) 20%, rgba(255, 255, 255, 0) 0%);
  padding-left: 4vw;
  padding-right: 4vw;
  margin: 0;
}
@media (min-width: 768px) {
  dl {
    padding-left: 2vw;
  }
}
@media (min-width: 1024px) {
  dl {
    padding-top: 3vw;
    padding-bottom: 3vw;
  }
}

dl + dl {
  counter-reset: counter 4;
}

dt {
    
  counter-increment: count;
  color: #4f6d7aff;
  font-family: "Montserrat", sans-serif;
  font-size: 4vw;
  text-transform: uppercase;
}

dt::before {
  content: counter(count, decimal-leading-zero) ".";
  font-family: "Abril Fatface", cursive;
  color: #5ea5b8ff;
  margin-left: -1vw;
  padding-right: 12px;
}

dd {
  margin-left: 9vw;
  margin-bottom: 2vh;
  font-size: 16px;
  padding-left: 132px;
}


.card img{
    height: 200px;
    transition: .0s;

}
.inner{
    overflow: hidden;
}
    </style>
</head>
<body>
<br>
    <br>
    <br>
    
    <img class="image" src="img/physio.jpg">
    <div class= "centered mx-3">
        <h1>PHYSIOTHERAPY</h1>
</div>

<div class="row">
<div class="col-lg-6 col-md-6 col-12 py-lg-0 py-3 order-sm-2">
    <br><br>
    
<h1>Physiotherapy & Rehabilitation Services</h1>
<p>Physiotherapy is a science-based profession and takes a ‘whole person’ approach to health and well being, which includes the patient’s general lifestyle. The highly experienced team of Physiotherapists is fully capable of addressing every kind of impairments following injury, disease or disability.<br><br>

There are different types of physiotherapy treatment.
 The well-versed team of physiotherapist work around the clock to service the inpatients with customized exercise therapy and extra care.
  The movement, strength, flexibility, endurance, function and pain of the patient is assessed and they are counselled and educated about the cause and course of the problem along with the pre-operative and post-operative regime of different surgeries are discussed with the help of visual aids and 3 D models after which the treatment is planned based on each individual need.
 The progress is kept in track by regular follow up till patient is functionally fit.</p>
</div>
<div class="col-lg-6 col-md-6 col-12 order-1 pt-5">
<img class="image1" src="img/physio1.jpg"> 
</div>
</div>


<section class="dl-blurbs">
<dl>
    <dt>Treatments Offered </dt>
    <dd>Exercise Therapy & Approaches</dd>
    <dd>Strengthening Exercises</dd>
    <dd>Chronic Pain Management</dd>
    <dd>Stretching Exercises</dd>
    <dd>Breathing Exercises</dd>
    <dd>Static Cycling Exercises</dd>

    <dt>Functional training</dt>
    
        <dd>Balance Training</dd>
    <dd>Fitness Training</dd>
        <dd>Gait & Stair Climbing Training</dd>
    <dd>Postural Correction Training</dd>
        <dd>Self-Care Training</dd>
    <dd>Hand Function Training</dd>
    <dt>Electrotherapy</dt>
    <dd>Wax Therapy</dd>
    <dd>MassageTherapy</dd>
    <dd>Short Wave Diathermy</dd>
    <dd>Interferential Therapy</dd>
    <dd>Hydro collator Pack</dd>

</dl>
<dl>
    <dt>techniques</dt>
    <br><br><br>
    <dd>Manipulation</dd>
    <dd>Tapping</dd>
    <dd>Trigger Release</dd>
    <dd>Ultrasound</dd>
    <dd>acupuncture</dd>
    <dd>Percussion </dd>
    <br>
    <dt>Services Offered</dt>
    <dd>Cardiopulmonary Rehabilitation</dd>
    <dd>Geriatric Rehabilitation</dd>
    <dd>Sports Rehabilitation</dd>
    <dd>Gynaecological Physiotherapy</dd>
    <dd>Paediatric Rehabilitation</dd>        
    <dd>Hand Rehabilitation</dd>

    <dt>Manual Theraphy</dt>
    <dd>Dry needling and acupuncture </dd>
    <dd>Stretches and exercises  </dd>
    <dd>Hydrotherapy </dd>
    <dd>Diathermy  </dd>
    <dd> Hot and cold applications</dd>
</dl>
</section>


<section id="service">
            <div class="row">
                <h1 class="text-center"> OUR SERVICES</h1>
                <div class="col-md-3 my-2">
                    <div class="card shadow">
                        <img src="img/accupunt.jpg"class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title">Body Acupuncture</h5>
                            <p class="card-text">Body Acupuncture is one of the most well-known and popular forms of alternative medicine in existence today,
                                 but it’s also extremely versatile. Acupuncture only relates to injuries or specific ailments, 
                                but it can be used in many ways that have nothing to do with physical injury or illness. </p>
                                 
                        

                        </div>
                    </div>
                </div>

                <div class="col-md-3 my-2">
                    <div class="card shadow">
                        <img src="img/ligament.jpg"class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title">Ligament injuries</h5>
                            <p class="card-text">Ligaments are cords of tough, flexible fibrous tissue that connect bones together and provide support to a joint. While ligaments are extremely strong, an awkward stretch or twist can cause a strain injury. 
                                With enough force, they can be torn—the most severe ligament injury.</p>
                                 
                        
                        </div>
                    </div>
                </div>

                <div class="col-md-3 my-2">
                    <div class="card shadow">
                        <img src="img/massage.jpg"class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title">Massage Therapy</h5>
                            <p class="card-text">Massage therapy is a great way to reduce stress and improve overall health. 
                                It can be used to treat a variety of conditions, including muscle pain, headaches, and even mental health issues occurs .Whether you are suffering from  chronic pain, we will help you get back on your feet quickly.</p>
                                
                        </div>
                    </div>
                </div>
            </div>
        </section>



</body>
</html>








