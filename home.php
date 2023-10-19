<!DOCTYPE html>
<html>
<head>
  <title> hospital </title>
<style type="text/css">
  <?Php include 'css/style.css';?>
  
.intro {
  height: 100vh;
  position: relative;
  display: flex;
  justify-content: center;
  align-items: center;
  text-align: center;
  letter-spacing: 0.1rem;
}
.intro-slideshow img {
    filter: blur(1px);
  -webkit-filter: blur(1px);
  position: absolute;
  top: 0;
  left: 0;
  width: 100%; /* relative to nearest positioned ancestor and not nearest block-level ancestor - alternatively: width: 100vw; */
  height: 100%; /* relative to nearest positioned ancestor and not nearest block-level ancestor - alternatively: height: 100vh; */ 
  object-fit: cover;
  z-index:-1;
  /* filter: brightness(50%); */ /* 0% black, 100% original image, values > 100% are allowed for brighter than original image. */
  /* display: none; */
  opacity: 0;
  transition: opacity 0.75s ease-in-out;
}
/* .intro-slideshow img:first-child {
  display: block;
  opacity: 1;
} */
.intro .intro-header {
    width: 100%;
    height: 100%;
}
.intro h1{
    background-color: rgb(255, 255, 255,0.45);
    font-size: 50px;
    margin-top: 570px;
    text-decoration: bolder;
}
.intro p {
    background-color: rgb(255, 255, 255,0.45);
    color: black;
  font-size: 20px;
  text-decoration: bolder;
}

@media (max-width: 700px) {
  html { font-size: 12px; }
  .intro-header { padding: 1.5rem 2rem; }
  .intro h1 { font-size: 2.5rem; }
  .intro p { font-size: 1.25rem; }
}

</style>
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
</head>
<body>
<header class="intro">
  <div class="intro-slideshow">
    <img src="img/5.jpg" class="b-block w-100" width="100%" alt="...">
    <img src="img/3.jpg" class="d-block w-100"  alt="...">
    <img src="img/9.jpeg" class="d-block w-100" alt="...">
  </div>
  <div class="intro-header">
    <h1 style="color: black;"><span style="color:#0A7DAF">BEST</span>HOSPITAL</h1>
    <p>Multi Speciality Hospital - Chennai </p>
  </div>
</header>
<section id="about" class="about-section-padding">
    <div class="container my-5">
      <div class="row">
        <div class="col-lg-5">
          <div class="about-img">
            <img src="img/5.jpg" style="width:350px ;" alt="image" id="sli"> 
          </div>            
        </div>        
        <div class="col-sm-6  col-xs-12 pl-0  my-5">
          <div class="about-text">
            <h1>ABOUT US </h1><hr>
            <h2>We provide BEST QUALITY SERVICES ever</h2>
            <p>For more straightforward sizing in CSS, we switch the global box-sizing value from content-box to border-box. This ensures padding does not affect the final computed width of an element, but it can cause problems with some third-party software like Google Maps and Google Custom Search Engine.</p>
            <a href="aboutus" class=" btn btn-primary">MORE INFO</a>
          </div>
        </div>      
      </div>
      <br><br><br>
        <div class="row">
            <div class="card-02">
                <div class="card-body">
                    <h1><i class="bi bi-eye"></i> OUR VISION</h1>
                  <!--<img src="img/im21.jpg">-->
                <p>To continue to provide exemplary physical and emotional care for each of our patients and their families.
                     To continually upgrade our services by becoming an internationally accredited hospital.</p>
            </div>
        </div>
            <div class="card-02">
                <h1><i class="bi bi-bullseye"></i> OUR MISSION</h1>
                <!--<img src="img/im22.jpg">-->
                <p>To deliver quality healthcare at affordable prices and to strive with unrelenting commitment towards clinical excellence
                  To treat our patients with unparalleled skill and compassion.</p>
            </div>
        </div>
    </div>
  </section>
<section id="team" class="about-section-padding">
    <div class="container mx-auto mt-4">
        <div class="row my-5">
            <h3 class="my-3" style="text-align: center;">SPECIALITIES</h3><hr>
        </div>
    <div class="slider owl-carousel">
        <div class="card" id="card1" style="width: 20rem;">
            <div class="img">
                <img src="img/9.jpg" alt="" style="width: 100% ; height: 200px;">
            </div>
            <div class="content">
                <div class="title">GENERAL CHECKUP</div>
                <p>A physical examination is a routine test your primary care provider (PCP) performs to check your overall health.</p>
            </div>
        </div>
        <div class="card" id="card1" style="width: 20rem;">
            <div class="img">
                <img src="img/6.jpg" alt="" style="width: 100% ; height: 200px;">
            </div>
            <div class="content">
                <div class="title">ENT</div>
                <p>An ENT specialist or an otolaryngologist is a physician trained to treat patients with issues pertaining to the ear.</p>
            </div>
        </div>
        <div class="card" id="card1" style="width: 20rem;">
            <div class="img">
                <img src="img/7.jpg" alt="">
            </div>
            <div class="content">
                <div class="title">CARDIOLOGY</div>
                <p>Some of the strategies used by cardiologists to combat cardiovascular diseases include coronary artery bypass surgery.</p>
            </div>
        </div>
        <div class="card" id="card1" style="width: 20rem;">
            <div class="img">
                <img src="img/8.jpg" alt="">
            </div>
            <div class="content">
                <div class="title">DENTISTRY</div>
                <p>Dentistry, also known as dental medicine and oral medicine, is the branch of medicine focused on the teeth, gums, and mouth.</p>
            </div>
        </div>
    </div>
    <a href="specialities" class="btn btn-primary my-3">View More</a>
    </div>
</section>
<script>
      $(".slider").owlCarousel({
        loop: true,
        autoplay: true,
        autoplayTimeout: 2000, //2000ms = 2s;
        autoplayHoverPause: true,
      });
    </script>              
        <script type="text/javascript">
     var sli = document.getElementById("sli");

     var img = new Array(
      "img/2.jpg",
      "img/3.jpg",
      "img/4.jpg",
      );
     var len = img.length;
     var i = 0;

     function slider(){
      if (i > len-1) {
        i=0;
      }
      sli.src = img[i];
      i++;
      setTimeout('slider()' ,3000);
     }

   </script>

   <script>
        let popup = document.getElementById("popup");
        function openPopup(){
            popup.classList.add("open-popup");
        }
        function closePopup(){
            popup.classList.remove("open-popup");
        }
    </script>
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
    <script type="text/javascript">
        const slideshowImages = document.querySelectorAll(".intro-slideshow img");

const nextImageDelay = 5000;
let currentImageCounter = 0; // setting a variable to keep track of the current image (slide)

// slideshowImages[currentImageCounter].style.display = "block";
slideshowImages[currentImageCounter].style.opacity = 1;

setInterval(nextImage, nextImageDelay);

function nextImage() {
  // slideshowImages[currentImageCounter].style.display = "none";
  slideshowImages[currentImageCounter].style.opacity = 0;

  currentImageCounter = (currentImageCounter+1) % slideshowImages.length;

  // slideshowImages[currentImageCounter].style.display = "block";
  slideshowImages[currentImageCounter].style.opacity = 1;
}
    </script>
</body>
</html>

