<!DDOCTYPE html>
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
	input, select, textarea {
		color: black;
	}

	.productSearch {
		text-align: center;
	}
	</style>

</head>
<body>

    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
      <nav id="mainNav" class="navbar navbar-default navbar-fixed-top">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
            </button>
            <a class="navbar-brand page-scroll" href="index.php">Tree Tagger</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1" style="padding-right: 20px;">
            <ul class="nav navbar-nav navbar-right">
			<li style="margin-right: 20px;">
            <button style="margin: 10px;" class="btn btn-primary btn-block" onclick="document.getElementById('id01').style.display='block'">LOGIN</button>
            <!-- The Modal Login -->
            <div id="id01" class="modal">
              <span onclick="document.getElementById('id01').style.display='none'"
            class="close" title="Close Modal">&times;</span>
              <!-- Modal Content -->
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
                  <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button></br>
                  <a href="signup.php">Register New Account</a>
              </div></br>
              </form>
            </center>
            </div>
          </li>
        </ul>
        </div>
      </nav>
        <!-- /.navbar-collapse -->
    </div>
</body>
</html
