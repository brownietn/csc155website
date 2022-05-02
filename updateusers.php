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

function getUserById($conn, $id
{
  $sql = "SELECT * FROM users WHERE id=?";
  $stmt = $conn->prepare($sql);
  $stmt->bind_param("i", $id);
  $stmt->execute();
  $result = $stmt->get_result();
  
  $row = $result->fetch_assoc();
  return $row;
}

$user = "mbrown287"
$conn = mysqli_connect("localhost", $user, $user, $user);

if(mysqli_connect_errno())
{
  echo "<b>Failed to connect to MySQL: " . mysqli_connect_error() . "</b>";
}

$row = getUserById($conn, $_POST['id']);

if(isset($_POST['choice']))
{
  $choice = $_POST['choice'];
  if ($choice == "Save")
  {
    $sql = "UPDATE users SET username=?, email=?, usergroup=? WHERE id=?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sssi", $username, $email, $usergroup, $id);

    $username=$_POST['username155'];
    $usergroup=$_POST['usergroup'];
    $email=$_POST['email155'];
    $id=$_POST['id'];

    $stmt->execute();
    header("Location: printusers.php");
  }  

  else if($choice == "Cancel")
  {
    header("Location: printusers.php");
  }

  else if($choice == "Reset")
  {
    //purposely left blank
  }
}

?>
</head>
<body>
<?php readfile("lib/header.html"); ?>

<form method='POST'>
<br>Record Number: <?php echo htmlspecialchars($_POST['id']);?>
<br><input type='hidden' name='id' value='<?php echo $_POST["id"];?>'>
<br>Username:
<input type='text' name='username155' value='<?php echo $row["username"];?>'>
<br>Email:<input type='text' name='email155' value='<?php echo 
$row["email"];?>'>
<br>Usergroup:
<input type='text' name='usergroup' value='<?php echo $row["usergroup"];?>'>
<br>
<input type='submit' name='choice' value='Save'>
<input type='submit' name='choice' value='Reset'>
<input type='submit' name='choice' value='Cancel'>
</form>
<br>
<br>
<br>

<?php require("lib/footer.php"); ?>
</body>
</html>

