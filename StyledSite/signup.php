<?php 
session_start();

	include("connection.php");
	include("functions.php");


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$user_name = $_POST['user_name'];
		$password = $_POST['password'];

		if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
		{

			//save to database
			$user_id = random_num(20);
			$query = "insert into user (user_id,user_name,password) values ('$user_id','$user_name','$password')";

			mysqli_query($con, $query);

			header("Location: login.php");
			die;
		}else
		{
			echo "Please enter some valid information!";
		}
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Signup</title>
</head>
<body>

	<style type="text/css">
	
	* {box-sizing: border-box}

	/* Full-width input fields */
  	input[type=text], input[type=password] {
 	width: 100%;
  	padding: 15px;
  	margin: 5px 0 22px 0;
  	display: inline-block;
  	border: none;
  	background: #f1f1f1;
	}

	input[type=text]:focus, input[type=password]:focus {
  	background-color: #ddd;
  	outline: none;
	}

	hr {
  	border: 1px solid #f1f1f1;
  	margin-bottom: 25px;
	}

	/* Set a style for all buttons */
	button {
  	background-color: #04AA6D;
  	color: white;
  	padding: 14px 20px;
  	margin: 8px 0;
  	border: none;
  	cursor: pointer;
  	width: 100%;
  	opacity: 0.9;
	}

	button:hover {
  		opacity:1;
	}

	/* Extra styles for the cancel button */
	.cancelbtn {
  		padding: 14px 20px;
  		background-color: #f44336;
	}

	/* Float cancel and signup buttons and add an equal width */
	.cancelbtn, .signupbtn {
  	float: left;
  	width: 50%;
	}

	/* Add padding to container elements */
	.container {
  	padding: 24px;
	}

	/* Clear floats */
	.clearfix::after {
  	content: "";
  	clear: both;
  	display: table;
	}

	/* Change styles for cancel button and signup button on extra small screens */
	@media screen and (max-width: 600px) {
  	.cancelbtn, .signupbtn {
    width: 75%;
  	}
	}

	</style>

	<form method="post" style="border:1px solid #ccc">
  		<div class="container">
    		<h1>Sign Up</h1>
    		<p>Please fill in this form to create an account.</p>
    		<hr>

    		<label for="email"><b>Email</b></label>
    		<input type="text" placeholder="Enter Email" name="user_name" required>

    		<label for="psw"><b>Password</b></label>
    		<input type="password" placeholder="Enter Password" name="password" required>

    		<p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>

    		<div class="clearfix">
      			<button type="button" class="cancelbtn">Cancel</button>
      			<button type="submit" class="signupbtn">Sign Up</button>
    		</div>
  		</div>
	</form>
</body>
</html>