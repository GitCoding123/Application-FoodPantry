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
			<div class="recipeHeader">
				<h1 class="recipeTitle">Featured Recipe: Pork Chops with Mushroom Sauce</h1>
				<img src="images/chopsmushsauce.png" alt="pork chops with mushroom sauce" class="midimg">
			</div>
			<div class="recipeContent">
            <p>Deliciously easy pork chops with creamy garlic herb mushroom sauce is a super easy dinner recipe! Perfect for any night of the week.</p>
			<ul class="ingredients">
				<li>4 pork chops</li>
				<li>1 tsp. Seasoning salt</li>
				<li>1/3 tsp. cracked black pepper</li>
				<li>2 tbsp. olive oil</li>
				<li>2 tbsp. unsalted butter</li>
				<li>1 c. sliced brown mushrooms</li>
				<li>2 tbsp. fresh chopped parsley</li>
				<li>1 tbsp. fresh chopped thyme</li>
				<li>4 cloves garlic crushed</li>
				<li>3/4 c. heavy cream</li>
			</ul>
			</div>
			<div class="recipeHeader">
				<h1 class="recipeTitle">Last Week's Recipe: Huli-Huli Chicken</h1>
				<img src="images/huliweb.png" alt="huli-huli chicken" class="midimg">
			</div>
			<div class="recipeContent">
            <p>Fun fact! Huli-Huli comes from the Hawaiian word for "turn" and the name of the recipe refers to how the chicken was flipped multiple times during grilling.</p>
			<ul>
				<li>3 lb. bone-in skin-on chicken thighs</li>
				<li>Kosher salt</li>
				<li>Freshly ground black pepper</li>
				<li>1 c. pineapple juice</li>
				<li>1/4 c. low-sodium soy sauce</li>
				<li>1/4 c. packed brown sugar</li>
				<li>1/4 c. ketchup</li>
				<li>1/4 c. low-sodium chicken broth</li>
				<li>1 tbsp. Sriracha</li>
				<li>3 cloves garlic, minced</li>
				<li>2 tsp. freshly grated ginger</li>
				<li>1 pineapple, cut into wedges</li>
				<li>2 green onions, thinly sliced</li>
			</ul>
			</div>
        </div>
		
        
    </div> <!--End container-->
	
	<?php include 'shoppinglist.php'; ?>
    
</body>
</html>