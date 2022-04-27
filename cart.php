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

function echoCart()
{
  $items = array('CatWoman', 'Gemini', 'Harley Quinn', 'Poison Ivy');
  foreach($items as $item)
  {
    if(isset($_SESSION[$item]) && $_SESSION[$item]>0)
     {
      echo $item . ": " ;
      echo $_SESSION[$item];
      echo "<br>";
    }
  }
}

//php startup code
session_start();
validate_or_bounce();

?>
</head>
<body>
<?php readfile("lib/header.html"); ?>

<h4>The following villians will be arriving soon!</h4>
<br>
<?php echoCart() ?>
<br>
<br>
<br>
<div id=<?php require("lib/footer.php"); ?></div>
</body>
</html>

