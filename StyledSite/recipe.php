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
            
            <?php
                $recipe = $_GET['recipe'];
				
                $sql = "SELECT * FROM recipes WHERE recipe_ID = '$recipe';";
                $result = mysqli_query($con,$sql);

                while ($row = mysqli_fetch_assoc($result)) {
                    $id = $row['recipe_ID'];
					echo '<div class="recipeHeader">';
                    echo '<h1 class="recipeTitle">'.$row['recipe_name'].'</h1>';
                }
            ?>
            <?php
                $sql = "SELECT * FROM recipes WHERE recipe_ID = '$recipe';";
                $result = mysqli_query($con,$sql);

                while ($row = mysqli_fetch_assoc($result)) {
                    echo '<img class="midimg" src="images/'.$row['recipe_image'].'" alt="Picture of huli-Huli Chicken">';
					echo '</div>';
                }
            ?>
            <br>
            <div class="ingredients">
                <ul>    
                    <?php
                        $sql = "SELECT * FROM ingredient_list WHERE recipe = '$recipe';";
                        $result = mysqli_query($con,$sql);
						echo '<div class="recipeContent">';
						echo '<h3>Ingredients:</h3>';
                        while ($row = mysqli_fetch_assoc($result)) {
                            echo '<li>'.$row['quantity'].' '.$row['measurement'].' '.$row['ingredient'].'</li>';
                        }
						echo '</div>';
                    ?>
                </ul>
            </div>
            <div class="steps">
                <ol type="1">
                    <?php
                        $sql = "SELECT * FROM recipe_steps WHERE recipe_ID = '$recipe';";
                        $result = mysqli_query($con,$sql);
						echo '<div class="recipeContent">';
						echo '<h3>Steps:</h3>';
                        while ($row = mysqli_fetch_assoc($result)) {
                            echo '<li>'.$row['step_description'].'</li>';
                        }
						echo '</div>';
                    ?>
                </ol>
            </div>

        </div><!--end main-->
    </div><!--End Container-->
	
	<?php include 'shoppinglist.php' ?>
</body>
</html>