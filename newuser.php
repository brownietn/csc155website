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
$user="mbrown287";
$conn=mysqli_connect("localhost", $user, $user, $user);

if (mysqli_connect_errno())
{
  echo "<b>Failed to connect to MySQL: " . mysqli_connect_error() . "</b>";
}

if(isset($_POST['choice']))
{
  $choice=$_POST['choice'];
  if($choice == "Create User")
  {
    $stmt = $conn->prepare("INSERT INTO users SET username=?,
                                                  password=?,
                                                  usergroup=?");
    $stmt->bind_param("sss", $username, $password, $usergroup);
    $username=$_POST['username'];
    $password=$_POST['password'];
    $usergroup=$_POST['usergroup'];
    $stmt->execute();
   }
}

?>
</head>
<body>

<form method='POST'>
<br>Username:<input type='text' name='username'>
<br>Password:<input type='password' name='password'>
<br>User Group:<input type='text' name='usergroup'>
<br><input type='submit' name='choice' value='Create User'>
</form>


</body>
</html>

