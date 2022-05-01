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
  if($choice == "Create User")
  {
    $password = $_POST['password155'];
    $verifypassword = $_POST['verifypassword155'];
    if($password == $verifypassword)
    {
      $stmt = $conn->prepare("INSERT INTO users SET username=?,
                                                    email=?,
                                                  usergroup=?,
                                                 encrypted_password=?
                                                 ");
      $stmt->bind_param("ssss", $username, $email, $usergroup, $encrypted);
      $username=$_POST['username155'];
      $email=$_POST['email155'];
      $usergroup=$_POST['usergroup'];
      $encrypted= password_hash($password, PASSWORD_DEFAULT);

      $stmt->execute();
    }
  }
}

?>
</head>
<body>

<form method='POST'>
<table style="border: 3px black; border-radius: 10px;
background-color: #4AA516; padding: 5px: margin-left: auto;
margin-right: auto;">
<tr>
<td>Username:</td>
<td><input type='text' name='username155'></td>
</tr> 
<tr>
<td>Email:</td>
<td><input type='text' name='email155'></td
</tr>
<tr>
<td>Usergroup:</td>
<td><input type='text' name='usergroup'></td>
</tr>
<tr>
<td>Password:</td>
<td><input type='password' name='password155'</td>
</tr>
<tr>
<td>Verify Password::</td>
<td><input type='password' name='verifypassword155'</td>
</tr>
<td><input type='submit' name='choice' value='Create User'></td>
<td></td>
</tr>
</table>


</body>
</html>

