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

function addOrders()
{
  $user="mbrown287";
  $conn=mysqli_connect("localhost",$user,$user,$user);
  
  if (mysqli_connect_errno())
  {
    echo "<b>Failed to connect to MySQL: " . mysqli_connect_error() . "</b>";
  }

  if (isset($_POST['choice']))
  {
    $choice = $_POST['choice'];
    if($choice == "Place Order")
    {
      $items = array('Catwoman', 'Gemini', 'Harley Quinn', 'Poison Ivy');
      foreach($items as $item)
      {
        if(isset($_SESSION[$item]) && $_SESSION[$item]>0)
        {
          $stmt = $conn->prepare("INSERT INTO orders SET username=?,
                                                         catwoman=?,
                                                         gemini=?,
                                                         harleyquinn=?,
                                                         poisonivy=?");
          $stmt->bind_param("siiii", $username, $catwoman, $gemini, 
                            $harleyquinn, $poisonivy);
          $username=$_POST['username155'];
          $catwoman=$_POST['Catwoman'];
          $gemini=$_POST['Gemini'];
          $harleyquinn=$_POST['Harley Quinn'];
          $poisonivy=$_POST['Poison Ivy'];

          $stmt->execute();
        }
      }             
    }
  }
}

//php startup code
session_start();
validate_or_bounce();

?>
</head>
<body>
<?php readfile("lib/adminheader.html"); ?>

<h4>The following villians will be arriving soon when you place your order!</h4>
<br>
<?php echoCart() ?>
<br>
<br>

<form method='POST'>
<input type='submit' name='choice' value='Place Order'> 
</form>

<br>
<br>
<br>

<div id=<?php require("lib/footer.php"); ?></div>
</body>
</html>


