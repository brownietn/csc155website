<!-- I honor Parkland's core values by affirming that I have 
followed all academic integrity guidelines for this work.
Mary Brown
CSC155 201h sp -->

<html>
<head>
<title>Mary's CSC155 Class Website</title>
<?php
// php library with php functions
require("lib/phpfunctions.php");

//connect to the $_SESSION
session_start();


$user = "mbrown287";
$conn = mysqli_connect("localhost", $user, $user, $user);

$message="";
$username=getPost('username');
$password=getPost('password');
$usergroup=getPost('usergroup');

if (mysqli_connect_errno())
{
  echo "<b>Failed to connect to MySQL: " . mysqli_connect_error() . "</b>";
}

if (isset($_POST['choice']))
{
  $choice = $_POST['choice'];
  if ($_POST['choice'] == 'Login')
  {
    if (validate_login($username, $password))
    {
      $_SESSION['username'] = $username;
      header('Location: welcome.php');
    }
    $message = "Invalid username or password!";
    }
  if ($_POST['choice'] == 'New User')
  {
     header('Location: newuser.php'); 
  }
}
?>
</head>
<body>

<form method='POST'>
<table style="border: 3px black; border-radius: 10px; 
background-color: #4AA516; padding: 5px; margin-left: auto; 
margin-right: auto;">
<tr>
<td>User:</td>
<td><input type='text' name='username' value='<?php showPost("username");?>'></td>
</tr>
<tr>
<td>Password:</td> 
<td><input type='password' name='password' value='<?php 
showPost("password");?>'></td>
</tr>
<td>User Group:</td>
<td><input type='text' name='usergroup' value='<?php
showPost("usergroup");?>'></td>
</tr>
<tr>
<td><input type='submit' name='choice' value='Login'></td>
<td><input type='submit' name='choice' value='New User'</td>
</tr>
</table>


<div style='position: absolute; bottom: 10px; '><p><?php echo $message;?></p>
<br>

</body>
</html>
