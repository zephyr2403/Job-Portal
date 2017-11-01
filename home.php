<?php
include_once('resources/session.php');
if(!isset($_SESSION['name']))
{header('location:login.php');}
?>
<!DOCTYPE html>
<html>
<head>
<title>Home</title>
<link rel='stylesheet', href='stylesheets/dist/semantic.min.css'>
</head>
<body>
  You are logged in as <?php echo $_SESSION['name'] ;?> click here to <a href="logout.php">Logout</a>
  <script src="javascripts/jquery-1.9.1.js"></script>
  <script src="javascripts/script.js"/></script>
  <script src="javascripts/semantic.min.js"/></script>
</body>
</html>
