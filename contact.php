<?php
include_once('resources/littleui.php');
 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <div class="ui two column center aligned grid" style="padding-top:80px;">
      <div class="column">
        <div class="ui centered special card wow flipInY">
          <div class="blurring dimmable image">
            <div class="ui dimmer">
              <div class="content">
                <div class="center">
                  <div class="ui inverted button"><a target="_blank"href="https://www.linkedin.com/in/zephyr2403/">View Profile</a></div>
                </div>
              </div>
            </div>
            <img src="https://www.noao.edu/image_gallery/images/d2/ngc2237_400.jpg">
          </div>
          <div class="content">
            <div class="header">Ashutosh Singh</div>
              <div class="meta">Computer Science Student In Jaypee University Of Information Technology</div>
          </div>
        </div>
    </div>
      <div class="column">
        <div class="ui centered special card wow flipInY">
          <div class="blurring dimmable image">
            <div class="ui dimmer">
              <div class="content">
                <div class="center">
                  <div class="ui inverted button">View Profile</div>
                </div>
              </div>
            </div>
            <img src="https://www.noao.edu/image_gallery/images/d2/ngc2237_400.jpg">
          </div>
          <div class="content">
            <div class="header">Akash Sharma</div>
              <div class="meta">Computer Science Student And A Music Enthusiast</div>
          </div>
        </div>
      </div>
    </div>
    <div class="ui container" style="padding-top:20px;">
      <div class="ui grey inverted segment" >
        <h1 style="text-align:center;">About Team</h1>
        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut
        enim ad veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea consequat. Duis aute irure dolor in reprehender
         it in voluptate velit esse cillum dolore eu iat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa
         qui deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt
         ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
          consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur
          sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
      </div>
    </div>
    <script src="javascripts/wow.min.js">

    </script>
    <script>
    $('.special.card .image').dimmer({
      on: 'hover'
    });
    new WOW().init();

    </script>
  </body>
</html>
