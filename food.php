<!DOCTYPE html>
<!--	Author: Daniel Lerner
		Date:	3/1/19
		File:	food.php
		Purpose: OOP Exercise
-->

<html>
<head>
	<title>OOP Exercise</title>
	<link rel ="stylesheet" type="text/css" href="sample.css">
</head>

<body>
<h1>Food</h1>
<?php
  include ('inc-food.php');
  include('my-functions.php');
  $food1 = $_POST['food1'];
  $calories1 = $_POST['calories1'];
  $food2 = $_POST['food2'];
  $calories2 = $_POST['calories2'];
  
  $meal = new Food();
  
  $meal->setName();
  $meal->setCalories();
  
  
  $caloricIntake = $calories1 + $calories2;
  
  print("<p>Your meal of $food1 and $food2 has a caloric intake of $caloricIntake</p>");
  backToFunctions();
  ?>
  </body>
</html>
  
  