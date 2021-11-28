
<?php
	include("connection.php");
	error_reporting(0);
	session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: register.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: register.php");
  }

?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		
		<title>DEL</title>

		
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

		<link href="https://fonts.googleapis.com/css?family=Lato:700%7CMontserrat:400,600" rel="stylesheet">
	 	<link type="text/css" rel="stylesheet" href="css/style.css"/>

		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">		  
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"crossorigin="anonymous"></script>

    </head>

	<body>

		<!-- Header -->
		<nav class="navbar fixed-top navbar-expand-lg navbar-light" style="background-color:whitesmoke">
			<div class="container-fluid">
				<a class="navbar-brand logo" href="index.php"><img src="img/logo.png"width="300px"></a>
				 <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#main_nav">
						<span class="navbar-toggler-icon"></span>
			   </button>
			 <div class="collapse navbar-collapse" id="main_nav">
				<ul class="navbar-nav ms-auto">
					<li class="nav-item"><a class="nav-link active" href="index.php"> HOME <style></style></a></li>
					<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown"> LIBRARY </a>
						<ul class="dropdown-menu">
							<li><a class="dropdown-item" href="cse.php">CSE</a></li>
							<li><a class="dropdown-item" href="ece.php">ECE</a></li>
							<li><a class="dropdown-item" href="civ.php">CIV</a></li>
							
							<li><a class="dropdown-item" href="me.php">MECH</a></li>
						 </ul></li>
					<li class="nav-item"><a class="nav-link" href="about.php"> ABOUT US </a></li>
					
					<li class="nav-item"><a class="nav-link" href="courses.php"> COURSES</a></li>
					<li class="nav-item"><a class="nav-link" id="logoutt" <?php  if (isset($_SESSION['username'])) : ?>
						href="index.php?logout='1'" style="color: black;"> logout<spam> (</spam><?php echo $_SESSION['username']; ?><spam>)</spam>
					<?php endif ?> </a></li>				
					

					<?php if (isset($_SESSION['success'])) : ?>
      <div class="error success" >
      	<h3>
          <?php 
          	echo $_SESSION['success']; 
          	unset($_SESSION['success']);
          ?>
      	</h3>
      </div>
  	<?php endif ?>
	 

					
				</ul>
			 </div>
			</div>
		   </nav>
	
		<!-- /Header -->

		<!-- Home -->
		<div class="container-fluid "> 
			<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
			  <div class="carousel-indicators">
				<button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
				<button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
				<button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
			  </div>
			  <div class="carousel-inner">
				<div class="carousel-item active">
				  <img src="img/bg1.jpg" class="d-block w-100 " style="width:100%; height: 700px;" alt="img/1.png">
				  <div  class="carousel-caption  d-md-block">
					<h1  class="heading">Access infrastructure</h1>
						  <p class="paragraph">To build up a library is to create a life. It’s never just a random collection of books.</p>
				  </div>
				</div>
				<div class="carousel-item">
				  <img src="img/bg2.png" class="d-block w-100 "  style="width:100%; height: 700px;" alt="img/1.png">
				  <div class="carousel-caption  d-md-block">
					<h1 class="heading">Information center</h1>
						  <p class="paragraph" >Libraries were full of ideas – perhaps the most dangerous and powerful of all weapons.</p>
				  </div>
				</div>
				<div class="carousel-item">
				  <img src="img/bg33.jpg" class="d-block w-100" style="width:100%; height: 700px;" alt="img/1.png">
				  <div class="carousel-caption  d-md-block">
					<h1  class="heading">collection of manuscripts</h1>
						  <p class="paragraph">Bad libraries build collections, good libraries build services, great libraries build communities.</p>
				  </div>
				</div>
			  </div>
			  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
				<span class="visually-hidden">Previous</span>
			  </button>
			  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
				<span class="carousel-control-next-icon" aria-hidden="true"></span>
				<span class="visually-hidden">Next</span>
			  </button>
			</div>
		  </div> 
		 
		 
		<!-- /Home -->

		<!-- About -->
		<div id="about" class="section">
			<div class="container">
				<div class="row">
					<div class="col-md-6">
						<div class="section-header">
							<h2>Welcome to "DEL"</h2>
							<p class="lead">Libraries store the energy that fuels the imagination</p>
						</div>

						<!-- feature -->
						<div class="feature">
							<i class="feature-icon fa fa-book"></i>
							<div class="feature-content">
								<h4>Online Materials </h4>
								<p>Books are the quietest and most constant of friends; they are the most accessible and wisest of counselors, and the most patient of teachers. </p>
							</div>
						</div>
						<!-- /feature -->

						<!-- feature -->
						<div class="feature">
							<i class="feature-icon fa fa-users"></i>
							<div class="feature-content">
								<h4>Expert Staff</h4>
								<p>communication and social skills. patience, responsibility, tolerance. ability to solve conflicts, emotional intelligence. creativity and enthusiasm .</p>
							</div>
						</div>
						<!-- /feature -->

						<!-- feature -->
						<div class="feature">
							<i class="feature-icon fa fa-comments"></i>
							<div class="feature-content">
								<h4>Community</h4>
								<p>One of the marvelous things about community is that it enables us to welcome and help people in a way we couldn't as individuals.</p>
							</div>
						</div>
						<!-- /feature -->

					</div>

					<div class="col-md-6">
						<div class="about-img">
							<img src="./img/inside.jpg" width="100%" height="100% " alt="">					
						</div>
					</div>
				</div>								
			</div>
		</div>
		<!-- /About -->

		<!-- Courses -->
		<div id="courses" class="section">
			<div class="container">
				<hr>
				<div class="row">
					<div class="section-header text-center">
						<h2>Explore Our Departments</h2>
						<p class="lead"><b>ENGINEERING:</b>the branch of science and technology concerned with the design, building, and use of engines, machines, and structures.</p>
					</div>
				</div>
		<!-- courses -->
				<div id="courses-wrapper">
					<div class="row">
						<div class="col-md-3 col-sm-6 col-xs-6">
							<div class="course">
								<a href="CSE.php" class="course-img">
									<img src="img/cse.jpg" alt="">
									<i class="course-link-icon fa fa-link"></i>
								</a>
								
								<div class="course-details">
									<span class="course-category"><center>Computer Science Engineering</center> </span>									
								</div>
							</div>
						</div>
						<div class="col-md-3 col-sm-6 col-xs-6">
							<div class="course">
								<a href="ECE.php" class="course-img">
									<img src="img/ece.jpg" alt="">
									<i class="course-link-icon fa fa-link"></i>
								</a>								
								<div class="course-details">
									<span class="course-category"><center>Electronics And Communication Engineering</center></span>									
								</div>
							</div>
						</div>
						<div class="col-md-3 col-sm-6 col-xs-6">
							<div class="course">
								<a href="CIV.php" class="course-img defect">
									<img src="img/ce.jpg" alt="" height="203px" ;>
									<i class="course-link-icon fa fa-link"></i>
								</a>								
								<div class="course-details">
									<span class="course-category"><center>Civil Engineering</center></span>									
								</div>
							</div>
						</div>			
						<div class="col-md-3 col-sm-6 col-xs-6">
							<div class="course">
								<a href="ME.php" class="course-img defect">
									<img src="img/mech.jpg" alt="" height="203px";>
									<i class="course-link-icon fa fa-link"></i>
								</a>								
								<div class="course-details">
									<span class="course-category"><center>Mechanical Engineering</center></span>									
								</div>
							</div>
						</div>
					</div>
			</div>
		</div>
		<!-- /Courses -->

		<div id="contact-cta" class="section">
			<!-- Backgound Image -->
			<div class="bg-image bg-parallax overlay" style="background-image:url(img/lib.jpg)"></div>
			<!-- Backgound Image -->
			<div class="container blank">
				<div class="home-wrapper">
					<div class="container">
						<div class="row">
							<div class="col-md-8">
								<center><h1 class="white-text"style="color:salmon"> DIGITAL LEARNING</h1></center>
								<center><p class="lead white-text"style="color:white"> “The students of the future will demand the learning support that is appropriate for their context … ” </p></center>								
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<!-- Why us -->
		<div id="why-us" class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<div class="section-header text-center">
						<h2>Why "DEL" </h2>
						<p class="lead">Libraries store the energy that fuels the imagination.</p>
					</div>
					<!-- feature -->
					<div class="col-md-4">
						<div class="feature">
							<i class="feature-icon fa fa-book"></i>
							<div class="feature-content">
								<h4>Online Materials</h4>
								<p>Books are the quietest and most constant of friends; they are the most accessible and wisest of counselors, and the most patient of teachers.</p>
							</div>
						</div>
					</div>
					<!-- /feature -->
					<!-- feature -->
					<div class="col-md-4">
						<div class="feature">
							<i class="feature-icon fa fa-users"></i>
							<div class="feature-content">
								<h4>Expert Staff</h4>
								<p>communication and social skills. patience, responsibility, tolerance. ability to solve conflicts, emotional intelligence. creativity and enthusiasm .</p>
							</p>
							</div>
						</div>
					</div>
					<!-- /feature -->
					<!-- feature -->
					<div class="col-md-4">
						<div class="feature">
							<i class="feature-icon fa fa-comments"></i>
							<div class="feature-content">
								<h4>Community</h4>
								<p>One of the marvelous things about community is that it enables us to welcome and help people in a way we couldn't as individuals.</p>
							</div>
						</div>
					</div>
					<!-- /feature -->
					<!-- feature -->
					<div class="col-md-4">
						<div class="feature">
							<i class="feature-icon fa fa-user"></i>
							<div class="feature-content">
								<h4>Support</h4>
								<p>Have Doubts?we are here to help you out!!
						
								<br>24/7 support from us.</p>
							</div>
						</div>
					</div>
					<!-- /feature -->
					<!-- feature -->
					<div class="col-md-4">
						<div class="feature">
							<i class="feature-icon fa fa-link"></i>
							<div class="feature-content">
								<h4>Bonding</h4>
								<p>The closest bonds we will ever know are bonds of knowledge.Books are a uniquely portable magic.</p>
							</div>
						</div>
					</div>
					<!-- /feature -->
					<!-- feature -->
					<div class="col-md-4">
						<div class="feature">
							<i class="feature-icon fa fa-instagram"></i>
							<div class="feature-content">
								<h4>Media</h4>
								<p>Explore your thougths and ideas with your friends.</p>
							</div>
						</div>
					</div>
					<!-- /feature -->
				</div>
				<!-- /row -->
				<hr class="section-hr">
				<!-- row -->
				<div class="contailer-fluid">
					<div class="row help_form">
						<div class="col-md-2"></div>
			
						<div class="col-md-8 boxx">
							
							<div class="row help_form">
									<h1 class="help_h1">EXPLORE YOUR IDEAS</h1>
									
								<div class="col-md-6 help_img">
									<img src="img/del.png">
								</div>
								<div class="col-md-6 ">
			
									<form class="help_form">
										<input class="help_input" type="message" placeholder="Enter Name" name="name" required>
										<input class="help_input" type="email" placeholder="Enter Email" name="email" required>
										<input class="help_input" type="message" placeholder="Enter Number" name="number" required>
										<textarea class="help_input"type="message" name="textarea" rows="4" cols="50">Enter Your Suggession...!</textarea>
										<button class="button1" onclick="">Submit</button>
									</form>
								</div>
			
							</div>
			
						</div>
			
						<div class="col-md-2"></div>
					</div>
			
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /Why us --> 
		<div id="contact-cta" class="section">
			<!-- Backgound Image -->
			<div class="bg-image bg-parallax overlay" style="background-image:url(img/c1.jpg)"></div>
			<!-- Backgound Image -->
			<div class="container blank">
				<div class="home-wrapper">
					<div class="container">
						<div class="row">
							<div class="col-md-8">
								<center><h1 class="white-text"style="color:salmon">  Electronic Library</h1></center>
								<center><p class="lead white-text"style="color:white">Another scenario is possible, and that is the e-book will succeed and that books will be downloaded from the Internet</p></center>
								
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="btn_top">
			<button onclick="topFunction()" id="myBtn" title="Go to top"><img src="img/top.png" width="40px"></button>
		</div>
		</div>
		
	<!-- Footer --> 
  <footer
          class="text-center text-lg-start text-black link_hover"style="background-color: whitesmoke;padding-top:10px;margin-top: 60px;">
    <section class="foot">
      <div class="container text-center text-md-start mt-5">
        <div class="row mt-3">
          <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
            <h6 class="text-uppercase fw-bold">Digital Engineering Library</h6>
            <hr class="mb-4 mt-0 d-inline-block mx-auto"style="width: 60px; background-color: #7c4dff; height: 2px"/>               
            <p>
				Giving  access to multiple contents with a potentially infinite number of resources and selections at hand.
            </p>
          </div>
          <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
            <h6 class="text-uppercase fw-bold">JUST US</h6>
            <hr
                class="mb-4 mt-0 d-inline-block mx-auto"
                style="width: 60px; background-color: #7c4dff; height: 2px"
                />
            <p>
              <a href="register.php" class="text-black footer_links">login</a>
            </p>
            <p>
              <a href="register.php" class="text-black footer_links">sign up</a>
            </p>
           
          </div>
          <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
            <h6 class="text-uppercase fw-bold">MORE</h6>
            <hr
                class="mb-4 mt-0 d-inline-block mx-auto"
                style="width: 60px; background-color: #7c4dff; height: 2px"
                />
            <p>
              <a href="pp.php" class="text-black footer_links">Privacy Policy</a>
            </p>
            <p>
              <a href="ce.php" class="text-black footer_links">Code Of Ethics</a>
            </p>
            
          </div>
          <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
            <h6 class="text-uppercase fw-bold">CONTACT US</h6>
            <hr class="mb-4 mt-0 d-inline-block mx-auto"style="width: 60px; background-color: #7c4dff; height: 2px"/>
				<div class="social-links">
			<p><i class="fa fa-building"></i>Kuppam,Andhra Pradesh...(517425)</p>            
            <p><i class="fa fa-envelope"></i> info@del.epizy.com</p>
            <p><i class="fa fa-phone mr-3"></i> + 91-9347243013 </p>
          </div>
       </div>
      </div>
	  </div>
    </section>
    <!-- Section: Links  -->
 <section  class="d-flex justify-content-between p-4" style="background-color:rgb(155, 154, 154)";>
     <div class="me-5">
        <span>Get connected with us :</span>
      </div>
      <div>
        <a target="_blank" class="icon_color text-black me-4">
          <i class="fa fa-facebook-f" style="color:rgb(0, 0, 141);font-size: larger;"></i>
        </a>
        <a target="_blank" class="icon_color text-black me-4">
          <i class="fa fa-twitter" style="color:skyblue;font-size: larger;"></i>
        </a>
        <a target="_blank" class="icon_color text-black me-4">
		
          <i class="fa fa-google" style="color:purple;font-size: larger;"></i>
        </a>
        <a target="_blank" class="icon_color text-black me-4">
          <i class="fa fa-instagram" style="color:red;font-size: larger;"></i>
        </a>    
      </div>
    </section>
  </footer>
  <center><img src="img/logo.png" width="500px" style="padding-top: 40px;"></center>
  <!-- Footer -->
  </div>



  <!--******************************************************************SCRIPT************************************************************-->
        <script type="text/javascript">
			document.addEventListener("DOMContentLoaded", function(){
				// add padding top to show content behind navbar
				navbar_height = document.querySelector('.navbar.fixed-top').offsetHeight;
				document.body.style.paddingTop = navbar_height + 'px';
			}); 
			// DOMContentLoaded  end
		</script>

		<script>
			var mybutton = document.getElementById("myBtn");
			window.onscroll = function() {scrollFunction()};

			function scrollFunction() {
			if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
				mybutton.style.display = "block";
			} else {
				mybutton.style.display = "none";
			}
		}

		function topFunction() {
		document.body.scrollTop = 0;
		document.documentElement.scrollTop = 0;
		}
		</script>	
	</div>
	
</body>
</html>

<?php

$bn=$_GET['name'];
$bi=$_GET['email'];
$bd=$_GET['number'];
$bm=$_GET['message'];

$query="INSERT INTO dellsupport VALUES('$bn','$bi','$bd','$bm')";
$data=mysqli_query($conn,$query);

if($data){
	echo "Data inserted into database";
}
else{
	echo "Failed to insert data into database";
}
?>
