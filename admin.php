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
<center><h2>Administrators can take the following actions</h2></center>
<br>
<br>
<center><h3><a href='printusers.php'>Display or Edit Users</a></h3></center>
<br>
<br>
<center><h3><a href='printorders.php'>Display Orders</a></h3></center> 
<br>
<br>
<div  id=<?php require("lib/footer.php"); ?></div>
</body>
</html>

