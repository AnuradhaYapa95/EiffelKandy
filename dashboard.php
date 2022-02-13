<?php
session_start();
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>
<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

</head>
    <body>
    <div id="messages">
    <br><center><button style="background-color:red ; font-size: 22px; font-weight: normal; width:300px; height:49px; position:relative; top:-20px;" id="logout" onclick="document.location='logout.php'"><span style="color:white">Click to Logout</span></button></center><br><br>
    <div>
        <table class="table" width="100%" cellspacing="0" class="table table-bordered">
            <thead class="hnf">
                <tr>
                    <th class="b2" style="color:red; font-size:24px; text-align:center">ID</th>
                    <th class="b2" style="color:red; font-size:24px; text-align:center">Name</th>
                    <th class="b2" style="color:red; font-size:24px; text-align:center">Email</th>
                    <th class="b2" style="color:red; font-size:24px; text-align:center">Mobile</th>
                    <th class="b2" style="color:red; font-size:24px; text-align:center">Message</th>
                    <th class="b2" style="color:red; font-size:24px; ">Status</th>
                </tr>
            </thead>
                <?php
                $servername = "localhost";
                $username = "id15299360_eihe";
                $password = "XhHQ>=?9-/|>u=uf";
                $dbname = "id15299360_eihekandy";
                // Create connection
                $conn = new mysqli($servername, $username, $password, $dbname);
                $sql = 'SELECT * from contactus ORDER BY id;';
                if (mysqli_query($conn, $sql)) {
                echo "";
                } else {
                echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                }
                $count=1;
                $result = mysqli_query($conn, $sql);
                if (mysqli_num_rows($result) > 0) {
                // output data of each row
                while($row = mysqli_fetch_assoc($result)) { ?>
            <tbody>
                <tr>
                    <th class="b1">
                        <?php echo '<span style="font-size:20px;">'. $row['id']; ?>
                    </th>
                    <td class="b1">
                        <?php echo '<span style="font-size:17px;">'.$row['name']; ?>
                    </td>
                    <td class="b1">
                        <?php echo '<span style="font-size:17px;">'.$row['email']; ?>
                    </td>
                    <td class="b1">
                        <?php echo '<span style="font-size:17px;">'.$row['mobile']; ?>
                    </td>
                    <td style="text-align: left;"  class="b1">
                        <?php echo '<span style="font-size:17px;">'.$row['msg']; ?>
                    </td>
                    <td class="b1">
                        <?php echo '<span style="font-size:17px;">'.$row['status']; ?>
                    </td>
                </tr>
            </tbody>
            <?php
            $count++;
            }
            } else {
            echo '0 results';
            }
            ?>
        </table>
    </div>
</div>
<br><br>
          <center>
            <form action="delete.php" method="post" name="delete">
                
                <span style="font-size: 22px; ">Enter Message ID </span><input style="font-size:22px; width:70pt;" type="number" name="delete_id" required>
                &nbsp;<button style="background-color:red; font-weight: normal; font-size:22px; width:250px;" type="submit"><span style="color:white">Delete Record</span></button>
            </form>
           
            <form action="update.php" method="post" name="update">
                 <span style="font-size: 22px; ">Enter Message ID </span>
                <input style="font-size:22px; width:70pt;" type="number" name="delete_id" required> 
                 &nbsp;<button style="background-color:red; font-weight: normal; font-size:22px; width:250px;" type="submit"><span style="color:white">Update Status</span></button> 
                
            </form></center>

            <br><br><br><br>
    </body>
</html>


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
	    

            <div id="heading" style="background-image: url('images/final1.jpg');">
				<h1 style="font-size:23px; padding-left: 1180px; padding-top: 330px;">EIHE<i class="fa fa-graduation-cap" style="font-size:36px"></i></h1>
			</div>

            <div class="container">  
               
            </div>

	</body>
</html>

