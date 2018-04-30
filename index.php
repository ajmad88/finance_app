<?php
session_start();
include_once'db_connect.php';
if(isset($_POST['login_bttn'])){
  $username = $_POST['username'];
  $password = $_POST['password'];
  $row = $crud->checkCredentials($username, $password);

 if($row['username'] == $username){
    $_SESSION['sess_user'] = $row['username'];
    $_SESSION['sess_role'] = $row['user_role'];

    if($_SESSION['sess_role'] == "user")
    {
      header("Location: userindex.php");
    }
  }
  else
  {
    echo("Invalid Login Information...");
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
  	input, select, textarea
    {
  		color: black;
  	}

  	.productSearch
    {
  		text-align: center;
  	}
    </style>
  </head>
  <body>
    <center>
      <form class="modal-content animate" method="post">
        <div>
          <h2>LOGIN</h2>
        </div>
        <div >
          <label><b>Username</b></label>
          <input type="text" placeholder="Enter Username" name="username" required>
        </br>
          <label><b>Password</b></label>
          <input type="password" placeholder="Enter Password" name="password" required>
        </br>
          <button class="cancelbtn" type="submit" name="login_bttn" formmethod="post" >Login</button>
          </br>
          <a href="register.php">Register New Account</a>
      </div></br>
      </form>
    </center>
  </body>
</html
