<?php
include_once('resources/session.php');
if(!isset($_SESSION['name']))
{header('location:login.php');}
 ?>
<html>
<head>
<title>Home</title>
<link rel='stylesheet', href='stylesheets/dist/semantic.min.css'>
<link rel="stylesheet" href="stylesheets/animate.css">
</head>
<body>
  <div class="ui top grey inverted fixed menu">
    <div class="item sbtrig">
      <i class="sidebar icon"></i>
    </div>
    <div class="right menu">
      <div class="ui item">
        Welcome,<?php $udet = $_SESSION['name'] ; echo "<span style='padding:3px;font:bold Aclonica'>{$udet}</span>"  ;?>
      </div>
      <a class="ui item" href="logout.php">
        Logout
      </a>
    </div>
  </div>
  <div class="ui  sidebar grey inverted vertical menu" >
    <a class="item" href='home.php'>
       <i class="ui large inverted home icon"></i>Home
    </a>
    <a class="item">
       <i class="ui large inverted edit icon"></i>Edit Resume
    </a>
    <a class="item" href="search.php">
       <i class="ui large inverted search icon"></i>Search Jobs
    </a>
    <a class="item" href="contact.php">
      <i class='ui large inverted mobile icon'></i>Contact Us
   </a>
    <a class="item">
      <i class="ui large inverted users icon"></i>About Us
    </a>
   </div>

   <script src="javascripts/jquery-1.9.1.js"></script>
   <script src="javascripts/semantic.min.js"/></script>
   <script>
   $('.sbtrig').click(
     function(evt){
       $('.ui.sidebar.vertical').sidebar('setting','transition','slide out').sidebar('toggle')
     });
   </script>
</body>
</html>
