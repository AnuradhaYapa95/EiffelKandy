<?php
$message="";
if(count($_POST)>0) {
	$conn = mysqli_connect("localhost","id15299360_eihe","XhHQ>=?9-/|>u=uf","id15299360_eihekandy");
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}
	$sql = "INSERT INTO contactus (name, email, mobile, msg, status) VALUES ('" . $_POST["name"] . "','" . $_POST["email"] . "','" . $_POST["mobile"] . "','" . $_POST["msg"] . "','Unanswered')";

	if ($conn->query($sql) === TRUE) {
		echo '<script>alert("Heyy, thanks for the message! We will get back to you soon!")</script>';
		} 
		else {
		echo '<script>alert("Ooops Sorry! Something went wrong!")</script>';
	  	}
	  
	  $conn->close();
}
?>
<!DOCTYPE HTML>
<html lang="en">
	<head>
		<title>Contact Us</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<link rel="stylesheet" href="assets/css/main.css" />

		<style>
			@import url(https://fonts.googleapis.com/css?family=Open+Sans:400italic,400,300,600);
	
	* {
		margin:0;
		padding:0;
		box-sizing:border-box;
		-webkit-box-sizing:border-box;
		-moz-box-sizing:border-box;
		-webkit-font-smoothing:antialiased;
		-moz-font-smoothing:antialiased;
		-o-font-smoothing:antialiased;
		font-smoothing:antialiased;
		text-rendering:optimizeLegibility;
	}
	
	.container {
		max-width:400px;
		width:100%;
		margin:0 auto;
		position:relative;
	}
	
	#contact input[type="text"], #contact input[type="email"], #contact input[type="tel"], #contact input[type="url"], #contact textarea, #contact button[type="submit"] { font:400 12px/16px "Open Sans", Helvetica, Arial, sans-serif; }
	
	#contact {
		background:#F9F9F9;
		padding:25px;
		margin:50px 0;
	}
	
	#contact h3 {
		color: #0CF;
		display: block;
		font-size: 30px;
		font-weight: 400;
	}
	
	#contact h4 {
		margin:5px 0 15px;
		display:block;
		font-size:13px;
	}
	
	fieldset {
		border: medium none !important;
		margin: 0 0 10px;
		min-width: 100%;
		padding: 0;
		width: 100%;
	}
	
	#contact input[type="text"], #contact input[type="email"], #contact input[type="tel"], #contact input[type="url"], #contact textarea {
		width:100%;
		border:1px solid #CCC;
		background:#FFF;
		margin:0 0 5px;
		padding:10px;
	}
	
	#contact input[type="text"]:hover, #contact input[type="email"]:hover, #contact input[type="tel"]:hover, #contact input[type="url"]:hover, #contact textarea:hover {
		-webkit-transition:border-color 0.3s ease-in-out;
		-moz-transition:border-color 0.3s ease-in-out;
		transition:border-color 0.3s ease-in-out;
		border:1px solid #AAA;
	}
	
	#contact textarea {
		height:100px;
		max-width:100%;
	  resize:none;
	}
	
	#contact button[type="submit"] {
		cursor:pointer;
		width:100%;
		border:none;
		background:#0CF;
		color:#FFF;
		margin:0 0 5px;
		padding:10px;
		font-size:15px;
	}
	
	#contact button[type="submit"]:hover {
		background:#09C;
		-webkit-transition:background 0.3s ease-in-out;
		-moz-transition:background 0.3s ease-in-out;
		transition:background-color 0.3s ease-in-out;
	}
	
	#contact button[type="submit"]:active { box-shadow:inset 0 1px 3px rgba(0, 0, 0, 0.5); }
	
	#contact input:focus, #contact textarea:focus {
		outline:0;
		border:1px solid #999;
	}
	::-webkit-input-placeholder {
	 color:#888;
	}
	:-moz-placeholder {
	 color:#888;
	}
	::-moz-placeholder {
	 color:#888;
	}
	:-ms-input-placeholder {
	 color:#888;
	}
	
		</style>
	</head>
	<body class="is-preload">

        <!-- Header -->
        
        
			<header id="header">
				<a class="logo" href="index.html">EIHE</a>
				<nav>
					<a href="#menu">Menu</a>
				</nav>
            </header>
            
            

		<!-- Nav -->
			<nav id="menu">
				<ul class="links">
					

					<li><a href="index.html">Home</a></li>
					<li><a href="about_us.html">About Us</a></li>
					<li><a href="ouralumni.html">Our Alumni</a></li>
					<li><a href="gallery.html">Gallery</a></li>
					<li><a href="degree.html">Degree Programs</a></li>
					<li><a href="other2.html">Other Programs</a></li>
					<li><a href="facilities.html">Facilities</a></li>
					<li><a href="contact_us.php">Contact Us</a></li>
					
				</ul>
			</nav>

			<div id="heading" style="background-image: url('images/sample12.jpg');">
				<h1>Contact Us</h1>
            </div>
            
            <div id="heading" style="background-image: url('images/final1.jpg');">
                <h1 style="font-size:23px;">So that we can propel you to greater heights<i class="fa fa-graduation-cap" style="font-size:36px"></i></h1>
            </div>

            <div id="heading" style="background-image: url('images/thavi.jpg');">
                <h1 style="font-size:20px; padding-top: 390px; padding-left: 980px;"><span style="color:white">We are ready to help you! <i class="fa fa-thumbs-up " style="font-size:42px"></i></span> </h1>
            </div>
            
            

			<div class="container">  
				<form id="contact" action="" method="post" style="font-family: 'Comic Sans MS', cursive, sans-serif;">
				  <center><p style="color: red; font-size: 25px;">Drop us a message and we will revert to you at our earliest convenience!<i class="fa fa-graduation-cap" style="font-size:36px"></i></p></center>
				  <fieldset>
					<input style="font-size: 20px; font-family:'Comic Sans MS', cursive, sans-serif"; name="name" placeholder="Name" type="text" tabindex="1" required autofocus>
				  </fieldset>
				  <fieldset>
					<input style="font-size: 20px; font-family:'Comic Sans MS', cursive, sans-serif"; name="email" placeholder="Email" type="email" tabindex="2" required>
				  </fieldset>
				  <fieldset>
					<input style="font-size: 20px; font-family:'Comic Sans MS', cursive, sans-serif"; name="mobile" placeholder="Mobile Number" type="tel" tabindex="3" required>
				  </fieldset>
				  <fieldset>
					<textarea style="height: 240px; font-size: 20px; font-family:'Comic Sans MS', cursive, sans-serif"; name="msg" placeholder="Message.........." tabindex="5" required></textarea>
				  </fieldset>
				  <fieldset>
					<button style="background-color:red ; font-size: 20px; font-family:'Comic Sans MS', cursive, sans-serif"; name="submit" type="submit" id="contact-submit" data-submit="...Sending"><span style="color:white">Click Me!</span></button>
				  </fieldset>
				</form>
			</div>

            
            <div id="heading" style="background-image: url('images/final3.jpg');">
                
				<h1 style="font-size:18px; padding-left: 19px; padding-top: 40px;">Come visit us <i class="fa fa-user " style="font-size:25px"></i> <br>We are open <br><br>Mon - Fri: 8am - 6pm <br>Sat - Sun: 9am - 5pm</h1></h1>
            </div>

              <!-- Highlights -->
			<section class="wrapper">
				<div class="inner">
					<header class="special">
					</header>

					<div class="highlights">
						
        <!-- ADD to contact us page -->

						<section>
							<div class="content">
								<header>
									<a href="https://www.google.lk/maps" class="icon fa-map-marker"><span class="label">Icon</span></a>
									<p style="font-size:19px;">
										<a href="https://www.google.lk/maps" style="color: blue; text-decoration: none;">Eiffel Institute of <br>Higher Education, <br>503/8 Peradeniya Road, <br>20000 Kandy, <br>Sri Lanka. </a> 
									</p>
								</header>
								
							</div>
						</section>

						<section>
							<div class="content">
								<header>
									<a href="https://www.gmail.com" class="icon fa-envelope"><span class="label">Icon</span></a>
									<p style="font-size:19px;"><br><a href="https://www.gmail.com" style="color: blue; text-decoration: none;"> info@eiffel.institute.lk</a> 
										<br><a href="https://www.gmail.com" style="color: blue; text-decoration: none;"> janith@staff.eiffel.institute.lk</a> 
									</p>
								</header>
								
							</div>
						</section>
						
						<section>
							<div class="content">
								<header>
									<a href="https://voxinnova.com/?gclid=Cj0KCQiAwMP9BRCzARIsAPWTJ_EWpNvb1FEROIIlH_dJ9Bnhr4Z9hrXIauHFXMP6gpuD-Hok_u7lgTwaAtKqEALw_wcB" class="icon fa-phone-square"><span class="label">Icon</span></a>
									<p style="font-size:19px;"><br>
										<a href="https://voxinnova.com/?gclid=Cj0KCQiAwMP9BRCzARIsAPWTJ_EWpNvb1FEROIIlH_dJ9Bnhr4Z9hrXIauHFXMP6gpuD-Hok_u7lgTwaAtKqEALw_wcB" style="color: blue; text-decoration: none;">+94 81 222 4141 <br>+94 71 488 9393 <br>+94 81 772 8282</a> 
									</p>
								</header>
								
							</div>
						</section>
						

						<section>
							<div class="content">
								<header>
									<a href="https://web.whatsapp.com/" class="icon fa-whatsapp"><span class="label">Icon</span></a>
									<p style="font-size:19px;"><br>Buzz us up!<br>
										<a href="https://web.whatsapp.com/" style="color: blue; text-decoration: none;"> +94 71 488 9393</a> 
									</p>
								</header>
								
							</div>
						</section>

						<section>
							<div class="content">
								<header>
									<a href="https://www.facebook.com/" class="icon fa-facebook-official "><span class="label">Icon</span></a>
									<p style="font-size:19px;"><br>Like us!<br>
										<a href="https://www.facebook.com/" style="color: blue; text-decoration: none;">https://www.facebook.com/ </a> 
									</p>
								</header>
								
							</div>
						</section>

						<section>
							<div class="content">
								<header>
									<a href="https://www.youtube.com/" class="icon fa-youtube"><span class="label">Icon</span></a>
									<p style="font-size:19px;"><br>Subscribe to us!<br>
										<a href="https://www.facebook.com/" style="color: blue; text-decoration: none;">https://www.youtube.com/</a> 
									</p>
								</header>
								
							</div>
						</section>

						
				</div>
			</section>

            
            

		<!-- Footer -->
		<footer id="footer">
				<div class="inner">
					<div class="content">
						<section>
							<h3>Our Vision</h3>
							<p>Eiffel Institute of Higher Education aspires to be the leader in global education, and to be known as a progressive institution, that implements student-centered teaching and academic excellence to empower students to function as strong and versatile leaders in a multi-ethnic environment.</p>
						</section>
						<section>
							<h4>Wondering what to study???&#128580</h4>
							<ul class="alt">
								<li><a href="s1.html">BSc (Hons) Chemistry</a></li>
							<li><a href="c2.html">BSc (Hons) Computer Security</a></li>
							<li><a href="b4.html">BSc (Hons) Marketing Management</a></li>
							<li><a href="s3.html">BSc (Hons) Marine Biology</a></li>
							</ul>
						</section>
						<section>
							<h4>Let's be friends!&#128512</h4>
							<ul class="plain">
								<li><a href="https://twitter.com/"><i class="icon fa-twitter">&nbsp;</i>Twitter</a></li>
								<li><a href="https://www.facebook.com/"><i class="icon fa-facebook">&nbsp;</i>Facebook</a></li>
								<li><a href="https://www.instagram.com/?hl=en"><i class="icon fa-instagram">&nbsp;</i>Instagram</a></li>
								<li><a href="https://www.pinterest.com/"><i class="icon fa-pinterest">&nbsp;</i>Pinterest</a></li>
							</ul>
						</section>
					</div>
					<div class="copyright">
						&copy; Copyright 2020 - All Rights Reserved <br>Concept, Design & Development by SlobbySlackers
						 </a>
					</div>
				</div>
			</footer>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>