  <?php
        include_once "includes/admin_session.php";
  ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Users Data</title>
   <link rel="stylesheet" type="text/css" href="Bootstrap.css">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
   <link href="https://fonts.googleapis.com/css?family=Oxygen" rel="stylesheet">
   <script type="text/javascript" src="./js/jquery-3.2.1.min.js"></script>
   <script type="text/javascript" src="./js/script.js"></script>
   <script type="text/javascript" src="js/modify.js"></script>
</head>
<style>
   * {
       margin: 0px;
       padding: 0px;
     }
   body {
     background-image: url(bg_images/img.jpg);
     background-size: cover;
   }
   nav {
     width: 100%;
     height: 60px;
     background-color: #fff;
   }
   nav header p {
     font-family: arial;
     font-size: 24px;
     line-height: 55px;
     color: #222;
     float: left;
     padding: 0px 20px;
   }
   nav ul {
     float: left;
   }
   nav ul li {
     float: left;
     list-style: none;
     position: relative;
   }
   nav ul li a {
     font-family: arial;
     font-size: 20px;
     color: #222;
     text-decoration: none !important;
     padding: 16px 14px;
     display: block;
   
   }
    nav ul li ul {
     display: none;
     position: absolute;
     background-color: #fff;
     border-radius: 0px 0px 4px 4px;
   }
    nav ul li:hover ul {
     display: block ;
   }
    nav ul li ul li a {
     padding: 8px 14px;
   }
   nav ul li ul li  {
     width: 180px;
     border-radius: 4px;
   }
     nav ul li ul li a:hover {
      background-color: #f3f3f3;
   }
   #edit-table input[type="text"]{
    border: none;
    padding-left: 5px;
    background-color: #b0c4dd;
    padding: 10px 5px;
    color: black;
    width: 120px;
   }
   #edit-table .editAble{
        border: 1px solid black !important;
        background-color: white !important;
        color: black !important;
   }
</style>
<body>
    
        <div class="row">
           <div class="col-lg-12 col-sm-12 col-xs-12">
               <nav id="navbar" class="navbar-fixed-top">
         <header>
            <p>Welcome <strong>ADMIN</strong></p>
         </header>
         <ul>
               <li><a href="inside-admin.php" class="active"><p>Home</p></a></li>
               <li style="padding-left: 950px"><a href="includes/logout_admin.php?msg=logout"><b>LogOut</b></a></li>                                
         </ul>
         <ul style="padding-left: 950px">
            
         </ul>
      </nav>
      <div class="container">
                        <h1> Data Table </h1>
                        <a href="inside-admin.php" class="btn btn-info btn-sm">Back</a> 
                        <br>
                        <table class="table table-bordered table-responsive" id="edit-table">
                           <thead>
                              <tr>
                                  <th class="text-center">ID</th>
                                  <th class="text-center">firstName</th>
                                  <th class="text-center">LastName</th>
                                  <th class="text-center">UserName</th>
                                  <th class="text-center">Roll_No</th>
                                  <th class="text-center">Department</th>
                                  <th class="text-center">Phone_Number</th>
                                  <th class="text-center" colspan="3">Action</th>
                              </tr>
                           </thead>
          </div>
  
   <?php
           include_once("includes/db.php");

           $sql = "SELECT user_id, firstname, lastname, username, Roll_no, department, phn_num FROM users";
           $result = mysqli_query($conn, $sql);

           while ($resultcheck = mysqli_fetch_assoc($result))
           {
            ?>
              <tr>
              <td><input type="text" disabled name="userid" value="<?php echo $resultcheck['user_id']?>"></td>
              <td><input type="text" name="first" disabled class="edit"  value="<?php echo $resultcheck['firstname']?>"></td>
              <td><input type="text" name="last" disabled class="edit"  value="<?php echo $resultcheck['lastname']?>"></td>
              <td><input type="text" name="username" disabled class="edit"  value="<?php echo $resultcheck['username']?>"></td>
              <td><input type="text" name="roll" disabled  value="<?php echo $resultcheck['Roll_no']?>"></td>
              <td><input type="text" name="dep" disabled value="<?php echo $resultcheck['department']?>"></td>
              <td><input type="text" name="phn" disabled class="edit"  value="<?php echo $resultcheck['phn_num']?>"></td>
              <td>
                     <button class="btn btn-warning btn-edit">Edit</button>
                   </td>
                   <td>
                     <button class="btn btn-warning update-btn">Update</button>
                   </td>
                     <td>
                    <a onclick="return confirm('Are You Sure?')" href='user-data.php?idx=<?php echo $resultcheck['user_id']?>' class='btn btn-danger'>Delete</a>
                    </td>
              </tr>
              <?php  
           }
           if (isset($_GET['idx']))
            {
              $idx = $_GET['idx'];
              $sql1 = "DELETE FROM users WHERE user_id = '$idx'";
              $result1 = mysqli_query($conn, $sql1);
              if($result1)
               {
            ?>
            <script type="text/javascript">
                alert("Deleted Successfully");
                window.location.href='user-data.php';
            </script>
            <?php
              }
              else {
                ?>
                <script type="text/javascript">
                   alert("Failed To Delete!");
                   window.location.href="user-data.php";
                </script>
                <?php
              }
           }
   ?> 
                        </table>
           </div>
        </div>
</body>
</html>
