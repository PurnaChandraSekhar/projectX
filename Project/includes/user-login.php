<?php 

    if (isset($_POST['login']))
     {
          
              include_once ('db.php');

              $roll_no = mysqli_real_escape_string($conn, $_POST['roll_no']);
              $password = md5(mysqli_real_escape_string($conn, $_POST['pwd']));

              if (empty($roll_no) || empty($password)) 
              {
                header("LOCATION: ../index.php?msg=empty");
                exit();
              }

      
             $sql = "SELECT * FROM users WHERE Roll_no = '$roll_no' AND password='$password' ";
             $result = mysqli_query($conn, $sql);
             $row=mysqli_fetch_assoc($result);
              
             if(mysqli_num_rows($result)==1)
             {
               session_start();
               $_SESSION['user_id']=$row['user_id'];
               header("LOCATION: ../voting-page.php");
             }   
             else
             {
                  header("Location: ../index.php?msg=error");
                  exit();
             }
              
              

    
}