<!-- I honor Parkland's core values by affirming that I have 
followed all academic integrity guidelines for this work.
Mary Brown
CSC155 201h sp -->

<html>
<head>
<title>Decide my title</title>
<?php
// php library with php functions
require("lib/phpfunctions.php");

//connect to the $_SESSION
session_start();

$message="";
$user = getPOST('user');
$password = getPOST('password');

if (isset($_POST['choice]))
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
User: <input type='text' name='user' value='<?php showPost("user");?>'><br>

Password: <input type='password' name='password' value='<?php 
showPost("password");?>'><br>

<input type='submit' name='choice' value='Login'><br>

user is Wonder, password is Woman <br>

<div style='position: absolute; bottom: 10px; '><p><?php echo $message;?></p>
<br>

</body>
</html>
