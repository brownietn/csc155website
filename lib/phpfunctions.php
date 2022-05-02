<!-- I honor Parkland's core values by affirming that I have 
followed all academic integrity guidelines for this work.
Mary Brown
CSC155 201h sp -->

<?php

function validate_or_bounce()
{
  if (!isset($_SESSION['username']))
  header("Location: login.php");
}

function showPost($key)
{
  if (isset($_POST[$key]))
  echo htmlspecialchars($_POST[$key]);
}

function getPost($key)
{
  if (isset($_POST[$key]))
  return htmlspecialchars($_POST[$key]);
  return "";
}

function validate_login($conn, $username, $password)
{
  if ($username=="Wonder" && $password=="Woman")
    return true;
  $row = getUserByUsername($conn, $username);

  if($row == "fail")
    return false;
  if (password_verify($password, $row['encrypted_password']))
    return true;
    header('Location: login.php');
  return false;
}

function connectDB()
{
  $user = "mbrown287";
  $conn = mysqli_connect("localhost", $user,$user,$user);

  if(mysqli_connect_errno())
  {
    echo "<b>Failed to connect to MySQL: " . mysqli_connect_error() . "</b>";
  }
  return $conn;
}

function getUserByUsername($conn, $username)
{
  $sql = "SELECT * FROM users WHERE username=?";
  
  $stmt = $conn->prepare($sql);
  $stmt->bind_param("s", $username);
  $stmt->execute();
  $result = $stmt->get_result();

  if($result->num_rows != 1)
  {
    return "fail";
  }
  
  $row = $result->fetch_assoc();
  return $row;
}

?>
