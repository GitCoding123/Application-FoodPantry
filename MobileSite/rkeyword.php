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
            <h1>Find Recipe: <span>By Keyword</span></h1>
			<hr>
			<br>
			
			<form method="POST">
				<input type="search" name="search" value="" placeholder="Huli Huli Chicken">
				<input type="submit" name="submit" value="Search">
			</form>
			
			<?php 
				if (isset($_POST['submit'])) {
					//print_r($_POST);
					$search = $_POST['search'];
				
					$sql = "SELECT * FROM recipes WHERE recipe_name like '%$search%';";
					$result = mysqli_query($con, $sql);
					
					while ($row = mysqli_fetch_assoc($result)) {
						$id = $row['recipe_ID'];
						echo '<a href="recipe.php?recipe=' . $id . '" onclick="setSession()">';
						echo '<div class="search">';
						echo '<h2>'.$row['recipe_name'].'</h2>';
						echo '<p>'.$row['recipe_description'].'</p>';
						echo '</div>';
						echo '</a>';
					}
				}
				
			?>
			
        </div>
        
    </div><!--End Container-->
	
	<?php include 'shoppinglist.php'; ?>
	
</body>
</html>