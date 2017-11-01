<!DOCTYPE html>
<html>
<head>
<title>Login</title>
<link rel='stylesheet', href='stylesheets/dist/semantic.min.css'>
<link rel='stylesheet', href='stylesheets/style.css'>
</head>
<body>
  <?php
include_once('resources/session.php');
if(isset($_SESSION['email']))
 header('location:home.php');
  if(isset($_POST['remail']))
  {
    include_once('resources/database.php');
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $email=$_POST['remail'];
    $pass=$_POST['rpass'];
    $hash_pass = password_hash($pass,PASSWORD_DEFAULT);
    try{
   $sqlinsert="INSERT INTO users
   (firstname,lastname,email,password)
   VALUES (:fname,:lname,:email,:pass) ";

   $statement =$db->prepare($sqlinsert) ;  // db created in database.php
   $statement-> execute(array(':fname'=>$fname,':lname'=>$lname,':email'=>$email,':pass'=>$hash_pass));
   if($statement->rowCount()==1)
   $text="<h3 style='color:green;'>Activation Link Has Been Sent To Your Account, Please Verify</h3>";

  }catch(PDOException $ex){
    $text="<h3 style='color:red;'>Error Occured During Registration. Please Try Again</h3>";
  }
  }
  elseif(isset($_POST['smail']))
  {

    include_once('resources/database.php');
    $email = $_POST['smail'];
    $pass=$_POST['spass'];
    $sqlquery="SELECT * FROM users WHERE email = :email ";
    $statement = $db->prepare($sqlquery);
    $statement->execute(array(':email' => $email));
    while($row = $statement->fetch()){
      $id=$row['id'];
      $hash_pass = $row['password'];

      if(password_verify($pass,$hash_pass))
      {
        $_SESSION['id'] = $id;
        $_SESSION['email'] = $email;
         //print_r($_SESSION);
        $_SESSION['name'] = $row['firstname'] ;
         header("location:home.php");
      }else{
          $text = "<h3 style='color:red;'>Invalid Email Or Password</h3>";
      }
    }
  }


  ?>
  <div class="ui tiny modal register">
    <div class="ui center aligned  inverted very stacked segment">
      <h1>Join Us For Free</h1>
      <?php if(isset($text)) echo "<h3>{$text}</h3>"; ?>
        <form class="ui equal width form" method="post" action="">
          <div class="field">
              <div class="field">
                <div class="ui labeled input">
                    <div class="ui grey label">
                      First Name
                        </div>
                        <input type="text" name ="fname" placeholder="" required>
                </div>
              </div>
            </div>
              <div class="field">
                <div class="ui labeled input">
                    <div class="ui grey label">
                      Last Name
                        </div>
                        <input type="text" placeholder="" name="lname" required>
                </div>
              </div>
              <div class="field">
                <div class="ui labeled input">
                    <div class="ui grey label" style="padding: 12px 28px;">
                      Email
                        </div>
                        <input type="email" name="remail" placeholder="abcd@xyz.com" required>
                </div>
              </div>
              <div class="field" >
                <div class="ui labeled input">
                    <div class="ui grey label" style="padding-right:15px";>
                      Password
                        </div>
                        <input type="password" name="rpass" placeholder="" required>
                </div>
              </div>
                  <button class="ui inverted vertical animated basic submit button regbtn"  style="margin-right:50px;">
                    <div class="hidden content">
                      <i class="large write icon"></i>
                    </div>
                    <div class="visible content">
                      Register
                    </div>
                  </button>
                  <div class="ui olive fade animated basic button login_btn" style="margin-left:50px;">
                    <div class="hidden content">
                      <i class=" angle double right icon"></i>
                    </div>
                    <div class="visible content">
                      Sign In
                    </div>
                  </div>
            </div><!-- Form -->
          </form><!-- Segment -->
        </div><!-- Register Modal -->
        <div class="ui tiny modal login">
          <div class="ui center aligned  inverted very stacked segment">
            <h1>Sign In To Your Account</h1>
              <form class="ui equal width form" method="post" action="">
                    <div class="field">
                      <div class="ui labeled input">
                          <div class="ui grey label" style="padding: 12px 28px;">
                            Email
                              </div>
                              <input type="email" name="smail" placeholder="abcd@xyz.com" required>
                      </div>
                    </div>
                    <div class="field" >
                      <div class="ui labeled input">
                          <div class="ui grey label"  style="padding-right:15px";>
                            Password
                              </div>
                              <input type="password" name ="spass" placeholder="" required>
                      </div>
                    </div>
                    <div class="fields">
                      <div class="field">
                        <div class="ui olive  animated basic button register_btn" style="margin-right:50px;">
                          <div class="hidden content">
                            <i class=" angle double left icon"></i>
                          </div>
                          <div class="visible content">
                            Register
                          </div>
                        </div>
                        <button class="ui inverted vertical animated basic submit button" style="margin-left:50px;">
                          <div class="hidden content">
                            <i class="large sign in icon"></i>
                          </div>
                          <div class="visible content">
                            Sign In
                          </div>
                        </button>
                      </div>
                    </div>
                  </form><!-- Form -->
                </div><!-- Segment -->
              </div><!-- Modal -->
      </div>
    </div>
  </div>
  <script src="javascripts/jquery-1.9.1.js"></script>
  <script src="javascripts/script.js"/></script>
  <script src="javascripts/semantic.min.js"/></script>
</body>
</html>

<!--
Create a Div For Register User and Div For Login
initiall Div for Registration will be show add
a button on clicking it show Login and hide
Registration (use toggle to change the button and effect)
-->
