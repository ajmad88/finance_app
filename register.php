<?php
session_start();
include_once 'db_connect.php';
if(isset($_POST['add_bttn']))
{
  $role = "user";
  $username = $_POST['username'];
  $email = $_POST['email'];
  $fname = $_POST['fname'];
  $lname = $_POST['lname'];
  $password = $_POST['password'];
  if($crud->createUser($role, $username, $email, $fname, $lname, $password))
  {
    Header ('Location: index.php');
  }
  else {
    echo ("Does not compute!");
  }
}

 ?>
<!DOCTYPE html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Personal Finance App</title>

    <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>

    <!-- Plugin CSS -->
    <link href="vendor/magnific-popup/magnific-popup.css" rel="stylesheet">

    <!-- Theme CSS -->
    <link href="css/creative.min.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
       <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
       <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <style>
    input, select, textarea{color: black;}
    .productSearch{text-align: center;}
    </style>
    </head>
    <script>
      function checkPass()
      {
          //Store the password field objects into variables ...
          var pass1 = document.getElementById('pass1');
          var pass2 = document.getElementById('pass2');
          //Store the Confimation Message Object ...
          var message = document.getElementById('confirmMessage');
          //Set the colors we will be using ...
          var goodColor = "#66cc66";
          var badColor = "#ff6666";
          //Compare the values in the password field
          //and the confirmation field
          if(pass1.value == pass2.value)
          {
              //The passwords match.
              //Set the color to the good color and inform
              //the user that they have entered the correct password
              pass2.style.backgroundColor = goodColor;
              message.style.color = goodColor;
              message.innerHTML = "Passwords Match!"
          }
          else
          {
              //The passwords do not match.
              //Set the color to the bad color and
              //notify the user.
              pass2.style.backgroundColor = badColor;
              message.style.color = badColor;
              message.innerHTML = "Passwords Do Not Match!"
          }
      }
    </script>
      <body>
        <center>
          <form class="modal-content animate" method="post">
            <div>
              <h2>REGISTER AN ACCOUNT</h2>
            </div>
            <div>
            <br>
              <label><b>Username</b></label>
            </br>
              <input type="text" placeholder="Enter Username" name="username" required>
            <br>
              <label><b>Email</b></label>
            </br>
              <input type="text" placeholder="Enter Email" name="email" required>
            <br>
              <label><b>First Name</b></label>
            </br>
              <input type="text" placeholder="Enter First Name" name="fname" required>
            <br>
              <label><b>Last Name</b></label>
            </br>
              <input type="text" placeholder="Enter Last Name" name="lname" required>
            <br>
              <label><b>Password</b></label>
            </br>
              <input type="password" placeholder="Enter Password" name="password" id="pass1" required>
              </br>
              <label for="pass2"><b>Confirm Password</b></label></br>
              <input type="password" name="confpassword" id="pass2" onkeyup="checkPass(); return false;"></br>
              <span id="confirmMessage" ></span>
            </div>
            <div>
            <button type="submit" name="add_bttn">Submit</button>
            </div>
            </div>
          </form>
        </center>
        <!-- jQuery -->
        <script src="js/jquery.js"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="js/bootstrap.min.js"></script>
  </body>
</html
