<!-- I honor Parkland's core values by affirming that I have
followed all academic integrity guidelines for this work.
Mary Brown
CSC155 201h sp -->

<html>
<head>
<title>Mary's Quest for World Domination</title>
<?php
//php libarary with functions
require("lib/phpfunctions.php");

//php startup code
session_start();
validate_or_bounce();

?>
</head>
<body>
<?php readfile("lib/header.html"); ?>
<br>
<br>
<img src='images/catwoman.png'>
<br>
<h2>Skills and Abilities</h2>
<h3>Skilled Martial Artist, Acrobat Level Agility, Whip Mastery, 
Master Thief</h3>
<br>
<h2>Tools and Weapons</h2>
<h3>Whip, Clawed Gloves</h3>
<div id=<?php require("lib/footer.php"); ?></div>
</body>
</html>

