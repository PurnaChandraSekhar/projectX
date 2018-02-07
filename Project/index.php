<?php 
     session_start();
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Mizoram University</title>
	<link rel="stylesheet" type="text/css" href="Bootstrap.css">
	 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	 <link href="https://fonts.googleapis.com/css?family=Oxygen" rel="stylesheet">
	 <link rel="stylesheet" href="index-style.css">

</head>
<style>
  .carousel-inner {
      width:100%;
      height: 620px !important;
   }
</style>
<body>
	     <div class="container">
	     	 <nav class="navbar navbar-inverse">

         <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="main.php">MZU</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="index.php">Home <span class="sr-only">(current)</span></a></li>
        <li><a href="#about">About us</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="Admin.php">Admin Login <i class="fa fa-user-circle" aria-hidden="true"></i></a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
         <div class="jumbotron" id="background">
   	         <div class="container text-center">
                 <h1> Welcome To <br> Student's Voting System.</h1>
                  <marquee direction="left"><h3> Choose The Right Person Of You're Choice.</h3></marquee>
             </div>   
         </div>
      <div> 

                  <?php
                            if (isset($_GET['msg']))
                             {
                               if ($_GET['msg']=='error') 
                               {
                                  echo "<div class=\"alert alert-danger text-center\"><strong>Enter Valid Details!<small>Weather you're Rollno or password is incorrect!</small></strong></div>"; 
                               }
                               elseif ($_GET['msg']=='empty') 
                               {
                                  echo "<div class=\"alert alert-danger text-center\"><strong>Fields Should Not Be Empty!</strong></div>"; 
                               }
                                elseif ($_GET['msg']=='logout') 
                               {
                                  echo "<div class=\"alert alert-info text-center\">You Have Successfully Logged Out!</div>"; 
                               }
                                elseif ($_GET['msg']=='false') 
                               {
                                  echo "<div class=\"alert alert-danger text-center\">You Must Be Logged in To View That Page!</div>"; 
                               }

                             } 
                            
                  ?>
                  <?php
                                   if (isset($_GET['msg'])) {
                                      if ($_GET['msg']== 'success') {
                                        echo "<div class='alert alert-success text-center'><h2>Registration has Done Successfully!</h2></div>";
                                      }
                                   }
                  ?>
      	 <form action="includes/user-login.php" method="POST">
      	 	 <div class="form-group">              
                	<label for="inputroll"><i class="fa fa-id-badge" aria-hidden="true"></i> Roll_No :</label>
      	 	 	    <input type="text" class="form-control"  id="inputroll" name="roll_no" placeholder="Roll_no">               
      	 	 </div>
      	 	 <div class="form-group">      	 	 	
      	 	 		<label for="inputpassword1"><i class="fa fa-key" aria-hidden="true"></i> Password :</label>
      	 	 	    <input type="Password" class="form-control" id="inputpassword1" name="pwd" placeholder="Password">    	 	 	
    	 	 </div> <br>
              <input class="btn btn-lg btn-success" type="submit" value="Login" name="login">

      	 	 <div class="checkbox ">
      	 	   <p> Not Registered Yet? click the Below Link! to Register</p>
              <div btn-group>
                 <a href="token.php" class="btn btn-md btn-info"><i class="fa fa-graduation-cap" aria-hidden="true"></i> Student's Registration</a>
              </div>
      	 	 </div>
      	 	 
      	 </form>     	 
      </div>
        </div> 
<script
  src="https://code.jquery.com/jquery-3.2.1.js"
  integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE="
  crossorigin="anonymous"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>
</html>