<!-- I honor Parkland's core values by affirming that I have
followed all academic integrity guidelines for this work.
Mary Brown
CSC155 201h sp -->

<html>
<head>
<title>Mary's CSC155 Class Page</title>
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

This page is for item4.

<?php require("lib/footer.php"); ?>
</body>
</html>

