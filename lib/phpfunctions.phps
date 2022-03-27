<!-- I honor Parkland's core values by affirming that I have 
followed all academic integrity guidelines for this work.
Mary Brown
CSC155 201h sp -->

<?php

function validate_or_bounce()
{
  if (!isset($_SESSION['user']))
  header("Location: login.php);
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

function validate_login($user,$password)
{
  if ($user=="Wonder" && $password=="Woman")
  return true;
  return false;
}



?>
