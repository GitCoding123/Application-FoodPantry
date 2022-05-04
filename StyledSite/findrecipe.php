<?php 
    session_start();

	include("connection.php");
	include("functions.php");

	$user_data = check_login($con);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>What's 4 Dinner</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,200;0,500;1,200&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="styles/style.css">
	<script type = "text/javascript" src="scripts/menu.js"></script>  <!-- Link to the JavaScript file -->
</head>
<body>
    
		<?php include 'nav.php'; ?>
		
		<div id="container">
		
        <!--Main Column-->
        <div id="main">
            <h1>Find a Recipe</h1>
            <hr>
            <div class="recipe">
                <ul>
                    <li><a href="ringredient.html">By Ingredients</a></li>
                    <li><a href="rmacros.html">By Macros</a></li>
                    <li><a href="rkeyword.html">By Keywords</a></li>
                    <!--Need logic for this, will redirect to generic recipe view and load a random recipe-->
                    <li><a href="recipe.php">Random Recipe</a> </li> 
                </ul>
            </div>
        </div>
		
		</div><!--End Container-->
        
		<?php include 'shoppinglist.php'; ?>
		
    </div>
</body>
</html>