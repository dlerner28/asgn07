<!DOCTYPE html>
<!--	Author: Daniel Lerner
		Date:	3/1/19
		File:	game-character.php
		Purpose: OOP Exercise
-->

<html>
<head>
	<title>OOP Exercise</title>
	<link rel ="stylesheet" type="text/css" href="sample.css">
</head>

<body>
<h1>GameCharacter</h1>
<?php
  
  include ('inc-game-character-object.php');
  include('my-functions.php');
  
  $name1 = $_POST['name1'];
  $score1 = $_POST['score1'];
  $name2 = $_POST['name2'];
  $score2 = $_POST['score2'];
  
  $character1 = new GameCharacter();
  
  $character2 = new GameCharacter();
  
  $character1->setPlayerName();
  $character1->setScore();
  
  $character2->setPlayerName();
  $character2->setScore();
  
  print("<p>$name1 has a score of $score1 and $name2 has a score of $score2.");
  
  if($score1>$score2)
    print("<p>$name1 is a better character than $name2!");
  else if($score2>$score1)
    print("<p>$name2 is a better character than $name1!");
  backToFunctions();
  
  ?>
</body>
</html>
  
  