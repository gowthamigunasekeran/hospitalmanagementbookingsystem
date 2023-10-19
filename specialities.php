<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<style type="text/css">
  <?Php include 'css/style1.css';?>

  *{
  margin:0;
  padding:0;
  box-sizing:border-box;
}
@keyframes fade{
  from{
    opacity:0.4;
  }
  to{
    opacity:1;
  }
}

body{
  background:#eeeee;
}
  #slider{
  margin:0 auto;
  width:80%;
  overflow:hidden;
}

.slides{
  overflow:hidden;
  animation-name:fade;
  animation-duration:1s;
  display:none;
}

img{
  justify-items: center;
  height: 80%;
  width:100%;
}

#dot{
  margin:0 auto;
  text-align:center;
}
.dot{
  display:inline-block;
  border-radius:50%;
  background:#d3d3d3;
  padding:8px;
  margin:10px 5px;
}

.active{
  background:black;
}

@media (max-width:567px){
  #slider{
    width:100%;

  }
}

#heading{
  display:block;
  text-align:center;
  font-size:2em;
  margin:10px 0px;

}
</style>
</head>
<body><br><br><br><br><br>
  <div class="row mx-0">
      <h1>SPECIALITIES</h1>
    </div>
  <br> 
  <div id="slider">  
    <div class="slides">  
      <img src="img/eye.jpg" width="100%" />
    </div>
    
    <div class="slides">  
      <img src="img/teeth.jpg" width="100%" />
    </div>
    
    <div class="slides">  
      <img src="img/heart.jpg" width="100%" />
    </div> 
    
    <div class="slides">  
      <img src="img/ear.jpeg" width="100%" />
    </div>   
    
    <div id="dot">
      <span class="dot"></span>
      <span class="dot"></span>
      <span class="dot"></span>
      <span class="dot"></span>
    </div>
  </div>
  <br><br>
  <div class="row mx-0">
    <hr><br><br>
    <div class="col-md-4 col-sm-6">
      <div class="img-area1 my-1 mx-1">
        <img src="img/j.jpg">
        <div class="img-text1">
          <h3>DR GOPINATH</h3>
          <h3> Ear specialist</h3>
        </div>
      </div>
    </div>
    <div class="col-md-4 col-sm-6">
      <div class="img-area1 my-1 mx-1">
        <img src="img/i.jpg">
        <div class="img-text1">
          <h3>DR THANGAVEL </h3>
          <h3> ENT Specialist</h3>
        </div>
      </div>
    </div>
    <div class="col-md-4 col-sm-6">
    <div class="about-text mx-1">
            <h4 id="ent">ENT Specialist</h4>
            <p>An ENT specialist or an otolaryngologist is a physician trained to treat patients with issues pertaining to the ear, nose, throat and structures of the neck and head. This is a specialist with the skills required for diagnosing and treating diseases of the larynx, upper pharynx, sinuses and oral cavity. The specialist treats both children and adults.  </p>
          </div>
      </div>
  </div>
  <div class="row my-5 mx-0">
    <hr><br><br>
  	<div class="col-md-4 col-sm-6">
    <div class="about-text mx-1">
            <h4 id="cardio">CARDIOLOGY</h4>
            <p>Some of the strategies used by cardiologists to combat cardiovascular diseases include coronary artery bypass surgery, percutaneous coronary intervention, percutaneous transluminal angioplasty and stenting. Cardiologists also may diagnose cardiovascular disorders  cardiac stress tests, echocardiography or electrocardiography or computed tomography .</p>
          </div>
      </div>
    <div class="col-md-4 col-sm-6 ">
      <div class="img-area1 my-1 mx-1">
        <img src="img/k.jpg">
        <div class="img-text1">
          <h3>DR adam</h3>
          <h3> cadiologist</h3>
        </div>
      </div>
    </div>
    <div class="col-md-4 col-sm-6 ">
      <div class="img-area1 my-1 mx-1">
        <img src="img/10.jpg">
        <div class="img-text1">
          <h3>DR brain </h3>
          <h3> cardiologist</h3>
        </div>
      </div>
    </div>
  </div>
  <div class="row mx-0">
    <hr><br><br>
    <div class="col-md-4 col-sm-6">
      <div class="img-area1 my-1 mx-1">
        <img src="img/11.jpg">
        <div class="img-text1">
          <h3>DR Gopal</h3>
          <h3> dentist</h3>
        </div>
      </div>
    </div>
    <div class="col-md-4 col-sm-6">
      <div class="img-area1 my-1 mx-1">
        <img src="img/15.jpg">
        <div class="img-text1">
          <h3>DR Nitin </h3>
          <h3> dentist</h3>
        </div>
      </div>
    </div>
    <div class="col-md-4 col-sm-6">
    <div class="about-text mx-1">
                <h4 id="dent">DENTISTRY</h4>
            <p>Dentistry, also known as dental medicine and oral medicine, is the branch of medicine focused on the teeth, gums, and mouth. It consists of the study, diagnosis, prevention, management, and treatment of diseases, disorders, and conditions of the mouth, most commonly focused on dentition as well as the oral mucosa</p>
          </div>
      </div>
  </div>
  <div class="row my-5 mx-0">
    <hr><br><br>
  	<div class="col-md-4 col-sm-6">
    <div class="about-text mx-1">
            <h4 id="eye">EYE SPECIALIST</h4>
            <p>Eye care specialists play an important role in maintaining your eye health and vision. Ophthalmologists and optometrists are eye doctors who diagnose and treat issues that affect your eyes. Opticians help you choose the right glasses, contacts or other corrective lenses after your eye doctor gives you a prescription.</p>
          </div>
      </div>
    <div class="col-md-4 col-sm-6">
      <div class="img-area1 my-1 mx-1">
        <img src="img/16.jpg">
        <div class="img-text1">
          <h3>DR thomas </h3>
          <h3>Eye Specialist </h3>
        </div>
      </div>
    </div>
    <div class="col-md-4 col-sm-6">
      <div class="img-area1 my-1 mx-1">
        <img src="img/14.jpg">
        <div class="img-text1">
          <h3>DR andrew </h3>
          <h3> Eye Specialist</h3>
        </div>
      </div>
    </div>
  </div>
  <div class="row mx-0">
    <hr><br><br>
    <div class="col-md-4 col-sm-6">
      <div class="img-area1 my-1 mx-1">
        <img src="img/12.jpg">
        <div class="img-text1">
          <h3>DR lisa</h3>
          <h3> gynecologist</h3>
        </div>
      </div>
    </div>
    <div class="col-md-4 col-sm-6">
      <div class="img-area1 my-1 mx-1">
        <img src="img/13.jpg">
        <div class="img-text1">
          <h3>DR jennie </h3>
          <h3> gynecologist</h3>
        </div>
      </div>
    </div>
    <div class="col-md-4 col-sm-6">
    <div class="about-text mx-1">
            <h4 id="gyno">GYNECOLOGY</h4>
            <p>A gynecologist is a doctor who specializes in female reproductive health. They diagnose and treat issues related to the female reproductive tract. This includes the uterus, fallopian tubes, and ovaries and breasts.</p>
          </div>
      </div>
  </div><br><br>
<script type="text/javascript">
  var index = 0;
var slides = document.querySelectorAll(".slides");
var dot = document.querySelectorAll(".dot");

function changeSlide(){

  if(index<0){
    index = slides.length-1;
  }
  
  if(index>slides.length-1){
    index = 0;
  }
  
  for(let i=0;i<slides.length;i++){
    slides[i].style.display = "none";
    dot[i].classList.remove("active");
  }
  
  slides[index].style.display= "block";
  dot[index].classList.add("active");
  
  index++;
  
  setTimeout(changeSlide,2000);
  
}

changeSlide();
</script>
</body>
</html>