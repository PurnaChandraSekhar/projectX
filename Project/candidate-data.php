  <?php
        include_once "includes/admin_session.php";
  ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Candidate data</title>
   <link rel="stylesheet" type="text/css" href="Bootstrap.css">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
   <link href="https://fonts.googleapis.com/css?family=Oxygen" rel="stylesheet">
   <script type="text/javascript" src="./js/jquery-3.2.1.min.js"></script>
   <script type="text/javascript" src="./js/script.js"></script>
   <script type="text/javascript" src="bootstrap.min.js"></script>
   <script type="text/javascript" src="js/modify_candidate.js"></script>
   <script>
       $(document).ready(function() {
          $('#add').click(function() {
              $('select[name="postname"]').load('ajax-php/ajax.php');
          });
          $('#add').click(function() {
             $('select[name="depart"]').load('ajax-php/department.php');
          });
          $("#submit").click(function(e) {
            e.preventDefault();
             var cname = $('#cname').val();
             var depart = $('#depart').val();
             var postname = $('#postname').val();           
             $.post('ajax-php/add_cand.php',
              {cname:cname, depart:depart, postname:postname},
              function(data){
             alert(data);
             });
           });
        });
   </script>
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
         <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
             <nav id="navbar">
         <header>
            <p>Welcome <strong>ADMIN</strong></p>
         </header>
         <ul>
               <li><a href="inside-admin.php" class="active"><p>Home</p></a></li>   
               <li style="padding-left: 950px"><a href="includes/logout_admin.php?msg=logout"><b>LogOut</b></a></li>                             
         </ul>
      </nav>
      <div class="container">
         <?php
                     if (isset($_GET['msg']))
                      {
                        if ($_GET['msg']=='reg')
                         {
                          echo "registered already!";
                        }
                     }
         ?>
                        <h1> Data Table </h1>
                        <a href="inside-admin.php" class="btn btn-info btn-sm">Back</a> 
                        <button class="btn btn-info btn-sm pull-right" name="add" id="add" data-toggle="modal" data-target="#myModal">ADD</button> 
                        <br>
                        <table class="table table-bordered table-responsive text-center" id="edit-table">
                          <thead>
                               <tr>
                                   <th class="text-center">C_id</th>
                                  <th class="text-center"> Candidate_Name</th>
                                  <th class="text-center">Candidate_Department</th>
                                  <th class="text-center">Candidate_Post</th>
                                  <th class="text-center">Action</th>
                               </tr>
                          </thead>                        
       

       <!-- Trigger the modal with a button -->
<!-- <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Open Modal</button>
 -->
<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog modal-lg">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Add Candidate</h4>
      </div>
      <div class="modal-body">
        <form action="" method="POST">
             <label>Candidate Name: </label>
             <input name="cname" id="cname" type="text" class="form-control">
             <br>
              <label>Candidate department: </label>
              <select name="depart" id="depart" class="form-control">                 
              </select>
              <br>
              <label>Candidate Post: </label>
              <select name="postname" id="postname" class="form-control">
                 <option value="">Select</option>
              </select>
              <br>
              <button class="btn btn-success" id="submit" type="submit" name="submit">Submit</button>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div> 

 <?php
      include_once("includes/db.php");
      
      $sql = "SELECT * FROM post p JOIN candidate c ON c.p_id=p.p_id";
      $result = mysqli_query($conn, $sql);

      while($resultcheck = mysqli_fetch_assoc($result))
      {
        ?>
          <tr>
            <td><input type="text" disabled name="cid" class="cid" value="<?php echo $resultcheck['c_id']  ?>"></td>
            <td><input type="text" disabled name="cname" class="editt" value="<?php echo $resultcheck['c_name'] ?>"></td>
            <td><input type="text" disabled name="cdep" class="cdep" value="<?php echo $resultcheck['c_department'] ?>"></td>
            <td><input type="text" disabled name="pname" class="pname" value="<?php echo $resultcheck['p_name'] ?>"></td>
            <td>
                      <button class='btn btn-warning btn-edit'>Edit</button>
                      <button class='btn btn-warning btn-update'>Update</button>
                      <a onclick="return confirm('Are You Sure?')" href="candidate-data.php?idd=<?php echo $resultcheck['c_id']; ?>" class='btn btn-danger'>Delete</a>
                  </td>
         </tr> 
   <?php        
      }
       if (isset($_GET['idd']))
        {
          $idd = $_GET['idd'];
          $sql1 = "DELETE FROM  candidate where c_id = '$idd'";
          $result1 = mysqli_query($conn, $sql1); 
          if ($result1)
           {
            ?>
            <script type="text/javascript">
               alert("Dleted Successfully!");
               window.location.href='candidate-data.php';
            </script>
            <?php
          }
          else{
            ?>
               <script type="text/javascript">
               alert("Failed To Dlete!");
               window.location.href='candidate-data.php';
               </script> 
               <?php
          }
       }
?>
                             </table>
  
  </div>
         </div>
      </div>

</body>
</html>

       
      

