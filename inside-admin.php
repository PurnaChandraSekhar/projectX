  <?php
        include_once "includes/admin_session.php"; //admin session
  ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Admin</title>
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
     background-image: url(bg_images/admin_bg.jpg);
     background-size: cover;
     background-repeat: no-repeat;
     position: fixed;
     width: 100%;
     height: 100%;
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
</style>
<body>
          <div class="row"> <!-- div starts-->
             <div class="col-lg-12 col-sm-8 col-xs-4">
                <nav id="navbar">
         <header>
            <p>Welcome <strong>ADMIN</strong></p>
         </header>
         <ul>
               <li><a href="#" class="active"><p>Home</p></a></li>      
                   <li><a href="#">Data</a>
                     <ul>
                       <li><a href="user-data.php">Users Data</a></li>
                       <li><a href="candidate-data.php">Candidates Data</a></li>    
                     </ul>
                   </li>                           
         </ul>
         <ul class="navbar-right" id="result">
            <li><a href="generating.php">Results</a></li>
            <li><a href="includes/logout_admin.php?msg=logout"><b>LogOut</b></a></li>
         </ul>  
      </nav>
             </div>
          </div> <!-- //1st div ends -->
 
<script
      src="https://code.jquery.com/jquery-3.2.1.js"
      integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE="
      crossorigin="anonymous">
</script>
<script 
       src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous">  
</script>
</body> <!-- //Body Ending -->
</html><!-- //HTML ends -->
 
