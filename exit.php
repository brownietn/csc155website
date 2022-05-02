<!-- I honor Parkland's core values by affirming that I have
followed all academic integrity guidelines for this work.
Mary Brown
CSC155 201h sp -->

<html>
<head>
<title>Mary's Quest for World Domination</title>
<?php

// php library loading first
require("lib/phpfunctions.php");

// local php functions go here 

// local php startup code goes here 
session_start();
validate_or_bounce();

session_destroy(); /// remove ALL session information
header("refresh: 5; url=login.php");

?>
</head>
<body>


<h2>Good bye, redirecting in 5 seconds.</h2>


</body>
</html>
