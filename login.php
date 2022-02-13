<?php
$message="";
if(count($_POST)>0) {
	$conn = mysqli_connect("localhost","id15299360_eihe","XhHQ>=?9-/|>u=uf","id15299360_eihekandy");
	$result = mysqli_query($conn,"SELECT * FROM login WHERE username='" . $_POST["userName"] . "' and password = '". $_POST["password"]."'");
	$count  = mysqli_num_rows($result);
	if($count==0) {
		echo '<script>alert("Wrong Usarname or Password")</script>';
	} 
	else 
	{
		session_start();
		$_SESSION["loggedin"] = true;
		header("Location: dashboard.php");
	}
}
?>
<!DOCTYPE HTML>
<html lang="en">
	<head>
		<title>Log In</title>
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
	
	#contact input[type="text"], #contact input[type="email"], #contact input[type="tel"], #contact input[type="url"], 
	#contact textarea, #contact button[type="submit"] { font:400 12px/16px "Open Sans", Helvetica, Arial, sans-serif; }
	
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
	
	#contact input[type="text"], #contact input[type="email"], #contact input[type="tel"], #contact input[type="url"], 
	#contact textarea {
		width:100%;
		border:1px solid #CCC;
		background:#FFF;
		margin:0 0 5px;
		padding:10px;
	}
	
	#contact input[type="text"]:hover, #contact input[type="email"]:hover, #contact input[type="tel"]:hover, 
	#contact input[type="url"]:hover, #contact textarea:hover {
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
	    
            <div id="heading" style="position:relative; top:-50px; background-image: url('images/final1.jpg');">
				<h1 style="font-size:29px;"> Eiffel &nbsp;Institute &nbsp;of &nbsp;Higher <br>Education <i class="fa fa-graduation-cap" 
                style="font-size:36px"></i></h1> 
            </div>

            <div class="container">  
                <form id="contact" name="frmUser" action="" method="post" style="font-family: 'Comic Sans MS', cursive, sans-serif;">
                    <div class="message"><?php if($message!="") { echo $message; } ?></div>
                  <center><p style="color: red; font-size: 25px;">Admin Login <i class="fa fa-user" style="font-size:36px"></i></p></center>
                  <fieldset>
                    <input style="font-size: 20px; font-family:'Comic Sans MS', cursive, sans-serif"; name="userName" 
                    placeholder="Username" type="text" tabindex="1" required autofocus>
                  </fieldset>
                  <fieldset>
                    <input style="background-color: white; font-size: 20px; font-family:'Comic Sans MS', cursive, sans-serif""; name="password" 
                    placeholder="Password" type="password" tabindex="2" required>
                  </fieldset>
                  
            
                  <fieldset>
                    <button style="background-color:red ; font-size: 20px; font-family:'Comic Sans MS', cursive, sans-serif"; name="submit" 
                    type="submit" id="contact-submit" data-submit="...Sending"><span style="color:white">Click Me!</span></button>
                  </fieldset>
                </form>
            </div>

	</body>
</html>


