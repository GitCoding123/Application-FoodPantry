<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "food_pantry";

if(!$con = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname)){
    die("Failed to connect!");
}