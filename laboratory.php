<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">	
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">  
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="CSS/swiper-bundle.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="https://code.jquery.com/ui/1.13.1/themes/smoothness/jquery-ui.css">
</head>
<style type="text/css">
  <?Php include 'css/style.css';?>

.img{
	 filter: blur(3px);
  -webkit-filter: blur(3px);
  width: 100%;
  height: 500px;
}
.centered {
  position: absolute;
  top: 20%; 
  font-weight: bold;
  font-size: 25px;
}

.span{
	font-size: 50px;
}
.p{
	font-size: 20px;
	text-align: justify;
}

.featured-list {
	display: flex;
	justify-content: flex-start;
	align-items: center;
	flex-direction: column;
	list-style-type: none;
	padding: 0;
	max-width: 800px;
	margin-left: 22%;
	margin-right: 20%;
}

.featured-list li {
	display: flex;
	justify-content: flex-start;
	align-items: stretch;
	flex-direction: row;
	background-color: #dddee0;
	position: relative;
	border-radius: 16px;
	overflow: hidden;
	box-shadow: 4px 5px 10px 0 #a3a3a3;
	cursor: pointer;
	margin: 0.6em 0;
	min-width: 500px;
}

.featured-list li::before {
	position: absolute;
	width: 100%;
	height: 100%;
	content: " ";
	box-shadow: 0 0 0 2px #f5f5f576 inset;
	border-radius: 16px;
}

.featured-list li > div {
	display: flex;
	justify-content: flex-start;
	align-items: center;
	flex-direction: row;
	padding: 0 0.8em;
}

.featured-list li > div:first-child {
	position: relative;
	z-index: 1;
}

.featured-list li > div:first-child::before {
	position: absolute;
	background: rgb(131, 60, 38);
	background: var(--material-color);
	content: " ";
	height: 100%;
	width: 100%;
	top: 0;
	left: 0;
	z-index: -1;
	border-top-right-radius: 48px;
	border-bottom-right-radius: 48px;
	box-shadow: 1px 0 4px #3e3e3ed9;
}

.featured-list li > div:nth-child(2) {
	flex: 1;
	display: flex;
	justify-content: center;
	align-items: flex-start;
	flex-direction: column;
	padding: 0.4em;
}

.featured-list li > div:first-child span {
	font-size: 30px;
	color: #fafafa;
	font-weight: bold;
	opacity: 0.9;
	margin: 0 0.2em;
}

.featured-list li > div:nth-child(2) h2 {
	font-size: 14px;
}

.featured-list li > div:nth-child(2) span {
	font-size: 16px;
}

.featured-list li > div:last-child span {
	font-size: 4px;
	color: var(--material-color);
}

.featured-list span.div {
	width: 1px;
	height: 80%;
	background: rgb(255, 255, 255);
	background: linear-gradient(
		0deg,
		rgba(255, 255, 255, 0) 0%,
		rgba(117, 117, 117, 1) 50%,
		rgba(255, 255, 255, 0) 100%
	);
	opacity: 0.8;
}

.card-body i{
	font-size: 20px;
}

.img-fluid{
	width: 250px;
	border-radius: 5px;
}

.card img:hover{
	transform: scale(1.1);
	transition: .4s;
}

.card:hover{
	transform: scale(1.1);
	transition: .4s;
}

.card{
	height: 200px;
	width: 300px;
	box-shadow: 15px 15px 40px rgba(0, 0, 0, 0.15);
}

.card h4{
	font-size: 16px;
}
.text{
	color: #16103B;
}

.rows{
	border: transparent;
	box-shadow: 15px 15px 40px rgba(0, 0, 0, 0.15);

}
</style>

<body><br><br><br><br>
			<img class="img" src="img/25.jpg">
			<div class="centered mx-3">
				DEPARTMENT OF<br><span class="span">LABORATORY SERVICES</span>
			</div><br><br><br><br>
		<div style="overflow: hidden;">
  			<div style="float: left; width: 50%;" class="p col-md-6 mx-5"><br><br>
				<h2>Laboratory services</h2>
				<hr>
				<p>Laboratory services are an essential component of healthcare, providing critical information that helps healthcare providers diagnose and treat a wide range of conditions. At our hospital, we are proud to offer a comprehensive range of laboratory services to support the health and wellness of our patients.<br><br>
				Our laboratory is staffed by experienced and highly trained professionals, including medical technologists, pathologists, and other specialists. We use the latest technology and equipment to perform a wide range of tests, including:
				</p>
			</div>
			<div style="float: right; width: 40%; top: 20%;" class="my-5 mx-4">
    			<img src="img/26.jpg" alt="Image description here" style="width: 100%;">
 			</div>
 		</div>
			<ol class="featured-list">
			<li style="--material-color:#ff5722">
				<div>
					<span>01</span>
					<span class="div"></span>
					<span>Blood Test</span>
				</div>
				<div>
					<span>Our laboratory offers a variety of blood tests, including complete blood count (CBC), blood chemistry panels, and blood glucose tests. These tests can help diagnose conditions such as anemia, infections, liver disease, and diabetes.</span>
				</div>
				<div><span class="div"></span>
					
				</div>
			</li>
			<li style="--material-color:#2196f3">
				<div>
					<span>02</span>
					<span class="div"></span>
					<span>Microbiology</span>
				</div>
				<div>
					<span> Our microbiology department performs tests to identify and treat bacterial and fungal infections. These tests can help diagnose conditions such as pneumonia, meningitis, and sepsis.</span>
				</div>
				<div><span class="div"></span>
					
				</div>
			</li>
			<li style="--material-color:#4caf50">
				<div>
					<span>03</span>
					<span class="div"></span>
					<span>Immunology</span>
				</div>
				<div>
					<span>Our laboratory offers a range of immunology tests, including allergy testing, HIV testing, and autoimmune disorder testing. These tests can help diagnose and monitor conditions such as allergies, HIV, and rheumatoid arthritis.</span>
				</div>
				<div><span class="div"></span>
					
				</div>
			</li>
			<li style="--material-color:#025e51">
				<div>
					<span>04</span>
					<span class="div"></span>
					<span>Drug Testing</span>
				</div>
				<div>
					<span>Our laboratory performs drug testing for employers, government agencies, and other organizations. These tests can help ensure compliance with drug policies and identify drug use that may affect an individual's health or safety.</span>
				</div>
				<div><span class="div"></span>
				</div>
			</li>
		</ol> <br><br>
		<div class="container my-5">
  <div class="rows row">
    
    <div class="col-md-4">
        <div class="py-4">
        <h2 class="text-capitalize font-weight-bold my-3">Departmental<br><span  style="color: #9B5DE5">Subspecialities<i class="bi bi-chevron-double-right"></i></span></h2>
        </div>
    </div>
    <div class="col-md-8">
      <div class="row">
        <div class="col-md-6 px-4 my-2">
          <div class="mt-3">
            <h5 class="mb-2" style="font-weight: 600; color: #9B5DE5">Biochemistry</h5>
            <p class="text-secondary">Biochemistry is the study of biomolecules within living organisms. These compounds are found in every structure and process of every living species and appear to be key in the initiation and maintenance of life as we know it.</p>
          </div>
        </div>
        <div class="col-md-6 px-4 my-2">
          <div class="mt-3">
            <h5 class="mb-2" style="font-weight: 600; color: #9B5de5;">Histopathology & Immunohistochemistry (IHC)</h5>
            <p class="text-secondary">Histopathology is the diagnosis and study of diseases of the tissues, and involves examining tissues and/or cells under a microscope.</p>
          </div>
        </div>
        <div class="col-md-6 px-4 my-2">
          <div class="mt-3">
            <h5 class="mb-2" style="font-weight: 600; color: #9B5de5;">Microbiology</h5>
            <p class="text-secondary">Microbiology is the study of the biology of microscopic organisms - viruses, bacteria, algae, fungi, slime molds, and protozoa. </p>
          </div>
        </div>
        <div class="col-md-6 px-4 my-2">
          <div class="mt-3">
            <h5 class="mb-2" style="font-weight: 600; color: #9B5de5;">Haematology</h5>
            <p class="text-secondary">Hematology is a branch of medicine concerning the study of blood, blood-forming organs such as bone marrow, and blood-related disorders and diseases. </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div>
	<h1 class="text mx-1">Our Dedicated Consultants For Laboratory Services:</h1><br>
</div>
		<div class="row ">
                <div class="col-12 col-md-6 col-lg-3 my-1" style="padding-left: 30px;">
                    <div class="card text-center">
                        <div clas="card-body ">
                            <br>
                            <img src="img/j.jpg" alt="" class="img-fluid">
                            <h3 class="card-title py-2">DR Rajan</h3>
														<h4>Consultant - Haematology</h4>
                            <p class="socials">
                                <i class="bi bi-twitter text-dark mx-1"></i>
                                <i class="bi bi-linkedin text-dark mx-1"></i>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-3 my-1" style="padding-left: 30px;">
                    <div class="card text-center">
                        <div clas="card-body">
                            <br>
                            <img src="img/k.jpg" alt="" class="img-fluid">
                            <h3 class="card-title py-2">DR Senthil</h3>
                            <h4>Senior Consultant - Biochemistry</h4>
                            <p class="socials">
                                <i class="bi bi-twitter text-dark mx-1"></i>
                                <i class="bi bi-linkedin text-dark mx-1"></i>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-3 my-1" style="padding-left: 30px;">
                    <div class="card text-center">
                        <div clas="card-body">
                            <br>
                            <img src="img/15.jpg" alt="" class="img-fluid">
                            <h3 class="card-title py-2">DR Guna</h3>
                            <h4>Consultant - Microbiology</h4>
                            <p class="socials">
                                <i class="bi bi-twitter text-dark mx-1"></i>
                                <i class="bi bi-linkedin text-dark mx-1"></i>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-3 my-1" style="padding-left: 30px;">
                    <div class="card text-center">
                        <div clas="card-body">
                            <br>
                            <img src="img/11.jpg" alt="" class="img-fluid">
                            <h3 class="card-title py-2">DR Anbu</h3>
                            <h4>Senior Consultant - Histopathology</h4>
                            <p class="socials">
                                <i class="bi bi-twitter text-dark mx-1"></i>
                                <i class="bi bi-linkedin text-dark mx-1"></i>
                            </p>
                        </div>
                    </div>
                </div>
            </div>

		
</body><br><br><br>

  	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"></script>
  	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"></script>
  	<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

</html>