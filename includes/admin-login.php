<?php

   if (isset($_POST['login']))
    {
   	   
   	     include_once ('db.php');

   	     $u_id = mysqli_real_escape_string($conn, $_POST['admin']);
   	     $u_pwd = mysqli_real_escape_string($conn, $_POST['pwd']);

   	     if (empty($u_id) || empty($u_pwd)) 
         {
   	     	 header("Location: ../admin.php");
   	     	 exit();
   	     }
         
   	     	  $sql = "SELECT * FROM admin WHERE username = '".$u_id."' AND password = '".$u_pwd."'";
   	     	  $result = mysqli_query($conn, $sql);
   	     	  $resultcheck = mysqli_num_rows($result);

   	     	  if ($resultcheck == 1)
              {
                session_start();
                $row=mysqli_fetch_assoc($result);
                $_SESSION['userid'] = $row['id'];
   	     	  	  header("Location: ../inside-admin.php?login=successful");
                exit();
   	     	    }
              else
              { 
                    header("Location: ../admin.php?login=error");
                    exit();                
              } 
                echo mysqli_error($conn);
   	       	     	   	     	  
   	     }
       
   