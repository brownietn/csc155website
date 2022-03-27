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

$message="";
$user = getPOST('user');
$password = getPOST('password');

if (isset($_POST['choice']))
{
  if ($_POST['choice'] == 'Login')
  {
    if (validate_login($user, $password))
    {
      $_SESSION['user'] = $user;
      header('Location: welcome.php');
    }
    $message = "Invalid username or password!";
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
<td><input type='text' name='user' value='<?php showPost("user");?>'></td>
</tr>
<tr>
<td>Password:</td> 
<td><input type='password' name='password' value='<?php 
showPost("password");?>'></td>
</tr>
<tr>
<td><input type='submit' name='choice' value='Login'></td>
<td></td>
</tr>
</table>

<center>user: Wonder password: Woman</center>

<div style='position: absolute; bottom: 10px; '><p><?php echo $message;?></p>
<br>

</body>
</html>
