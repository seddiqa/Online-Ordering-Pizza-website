<?php 

              include ("config.php");
                if (isset($_POST['submit'])) {
                
              $Namec = $_POST['Namec'];
              $Emailc = $_POST['Emailc'];
              $Commentc = $_POST['Commentc'];
              $insert = mysqli_query($con, "insert into comment values ('','$Namec','$Emailc','$Commentc') ");
              if ($insert) {
                header("location:index.php");
              }
              }

            ?>