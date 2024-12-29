<?php

$servername = "localhost";
$username = "root";
$password = "123456";
$dbname = "cookingjouranl";

// Create connection
$conn = new mysqli($servername, 
	$username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
	die("Connection failed: "
		. $conn->connect_error);
}

$sqlquery = "INSERT INTO recipe VALUES 
	('recipetitle', 'Description', 'Contents','Images'
,'Ingredients','Steps','Servings','PreparationTime','CookTime','ReadyIn','RecipeType'
,'Cuisine','Skill Level')";
if ($conn->query($sql) === TRUE) {
	echo "record inserted successfully";
} else {
	echo "Error: " . $sql . "<br>" . $conn->error;
}
