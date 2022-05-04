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

			//read from database
			$query = "select * from user where user_name = '$user_name' limit 1";
			$result = mysqli_query($con, $query);

			if($result)
			{
				if($result && mysqli_num_rows($result) > 0)
				{

					$user_data = mysqli_fetch_assoc($result);
					
					if($user_data['password'] === $password)
					{

						$_SESSION['user_id'] = $user_data['user_id'];
						header("Location: index.php");
						die;
					}
				}
			}
			
			echo "wrong username or password!";
		}else
		{
			echo "wrong username or password!";
		}
	}

?>


<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
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
	.cancelbtn, .Login {
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
	@media screen and (max-width: 300px) {
  	.cancelbtn, .signupbtn {
    width: 75%;
  	}
	}

	</style>

	<form method="post" style="border:1px solid #ccc">
  		<div class="container">
    		<h1>Log In</h1>
    		<p>Please enter your account info account.</p>
    		<hr>

    		<label for="email"><b>Email</b></label>
    		<input type="text" placeholder="Enter Email" name="user_name" required>

    		<label for="psw"><b>Password</b></label>
    		<input type="password" placeholder="Enter Password" name="password" required>

			<p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>

    		<div class="clearfix">
      			<button type="button" class="cancelbtn">Cancel</button>
      			<button type="submit" class="Login">Log in</button>
    		</div>
  		</div>
	</form>
</body>
</html>
