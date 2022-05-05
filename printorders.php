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

function shippedButton($id)
{
  echo "<form method='POST' onsubmit='return confirm(\"Shipped: $id ?\")' > ";
  echo "<input type='hidden' name='id' value='" . $id . "'>";
  echo "<input type='submit' name='choice' value='Shipped'>";
  echo "</form>";
}

function notShipped($id)
{
  echo "<form method='POST'>";
  echo "<input type='hidden' name='id' value=' " . $id . " '>";
  echo "<input type='submit' name='choice' value='Not Shipped'>";
  echo "</form>";
}

function echoOrders($conn)
{
  $sql = "SELECT * FROM orders;";
  $result = $conn->query($sql);

  if($result->num_rows > 0)
  {
    echo "<table border='1'>";
    
    echo "\n<tr>";
      echo "<th>" ."id" . "</th>";
      echo "<th>" ."shipped" . "</th>";
      echo "<th>" . "username" . "</th>";
      echo "<th>" . "catwoman" . "</th>";
      echo "<th>" . "gemini" . "</th>";
      echo "<th>" . "harleyquinn" . "</th>";
      echo "<th>" . "poisonivy" . "</th>";
    echo "<?tr>";
   
    while($row = $result->fetch_assoc())
    {
      echo "\n<tr>";
        echo "\n\t<td>" . htmlspecialchars($row["id"]) . "</td>";
        echo "\n\t<td>" . htmlspecialchars($row["shipped"]) . "</td>";
        echo "\n\t<td>" . htmlspecialchars($row["username"]) . "</td>";
        echo "\n\t<td>" . htmlspecialchars($row["catwoman"]) . "</td>";
        echo "\n\t<td>" . htmlspecialchars($row["gemini"]) . "</td>";
        echo "\n\t<td>" . htmlspecialchars($row["harleyquinn"]) . "</td>";
        echo "\n\t<td>" . htmlspecialchars($row["poisonivy"]) . "</td>";
      echo "\n\t<td valign='center'>";
      shippedButton($row["id"]);
      notShippedButton($row["id"]);      
      echo "</td>";
      echo "\n</tr>";
      } 
    echo "<table>";
    }
    else
    {
      echo "0 results";
    }
}

$user = "mbrown287";
$conn = mysqli_connect("localhost", $user, $user, $user);

if(isset($_POST['choice']))
{
  $choice = $_POST['choice'];
  if($choice == "Shipped")
  {
    $sql = "UPDATE orders SET deleted_at=NOW() WHERE id=?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $id);
    $id=$_POST['id'];
    $stmt->execute();
  }

  else if($choice == "Not Shipped")
  {
    $sql = "UPDATE orders SET deleted_at=NULL WHERE id=?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $id);
    $id=$_POST['id'];
    $stmt->execute();
  }
}

?>
</head>
<body>

<?php readfile("lib/adminheader.html"); ?>
<br>
<br>

<?php echoOrders($conn);?>

<br>
<br>
<br>
<br>
<br>
<br>
<?php require("lib/footer.php"); ?>
</body>
</html>

