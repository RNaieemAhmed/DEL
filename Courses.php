<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		
		<title>DEL courses</title>

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
					<li class="nav-item"><a class="nav-link " href="index.php"> HOME <style></style></a></li>
					<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown"> LIBRARY </a>
						<ul class="dropdown-menu">
							<li><a class="dropdown-item" href="cse.php">CSE</a></li>
							<li><a class="dropdown-item" href="ece.php">ECE</a></li>
							<li><a class="dropdown-item" href="civ.php">CIV</a></li>
							<li><a class="dropdown-item" href="me.php">MECH</a></li>
						 </ul></li>
						 <li class="nav-item"><a class="nav-link" href="about.php"> ABOUT US </a></li>
						 <li class="nav-item"><a class="nav-link active" href="courses.php"> COURSES</a></li>
						 
						 
	
				</ul>
			 </div> <!-- navbar-collapse.// -->
			</div> <!-- container-fluid.// -->
		   </nav>
	
		<!-- /Header -->

        <section class="container-fluid px-0">
			<center><h1 style="color: salmon;text-shadow: 1px 1px black;">COURSES</h1></center>
			<hr>
            <div class="row align-items-center content">
                <div class="col-md-6 image order-1 order-md-2">
                    <img src="img/cse.jpg" alt="" class="img-fluid">
                </div>
                
                <div class="col-md-6 text-center order-2 order-md-1">
                    <div class="row justify-content-center">
                        <div class="col-10 col-lg-8 blurb mb-5 mb-md-0">
                            <a href="cse.php" style="text-decoration: none;"><h2 class="group_name">Computer Science And Engineering</h2></a>
                            <img src="imgs/lolli_icon.png" alt="" class="d-none d-lg-inline">
                            <p class="lead">Computer Science Engineering is a course that deals with design, implementation, and management of information systems of both software & hardware processes. ... Computer Science engineering aids with various disciplines such as electrical and electronics engineering, information technology, software engineering, and more.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row align-items-center content">
                <div class="col-md-6 image">
                    <img src="img/ece.jpg" width="500px" alt="" class="img-fluid">
                </div>
                <br>
                <div class="col-md-6 text-center">
                    <div class="row justify-content-center">
                        <div class="col-10 col-lg-8 blurb mb-5 mb-md-0">
							<a href="ece.php" style="text-decoration: none;"><h2 class="group_name">Electronics And Communication Engineering</h2></a>
                            <img src="imgs/lolli_icon.png" alt="" class="d-none d-lg-inline">
                            <p class="lead">Electronic engineering (also called electronics and communications engineering) is an electrical engineering discipline which utilizes nonlinear and active electrical components (such as semiconductor devices, especially transistors and diodes) to design electronic circuits, devices, integrated circuits and their systems.</p>
                        </div>
                    </div>
                </div>
                
            </div>

            <div class="row align-items-center content">
                <div class="col-md-6 image order-1 order-md-2">
                    <img src="img/ce.jpg" width="500px" alt="" class="img-fluid">
                </div>
                <br>
                <div class="col-md-6 text-center order-2 order-md-1">
                    <div class="row justify-content-center">
                        <div class="col-10 col-lg-8 blurb mb-5 mb-md-0">
                            <a href="ce.php" style="text-decoration: none;"><h2 class="group_name">Civil Engineering</h2></a>
                            <img src="imgs/lolli_icon.png" alt="" class="d-none d-lg-inline">
                            <p class="lead">Civil engineering is traditionally broken into a number of sub-disciplines. It is considered the second-oldest engineering discipline after military engineering,and it is defined to distinguish non-military engineering from military engineering. Civil engineering can take place in the public sector from municipal public works departments through to federal government agencies, and in the private sector from locally based firms to global Fortune 500 companies. </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row align-items-center content">
                <div class="col-md-6 image">
                    <img src="img/mech.jpg" width="500px" alt="" class="img-fluid">
                </div>
                <br>
                <div class="col-md-6 text-center">
                    <div class="row justify-content-center">
                        <div class="col-10 col-lg-8 blurb mb-5 mb-md-0">
                            <a href="me.php" style="text-decoration: none;"><h2 class="group_name">Mechanical Engineering</h2></a>
                            <img src="imgs/lolli_icon.png" alt="" class="d-none d-lg-inline">
                            <p class="lead">Mechanical engineering is the study, design, development, construction, and testing of mechanical and thermal sensors and devices, including tools, engines, and machines. Mechanical engineers work mostly in engineering services, research and development, and manufacturing.</p>
                        </div>
                    </div>
                </div>
                
            </div>
			<marquee style="font-size: x-large; color: red;" width="100%" direction="right" height="100px">
				More courses are in progress( comming soon )...!
				</marquee>            
        </section>
	
		

		<!-- Footer --> 
		<footer class="text-center text-lg-start text-black link_hover"style="background-color: whitesmoke;padding-top:10px;margin-top: 60px;">
			<section class="foot">
			<div class="container-fluid text-center text-md-start mt-5">
			  <div class="row mt-3">
				<div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
				  <h6 class="text-uppercase fw-bold">D   E   L</h6>
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
			<div class="btn_top">

				<button onclick="topFunction()" id="myBtn" title="Go to top"><img src="img/top.png" width="40px"></button>
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


		<!-- jQuery Plugins -->
		<script type="text/javascript" src="js/jquery.min.js"></script>
		<script type="text/javascript" src="js/bootstrap.min.js"></script>
		<script type="text/javascript" src="js/main.js"></script>

	</body>
</html>