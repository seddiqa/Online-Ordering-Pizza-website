<?php
              include "config.php";

              $name =$_POST['Name'];
              $email =$_POST['Email'];
              $phone =$_POST['Phone'];
              $inserorder = mysqli_query($con, "insert into ordering values('','$name','$email','$phone','1','2') ");
             	if ($inserorder) {
             		header("location:order.php");
             	}

              



             ?>