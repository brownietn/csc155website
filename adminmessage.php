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

$user = "mbrown287";
$conn = mysqli_connect("localhost",$user,$user,$user);

if(mysqli_connect_errno())
{
  echo "<b>Failed to connect to MySQL: " . mysqli_connect_error() . "</b>";
}

if(isset($_POST['choice']))
{
  $choice = $_POST['choice'];
  if($choice == "Send Message")
  {
    $stmt = $conn->prepare("INSERT INTO messages SET username=?,
                                                    message=?");
    $stmt->bind_param("ss", $username, $message);
    $username=$_SESSION['username'];
    $message=$_POST['message'];
    $stmt->execute();
  }
}
 
?>
</head>
<body>
<?php readfile("lib/adminheader.html"); ?>
<br><br>

<center><h3>Send a message to the website owner</h3></center>
<br>
<br>
<form method='POST'>
<center><textarea rows="30" cols="150" name="message" value="message">
</textarea></center>
<br>
<br><center><input type='submit' name='choice' value='Send Message'></center>
</form>
<br>
<br>
<br>
<br>
<div  id=<?php require("lib/footer.php"); ?></div>
</body>
</html>

