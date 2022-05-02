<!-- I honor Parkland's core values by affirming that I have
followed all academic integrity guidelines for this work.
Mary Brown
CSC155 201h sp -->

<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
.footer{
  position: fixed;
  left: 0;
  bottom: 0;
  width: 100%;
  background-color: #4AA516;
  color: white;
  text-align: center;
}
</style>
</head>

<body>
<div class="footer">

<?php
echo "<img width='40' src='images/marvin.jpg'>";
echo "<br>";
echo "User: <b><code>" . $_SESSION['username'] . "</code></b>";
echo "<br>";
echo date('m/d/Y');      
?>

</div>
</body>
</html>

