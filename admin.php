<?php
session_start();

if (!$_SESSION['Email']) {
  header("location:login.php");
}
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Resturant</title>
  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="css/admin.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <script src="bootstrap/js/bootstrap.min.js"></script>
  <script src="bootstrap/js/jquery.min.js"></script>

    <script>
        $(document).ready(function(){
            $("#button-show").click(function(){
                $(".table table-striped").fadeToggle("slow");
                });
                });  
    </script>

        
</head>
<body>
  


	<nav class="navbar navbar-inverse" style="border-radius:0px;">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Resturant</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li ><a href="#">Home <span class="sr-only">(current)</span></a></li>
        <li><a href="#">Menus</a></li>
        <li><a href="#">Gallery</a></li>
        <li><a href="#">Contact</a></li>
        <li><a href="#">About</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right ">
          <li><a href="sign-out.php">Sign Out</a></li>
      </ul>
  </div><!-- /.container-fluid -->
</nav>




	<div class="container">
    <div id="form1">
      <div id="form2">
		<div class="row">
			<div class="col-md-6">
				<form method="post" action="admin.php">
					<button id="button-show" class="btn btn-primary">Show orders </button>

        </form>

          <?php 
            include "config.php";
            $select = "select * from ordering";
            $show = mysqli_query($con, $select);
              foreach ($show as $view) {

              }
              ?>
              <div class="table-responsive">
                <table id="table1" class="table table-striped" style="display:hide;">
             <thead id="table1">
      <tr >
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Phone Num</th>
        <th>Pizza-Num</th>
        <th>Pizza-Size</th>
      </tr>
    </thead id="table1">
    <tbody >
      <tr >
        <td><?php echo $view ['ID'] ?></td>
        <td><?php echo $view ['Name'] ?></td>
        <td><?php echo $view ['Email'] ?></td>
        <td><?php echo $view ['Phone'] ?></td>
        <td><?php echo $view ['Pizza-Num'] ?></td>
        <td><?php echo $view ['Pizza-size'] ?></td>
      </tr>
      
    </tbody>
  </table>
  </div>
            				
            <?php  
            ?>


					
			</div>
			<div class="col-md-6">
			<form method="post" action="">
					<button id="button2" class="btn btn-primary">Show Comments </button>
        </form>

          <?php 
          include "config.php";
          $selectcom = "select * from comment";
          $selectcomquery = mysqli_query($con, $selectcom);

          foreach ($selectcomquery as $comquery) {

            ?>
            <div class="" >
            <table  class="table table-striped" style="display:hide;">
             <thead>
                  <tr>
                    <th id="table2">ID</th>
                    <th id="table2">Name</th>
                    <th id="table2">Email</th>
                    <th id="table2">Comment</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td><?php echo $comquery ['ID'] ?></td>
                    <td><?php echo $comquery ['Name']?></td>
                    <td><?php echo $comquery ['Email'] ?></td>
                    <td><?php echo $comquery ['Comment'] ?> </td>
                  </tr>
                </tbody>
              </table>
              </div>
              <?php } ?>
			</div>
		</div>
    </div>
    </div>
	</div>





        </div>
      </div>

<div class="container-fluid">
        <div class="row" >

          <footer >
            <div class="container">
            <div class="col-md-5">

              <div id="col-1">
        <h3>Fifty-Fifty PIZZA</h3>
        <p>The Best Quality 2017</p>
        <center>
        <ul>
            <li><a href=""><img src="img/face.png"></a></li>
            <li><a href=""><img src="img/tw.png"></a></li>
            <li><a href=""><img src="img/instagram.png" style="background-color:#CC0000;border-radius:50px"></a></li>
            <li><a href=""><img src="img/googl.png"></a></li>
        </ul>
        </center>
      </div>
      <center>
        <ul>
          <li><a href="#">Home</a></li>
          <li><a href="#">Menus</a></li>
          <li><a href="#">Gallery</a></li>
          <li><a href="#">Contact</a></li>
          <li><a href="#">About</a></li>
          <li><a href="#">Services</a></li>
          
        </ul>
        </center>
            </div>
            <div class="col-md-4">
              
              <form method="post" action="comment.php" role="form">
                  <input id="input" name="Namec" class="form-control" type="text" placeholder="  Name" style="width:100%">
                  
                  <input  id="input" name="Emailc" class="form-control" type="email" placeholder="  Email" style="width:100%">
                  
              
                  <textarea id="input" name="Commentc" class="form-control" col="15" style="width:100%" placeholder="Comment"></textarea>
              
                  <button type="submit" name="submit" class="btn btn-primary" type="button" style="width:100%; margin-right:-5px; margin color:white; font-weight:bold; border:none; padding:5px;" >WRITE US</button>
            
            
            
          
          </form>

        </center>
            </div>
            <div class="col-md-3">
              <div id="col-4">
        <h3>Contact Us</h3>
        <ul>
          <li><img src="img/e.png"><p>Email: 50-50@gmail.com</p></li>
          <li><img src="img/pointer.png" style="background-color:white; border-radius:50px;"><p>Address: Char Rah-e-Mostufiet Herat</p></li>
          
          <li><img src="img/phone-num.png" style="width:45;  border-radius:50px;">
          <p>Contact #: +93(0) 747 42 50 50</p></li>
        
        
        </ul>
        
        
      
      
      </div>
            </div>
            </div>
          </footer>
        </div>
      </div>
      


</body>
</html>