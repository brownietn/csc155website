<!-- I honor Parkland's core values by affirming that I have
followed all academic integrity guidelines for this work.
Mary Brown
CSC155 201h sp -->

<html>
<head>
<title>Mary's Quest for World Domination</title>
<?php
//php library with functions
require("lib/phpfunctions.php");

//php startup code
session_start();
validate_or_bounce();

?>
</head>
<body>
<?php readfile("lib/header.html"); ?>
<br><br>

<center><h3>Everything feel like it's out of your control?</h3></center>
<br>
<center><h3>Is it a bit to peoplely out there?</h3></center>
<br>
<center><h3>You've come to the right place!</h3></center>
<br>
<center><h3>Check out our options for assistance in dominating your 
world!</h3></center> 
<br>
<br>
<div  id=<?php require("lib/footer.php"); ?></div>
</body>
</html>


