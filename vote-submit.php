<?php
     if (isset($_POST['submit']))
   {
            include_once('includes/db.php');
            session_start();
            $user_id = $_SESSION['user_id'];
            $president = mysqli_real_escape_string($conn,$_POST['president']);
            $vicepresident = mysqli_real_escape_string($conn,$_POST['v_president']);
            $Treasurer = mysqli_real_escape_string($conn,$_POST['Treasurer']);
            $prd = mysqli_real_escape_string($conn,$_POST['prd']);
            $g_sec = mysqli_real_escape_string($conn,$_POST['g_sec']);
            $j_sec = mysqli_real_escape_string($conn,$_POST['j_sec']);
            $c_sec = mysqli_real_escape_string($conn,$_POST['c_sec']);
            $s_sec = mysqli_real_escape_string($conn,$_POST['s_sec']);
            $editor = mysqli_real_escape_string($conn,$_POST['editor']);

            if (empty($president) || empty($vicepresident) || empty($Treasurer) || empty($prd) || empty($g_sec) || empty($j_sec) || empty($c_sec) || empty($s_sec) || empty($editor))
            {
              header("Location: voting-page.php?msg=empty");
              exit();
            }

             $sql = "INSERT INTO votes VALUES ('$user_id','$president'),('$user_id','$vicepresident'),('$user_id','$Treasurer'),('$user_id','$prd'),('$user_id','$g_sec'),('$user_id','$j_sec'),('$user_id','$c_sec'),('$user_id','$s_sec'),('$user_id','$editor')";

             if (mysqli_query($conn, $sql)) 
             {
              echo "<h2>Please Wait while Your Votes Are Being Submitted...</h2>";
              header("refresh:3; url=voting-page.php?msg=success");
              exit();
             }
             else 
             {
              header("Location: voting-page.php?msg=done");
              exit();
             }
  }
  