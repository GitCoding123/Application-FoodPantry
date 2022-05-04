<?php

$search = $_POST['search'];

$server = "localhost";
$user = "root";
$pass = "R00tPassSQL!";
$db = "food_pantry";

$conn = new mysqli($server, $user, $pass, $db);

if ($conn->connect_error){
	die("Connection failed: ". $conn->connect_error);
}

$sql = "select * from recipes where recipe_calories < '$search'";

$result = $conn->query($sql);

if ($result->num_rows > 0){
while($row = $result->fetch_assoc() ){
	echo $row["recipe_name"]."  ".$row["recipe_description"]."  ".$row["recipe_calories"]."<br>";
}
} else {
	echo "0 records";
}

$conn->close();

?>