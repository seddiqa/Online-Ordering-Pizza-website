<!DOCTYPE HTML>

<html>
	<head>
	<title>Login form</title>
	<meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="css/login.css">
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	</head>
	
<body>
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-4"></div>
			<div class="col-md-4">
				<form method="post" action="login.php">

				<label id="p">Fifty-Fifty Pizza</label>
					<input id="input" name="Emaila" class="form-control" type="email" placeholder="Email" required=""><br>
					<input id="input" name="Pwda" class="form-control" type="password" placeholder="Pasword" required=""><br>
					<button id="input" type="submit" name="submit" class="btn btn-info">Login</button>
					<label id="label"><br><a href="new-account.php"> Create a new account </a></label>
				</form>

				<?php 
                    include "config.php";

                      if (isset($_POST['submit'])) {

                  $Emaila = $_POST['Emaila'];
                  $Pwda = $_POST['Pwda'];

                  $logina = "select * from admin where Email='$Emaila' and Password='$Pwda' ";

                  $loginadmin = mysqli_query($con, $logina);

                  if(mysqli_num_rows($loginadmin) > 0) {

                    session_start();

                    $_SESSION['Email']=$Emaila;

                    header("location:admin.php");
                  }
    }

   ?>




			</div>
			<div class="col-md-4"></div>
		</div>	
	</div>


</body>


</html>