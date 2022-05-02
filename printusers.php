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

function editButton($id)
{
  echo "<form action='updateuser.php' method='POST'>";
  echo "<input type='hidden' name='id' value='" . $id . "'>";
  echo "<input type='submit' name='choice' value='Edit'>";
  echo "</form>";
}

function deleteButton($id)
{
  echo "<form method='POST' onsubmit='return confirm(\"Delete record number:
        $id ?\")'>";
  echo "input type='hidden' name='id' value='" . $id . "'>";
  echo "input type='submit' name='choice' value='Delete'>";
  echo "</form>";
}

function undeleteButton($id)
{
  echo "<form method='POST'>";
  echo "<input type='hidden' name='id' value='" . $id . "'>";
  echo "<input type='submit' name='choice' value='Undelete'>";
  echo "</form>";
}

function echoUsers($conn)
{
  $sql = "SELECT * FROM users;";
  $result = $conn->query($sql);

  if($result->num_rows > 0)
  {
    echo "<table border='1'>";
    
    echo "\n<tr>";
      echo "<th>" ."id" . "</th>";
      echo "<th>" ."deleted?" . "</th>";
    echo "<th>" . "username" . "/";
    echo "" . "email" . "</th>";
    echo "<?tr>";
   
    while($row = $result->fetch_assoc())
    {
      echo "\n<tr>";
        echo "\n\t<td>" . htmlspecialchars($row["id"]) . "</td>";
        echo "\n\t<td>" . htmlspecialchars($row["deleted_at"]) . "</td>";
      echo "\n\t<td>" . htmlspecialchars($row["username"]) . "<br>";
      echo "" . htmlspecialchars($row["email"}) . "</td>";

        echo "\n\t<td valign='center'>";
      editButton($row["id"]);
      deleteButton($row["id]);
      undeleteButton($row["id"]);
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
  if($choice == "Delete")
  {
    $sql = "UPDATE users SET deleted_at=NOW() WHERE id=?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $id);
    $id=$_POST['id'];
    $stmt->execute();
  }

  else if($choice == "Undelete")
  {
    $sql = "UPDATE users SET deleted_at=NULL WHERE id=?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $id);
    $id=$_POST['id];
    $stmt->execute();
  }
}

?>
</head>
<body>
<?php readfile("lib/header.html"); ?>

<?php echoUsers($conn);?>

<?php require("lib/footer.php"); ?>
</body>
</html>

