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

$ITEM = 'Harley Quinn';

if (! isset($_SESSION[$ITEM]))
{
  $_SESSION[$ITEM]=0;
}

if (isset($_POST['choice']))
{
  $choice = $_POST['choice'];
  if ($choice == 'Add 1')
  {
    $_SESSION[$ITEM] +=1;
  }
  else if ($choice == 'Add 5')
  {
    $_SESSION[$ITEM] +=5;
  }
  else if ($choice == 'Remove All')
  {
    $_SESSION[$ITEM] = 0;
  }
}


?>
</head>
<body>
<?php readfile("lib/header.html"); ?>

<br>
<br>
<img src='images/harley.jpg'>
<br>
<h2>Skills and Abilities</h2>
<h3>Trained psychiatrist; Expert gymnast; Enhanced strength, durability, 
stamina, reflexes, and agility; Immunity to various toxins</h3>
<br>
<h2>Tools and Weapons</h2>
<h3>Uses weaponized props</h3>
<br>
<br>
<h4>Place your order><br></h4>
<?php echo $_SESSION[$ITEM] . ": $ITEM<br>";?>

<form method='POST'>
<input type='submit' name='choice' value='Add 1'>
<input type='submit' name='choice' value='Add 5'>
<input type='submit' name='choice' value='Remove All'>
</form>
<br>
<br>
<br>
<br>
<br>
<br>

<div id=<?php require("lib/footer.php"); ?></div>
</body>
</html>

