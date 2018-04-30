<!DOCTYPE HTML>

<html>
	<head>
	<title>Login form</title>
	<meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="css/new.css">
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	</head>
	
<body>
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-4"></div>
			<div class="col-md-4">
				<form method="post" action="new-account.php">

				<label id="p">Creat you new account</label>
					<input id="input" name="Emaila" class="form-control" type="email" placeholder="Email" required=""><br>
					<input id="input" name="Emaila" class="form-control" type="email" placeholder="Confirm Email"required=""><br>
					<input id="input" name="Pwda" class="form-control" type="password" placeholder="Pasword"required=""><br>
					<input id="input" name="Pwda" class="form-control" type="password" placeholder="Confirm Pasword"required=""><br>
					<button id="input" type="submit" name="submit" class="btn btn-info">Login</button>
				</form>

				<?php 

              include ("config.php");

                if (isset($_POST['submit'])) {
                
              $Namea = $_POST['Emaila'];
              $Pwda = $_POST['Pwda'];
              $insert = mysqli_query($con, "insert into login values ('','$Emaila','$Pwda') ");
              if ($insert) {
              	header("location:login.php");
              }
              }

            ?>



				
			</div>
			<div class="col-md-4"></div>
		</div>	
	</div>


</body>


</html>