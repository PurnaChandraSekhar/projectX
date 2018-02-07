<?php 

  if (isset($_POST['submit']))

   {
  	  include_once("db.php");

  	  $token = mysqli_real_escape_string($conn, $_POST['token']);

      if (empty($token))
       {
         header("Location: ../token.php?msg=empty");
         exit();
      }

  	  $sql = "SELECT * FROM token WHERE tokens = '".$token."'";
      $result = mysqli_query($conn, $sql);
      $row=mysqli_fetch_assoc($result);
         $resultcheck = mysqli_num_rows($result);
         if($resultcheck==1)
         {
             session_start();
             $_SESSION['token'] = $row['tokens'];
              $sql1 ="DELETE FROM token WHERE tokens = '".$token."'";
               $result1 = mysqli_query($conn, $sql1);   
              if($result1)
               {
                header("LOCATION: ../register.php");
              exit();
              }    
         }
         else
         {
              header("Location: ../token.php?msg=mismatch");
              exit();
        }
  }