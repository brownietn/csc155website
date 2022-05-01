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
<?php readfile("lib/adminheader.html"); ?>
<br><br>

content goes here


<div id=<?php require("lib/footer.php"); ?></div>
</body>
</html>

