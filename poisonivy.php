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
<img src='images/poison.jpg'>
<br>
<h2>Skills and Abilities</h2>
<h3>Genius intellect; Brilliant botanist and toxicologist; Chlorokinesis; 
Seducation; Toxikinesis; Toxic immunity; Semi-mystical connection 
to the Green; Toxic touch; Hand-to-hand combat skills; Pheromone control; 
Regeneration</h3>
<br>
<h2>Tools and Weapons</h2>
<h3>No specific weapons</h3>


<div id=<?php require("lib/footer.php"); ?></div>
</body>
</html>

