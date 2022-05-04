<?php 
    session_start();

	include("connection.php");
	include("functions.php");

	$user_data = check_login($con);
?>
<!--This is the generic recipe page where all recipes will be loaded-->
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

	<?php include 'nav.php' ?>
	
    <div id="container">
        
        <!--Main Column-->
        <div id="main">
			
			<div class="recipeHeader">
            <!--need logic to load name with recipe-->
            <h1 class="recipeTitle" >Recipe: Huli-Huli Chicken</h1>
            <img src="images/hulihulichicken.png" alt="Picture of huli-Huli Chicken" class="midimg">
			</div>
			
            <!--need logic to load ingredients, concat quantity and ingredient-->
            <div class="ingredients">
                <h3>Ingredients:</h3>
                <ul>
                    <li>3 lb. bone-in skin-on chicken thighs (about 6 thighs)</li>
                    <li>Kosher salt</li>
                    <li>Freshly ground black pepper</li>
                    <li>1 c. pineapple juice</li>
                    <li>1/4 c. low-sodium soy sauce </li>
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
            <!--need logic to load steps-->
            <div class="steps">
                <h3>Steps:</h3>
                <ol type="1">
                    <li>Season chicken all over with salt and pepper and place in a large bowl. In a medium bowl, whisk to combine pineapple juice, soy sauce, brown sugar, ketchup, chicken broth, Sriracha, garlic, and ginger.</li>
                    <li>Pour marinade over chicken and cover with plastic wrap. Marinate in the refrigerator for at least 1 hour, or up to 6 hours.</li>
                    <li>Heat grill or grill pan over medium heat. Add pineapple and cook, turning occasionally, until charred on all sides, 10 to 15 minutes.</li>
                    <li>Meanwhile, remove chicken from marinade, then bring marinade to a boil in a medium sauce pan over high heat. Boil until it is the consistency of a thin barbecue sauce, about 9 minutes.</li>
                    <li>When pineapple is done cooking, remove from grill and add chicken thighs, skin side down. Cook, turning occasionally and basting with sauce, until skin is crisp and chicken is cooked through, about 20 minutes in total.</li>
                    <li>Serve pineapple and grilled chicken together, garnished with green onions.</li>
                </ol>
            </div>
        </div>
        
		<?php include 'shoppinglist.php' ?>
		
    </div><!--End Container-->
</body>
</html>