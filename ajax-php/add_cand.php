<?php
       
      	  include_once "../includes/db.php";

		 $cname = mysqli_real_escape_string($conn, $_POST['cname']);
		 $depart = mysqli_real_escape_string($conn, $_POST['depart']);
		 $postname = mysqli_real_escape_string($conn, $_POST['postname']);

		 if (empty($cname) || empty($depart) || empty($postname))
		  {
		 	echo "Empty field!";
		 	exit();
		 }
		 $sql1 = "SELECT * FROM candidate where c_name = '".$cname."'";
		 $result1 = mysqli_query($conn, $sql1);
		 $row = mysqli_num_rows($result1);

		 if ($row > 0)
		  {
		 	echo "failed";
		 	exit();
		 }

		 $sql = "INSERT INTO candidate VALUES ('','$cname','$depart','$postname')";
		 
		 if (mysqli_query($conn, $sql))
		  {
		 	echo "success";
		  }
		  else
		  {
		  	 mysqli_error($conn);
		  }
      