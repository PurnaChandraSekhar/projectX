<?php
		include_once "includes/db.php";
         
         $user= $_POST['user'];
         $first = $_POST['first'];
         $last = $_POST['last'];
         $username = $_POST['username'];
         $phn = $_POST['phn'];
		
		 $sql = "UPDATE users SET firstname='$first',lastname='$last',username='$username',phn_num='$phn' WHERE user_id = '$user'";
         $result = mysqli_query($conn, $sql);

         if (mysqli_query($conn, $sql))
          {
         	echo "success";
         	exit();
         }
         else
          {
            echo mysqli_error($conn);
            exit();
         }
          
		 //  $result = mysqli_query( $conn,$sql);
		 // if ($result)
		 //  {
		 // 	echo "success";
		 //  }
		 // else
		 // {
		 // 	 echo  mysqli_error($conn);
			//  exit();
		 // }
	    

			

		// if(isset($_POST['delete_row']))
		// {
		//  $row_no=$_POST['row_id'];
		//  mysql_query("delete from user_detail where id='$row_no'");
		//  echo "success";
		//  exit();
		// }

		// if(isset($_POST['insert_row']))
		// {
		//  $name=$_POST['name_val'];
		//  $age=$_POST['age_val'];
		//  mysql_query("insert into user_detail values('','$name','$age')");
		//  echo mysql_insert_id();
		//  exit();
		// }
?>