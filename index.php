<!DOCTYPE html>
<html lang="en">
<head>
  <title>Resturant</title>
  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <script src="bootstrap/js/jquery.min.js"></script>
  <script src="bootstrap/js/bootstrap.min.js"></script>
</head>
<body>

  <nav class="navbar navbar-inverse" style="border-radius:0px; margin-bottom:0px;">
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
          <li><a href="login.php">Sign In</a></li>
      </ul>
  </div><!-- /.container-fluid -->
</nav>

  <div class="container-fluid" style="padding-bottom:30px;">
      <div class="row">
        <div class="col-md-12">
            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="img/pizza.jpg" alt="  " class="image-responsive" style="height:400px; width:100%;">
      <div class="carousel-caption">
        
      </div>
    </div>
    <div class="item">
      <img src="img/pp.jpg" alt="" class="image-responsive"  style="height:400px; width:100%;">
      <div class="carousel-caption">
        
      </div>
    </div>
    
  </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
        </div>
      </div>  
  </div>


      <!-- End of slide show -->

      <div class="container" style="background-color:whitesmoke;padding:30px;border-radius:10px;"> 

        <div class="row">
          <aside>
            <div class="col-md-3" style="background-color:gray;border-right:1px solid red; ">
                <label style="font-size:20px; text-align:center;">Sign in your account</label>

                <form style="margin-bottom:10px;" method="post" action="index.php" role="form">
                  <input id="input" type="email" name="Email" class="form-control" placeholder="Email">
                  <input id="input" type="password" name="Pwd" class="form-control" placeholder="Password">
                  <button type="submit" name="submit" class="btn btn-info" style="width:100%;">Log In </button>
                  <a id="register" href="#">Forgot Password</a><br>
                  <a id="register1" href="#" style="margin-left:60px;">Register Now</a>
                </form>

                  <?php 
                    include "config.php";

                      if (isset($_POST['submit'])) {

                  $Email = $_POST['Email'];
                  $Pwd = $_POST['Pwd'];

                  $login = "select * from login where Email='$Email' and Password='$Pwd' ";

                  $loginquery = mysqli_query($con, $login);

                  if(mysqli_num_rows($loginquery) > 0) {

                    session_start();

                    $_SESSION['Email']=$Email;
                    $_SESSION['Password']=$Pwd;

                    header("location:order.php");
                  }
    }

   ?>

                

            </div>
            </aside>
            <section>
            <div class="col-md-9 " style="padding-bottom:30px;">
              <div style="width:100%;">
                <div style="margin-bottom:20px;width:10%;height:40px;background-color:red;border-radius:15px 0px 0px 0px;float:left;"></div>
                <div style="margin-bottom:20px;width:90%;height:40px;background-color:black;border-radius:0px 15px 0px 0px;float:right;">
                  <p style="float:left;margin-top:10px;color:white;">Services </p></div>
              </div>

                <div class="row">
                  <div class="col-md-4" style="padding:20px;">
                    <img src="img/1_sec.jpg" id="img" >
                    <ul id="sec_info">
                     <li><a href="#"><strong></strong>Fifty-Fifty Resturant</a></li>
                     <li><a href="#">Green Environment</a></li>
                     <li><a href="#">Celebrate your happy moments with 50-50 Resturant</a></li>
                      <li><a href="#">Tea Talk with your Dears</a></li>
                    </ul>
                    <div class="section-left">
          <div class="section-A">
            <img src="img/piza.jpg" id="img"/>
          </div>
      </div>
                  </div>
                  <div class="col-md-4" style="padding:20px;">
                    <img src="img/2_sec.jpg" id="img"\>
                    <ul id="sec_info">
                      <li><a href="#"><strong></strong>Fifty-Fifty deliver your order on time</a></li>
                     <li><a href="#">Green Environment</a></li>
                     <li><a href="#">Celebrate your happy moments with 50-50 Resturant</a></li>
                      <li><a href="#">Tea Talk with your Dears</a></li>
                   </ul >
                   
          <div class="section-1">
            <img src="img/desirt.jpg" id="img"/>
          </div>
                  </div>
                  <div class="col-md-4" style="padding:20px;">
                    <img src="img/3_sec.jpg" id="img">
                    <ul id="sec_info">
                     <li><a href="#"><strong></strong>Fifty-Fifty deliver your order on time</a></li>
                     <li><a href="#">Green Environment</a></li>
                     <li><a href="#">Celebrate your happy moments with 50-50 Resturant</a></li>
                     <li><a href="#">Tea Talk with your Dears</a></li>
                    </ul>
                    <div class="section-2">
            <img src="img/drink.jpg" id="img"/>
          </div>
                  </div>
      </div>
   
            </div>
            </section>
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