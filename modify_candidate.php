 <?php 

  require_once "includes/db.php";

    $cid = $_POST['cid'];
    $cname = $_POST['cname'];

   $sql = "UPDATE candidate SET c_name = '$cname' WHERE c_id = '$cid'";
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
