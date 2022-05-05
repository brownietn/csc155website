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

$user="mbrown287";
$conn=mysqli_connect("localhost", $user, $user, $user);

if (mysqli_connect_errno())
{
  echo "<b>Failed to connect to MySQL: " . mysqli_connect_error() . "</b>";
}

if(isset($_POST['choice']))
{
  $choice=$_POST['choice'];
  if($choice == "Place Order")
  {
    $stmt = $conn->prepare("INSERT INTO orders SET username=?,
                                                   catwoman=?,
                                                   gemini=?,
                                                 harleyquinn=?
                                                 poisonivy=?
                                                 ");
      $stmt->bind_param("siiii", $username, $catwoman, $gemini, $harleyquinn,
                         $poisonivy);
      $username=$_POST['username155'];
      $catwoman=$_POST['$item'];
      $gemini=$_POST['$item'];
      $harleyquinn=$_POST['$item'];
      $poisonivy=$_POST['$item'];

      $stmt->execute();
    }
    header("Location: welcome.php");
  }
}

?>
</head>


