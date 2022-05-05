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


function readButton($id)
{
  echo "<form method='POST' onsubmit='return confirm(\" Mark as read: 
  $id ?\")' > ";
  echo "<input type='hidden' name='id' value='" . $id . "'>";
  echo "<input type='submit' name='choice' value='Read'>";
  echo "</form>";
}

function unreadButton($id)
{
  echo "<form method='POST'>";
  echo "<input type='hidden' name='id' value=' " . $id . " '>";
  echo "<input type='submit' name='choice' value='Not Read'>";
  echo "</form>";
}

function echoMessages($conn)
{
  $sql = "SELECT * FROM messages;";
  $result = $conn->query($sql);

  if($result->num_rows > 0)
  {
    echo "<table border='1'>";
    
    echo "\n<tr>";
      echo "<th>" ."id" . "</th>";
      echo "<th>" ."read_at" . "</th>";
      echo "<th>" . "username" . "</th>";
      echo "<th>" . "message" . "</th>";
    echo "</tr>";
   
    while($row = $result->fetch_assoc())
    {
      echo "\n<tr>";
        echo "\n\t<td>" . htmlspecialchars($row["id"]) . "</td>";
        echo "\n\t<td>" . htmlspecialchars($row["read_at"]) . "</td>";
        echo "\n\t<td>" . htmlspecialchars($row["username"]) . "</td>";
        echo "\n\t<td>" . htmlspecialchars($row["message"]) . "</td>";
      echo "\n\t<td valign='center'>";
      readButton($row["id"]);
      unreadButton($row["id"]);      
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
  if($choice == "Read")
  {
    $sql = "UPDATE messages SET read_at=NOW() WHERE id=?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $id);
    $id=$_POST['id'];
    $stmt->execute();
  }

  else if($choice == "Not Read")
  {
    $sql = "UPDATE messages SET read_at=NULL WHERE id=?";
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

<?php echoMessages($conn);?>

<br>
<br>
<br>
<br>
<br>
<br>
<?php require("lib/footer.php"); ?>
</body>
</html>

