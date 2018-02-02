<?php

   if (isset($_POST['submit']))
    {

          include_once "db.php";

      $first = mysqli_real_escape_string($conn,$_POST['firstname']);
      $last = mysqli_real_escape_string($conn,$_POST['lastname']);
      $rollno = mysqli_real_escape_string($conn,$_POST['roll-no']);
      $username = mysqli_real_escape_string($conn,$_POST['username']);
      $dep = mysqli_real_escape_string($conn,$_POST['Department']);
      $pwd = md5(mysqli_real_escape_string($conn,$_POST['password']));
      $phn = mysqli_real_escape_string($conn,$_POST['phn']);

          if (empty( $first) || empty( $last) || empty( $rollno) || empty( $username) || empty( $dep) || empty( $pwd) || empty( $phn))
           {
               header("Location: ../register.php?msg=empty");
               exit();
          }

      if (!preg_match("/^[A-Z]{2}-[0-9]{2}-[0-9]{2}$/", $rollno))
       {
          header("Location: ../register.php?msg=rpattern");
          exit();
       }
       if (!preg_match("/^[0-9]{10}$/", $phn))
          {
                 header("Location: ../register.php?msg=phn");
                 exit();
              }


         $sql="SELECT * FROM users WHERE Roll_no ='".$rollno."'";
          $result = mysqli_query($conn, $sql);
          $resultcheck = mysqli_num_rows($result);

        if ($resultcheck > 0)
         {
           header("Location: ../register.php?msg=Roll" );
           exit();
        }

        $sql2 = "SELECT * FROM users WHERE username = '".$username."'";
        $result = mysqli_query($conn, $sql2);
        $resultcheck = mysqli_num_rows($result);

        if ($resultcheck > 0)
         {
            header("Location: ../register.php?msg=user");
            exit();
        }


           $sql1="INSERT INTO users VALUES ('','$rollno', '$first','$last',  '$username' , '$dep', '$pwd' , '$phn')";

            if(mysqli_query($conn, $sql1))
            {
            session_start();   
            session_unset();
            session_destroy();
            header("Location: ../index.php?msg=success");
            exit();
          }
            else
            {
              echo mysqli_error($conn);
            }


     }
