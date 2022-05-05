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
	<script type = "text/javascript" src="scripts/menu.js"></script> 
</head>
<body>

	<?php include 'nav.php'; ?>

    <div id="container">

        <!--Main Column-->
        <div id="main">
            <h1>My Pantry</h1>
            <hr>
            <div class="pantry">
			
				<select>
					<option>
				</select>
                <ul>
                    <li>AP Flour</li>
                    <li>Seasoned Salt</li>
                    <li>Sugar</li>
                    <li>Eggs</li>
                    <li>Milk</li>
                    <li>Brown Sugar</li>
                    <li>Soy Sauce</li>
                </ul>
                <br>
                <div class="isearch">
                    <!--create search action, preferably live search-->
                    Add: <input type="text" placeholder="Add Ingredient" name="isearch" id="isearch">
                </div>
            </div>
        </div>
    </div><!--end container-->
	
	<?php include 'shoppinglist.php'; ?>
	
</body>
</html>