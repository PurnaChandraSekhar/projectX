 <?php 
         require_once "includes/admin_session.php";
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Admin-results</title>
   <link rel="stylesheet" type="text/css" href="Bootstrap.css">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
   <link href="https://fonts.googleapis.com/css?family=Oxygen" rel="stylesheet">
   <script type="text/javascript" src="./js/jquery-3.2.1.min.js"></script>
   <script type="text/javascript" src="./js/script.js"></script>
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
   #result {
     padding-right: 20px;
   }
   .carousel-inner {
      width:100%;
      height: 620px !important;
   }
   #table th {
    background-color: #4CAF50;
    color: black;
   }
</style>
<body>
          <div class="row">
             <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 container-fluid">
                <nav id="navbar">
         <header>
            <p>Welcome <strong>ADMIN</strong></p>
         </header>
         <ul>
               <li><a href="inside-admin.php" class="active"><p>Home</p></a></li>                         
         </ul>
         <ul style="padding-left: 1060px">
            <li><a href="includes/logout_admin.php?msg=logout"><strong>LogOut <i class="fa fa-power-off" aria-hidden="true"></i></strong></a></li>
         </ul>
      </nav>

        <div class="container well-sm">
           <table class="table table-responsive table-hover table-bordered" id="table">
               <thead class="thead-inverse">
                 <tr>
                   <th colspan="3"><marquee direction="left"><strong><h3 style="color: white;">ELECTION RESULTS</h3></strong></marquee></th>
                 </tr>
                   <tr style="font-size: 20px;">
                     <th class="text-center"><b>Post Name</b></th>
                     <th class="text-center"><b>Candidate Name</b></th>
                     <th class="text-center"><b>Total Number Of Votes</b></th>
                   </tr>
               </thead>
               <?php
                              require_once "includes/db.php";
                             $sql = "SELECT COUNT(user_id) AS Total_Votes,c.c_name,p.p_name
                                    FROM votes v JOIN candidate c ON v.c_id=c.c_id JOIN post p ON p.p_id=c.p_id   
                                    GROUP BY v.c_id order by p.p_id";
                             $result = mysqli_query($conn, $sql);
                          while ($row = mysqli_fetch_assoc($result))
                          {
                             ?>
                             <tr>
                               <td class="text-center">
                                 <strong><?php echo $row['p_name'];?></strong>
                               </td>
                               <td class="text-center">
                                 <strong><?php echo $row['c_name'];?></strong>
                               </td>
                               <td class="text-center">
                                 <strong><?php echo $row['Total_Votes'];?></strong>
                               </td>
                             </tr>
                             <?php
                          }                             
               ?>  
          </table>   
                </div>
             </div>
          </div>
           
 
<script 
  src="https://code.jquery.com/jquery-3.2.1.js"
  integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE="
  crossorigin="anonymous"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>
</html>