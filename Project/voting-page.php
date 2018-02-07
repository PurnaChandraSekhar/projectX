 <?php
   require_once "includes/session.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Mizoram University</title>
  <link rel="stylesheet" type="text/css" href="Bootstrap.css">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
   <link href="https://fonts.googleapis.com/css?family=Oxygen" rel="stylesheet">
   <script type="text/javascript" src="./js/jquery-3.2.1.min.js"></script>
   <script type="text/javascript" src="./js/script.js"></script>
   <link rel="stylesheet" href="index-style.css">

</head>
<style>
   .vote-hr {
     border-bottom: 1px solid #fff !important;
     padding: 1px;
     border-top: none;
     border-right:none;
     border-left: none; 
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
      <a class="navbar-brand" href="index.php">MZU</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="">Home <span class="sr-only">(current)</span></a></li>
        <li><a href="#">About us</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
          <li><a href="includes/logout.php"><strong>LogOut</strong></a></li>
      </ul>
     <!--  <ul class="nav navbar-nav navbar-right">
        <li><a href="Admin.php">Admin Login <i class="fa fa-user-circle" aria-hidden="true"></i></a></li>
      </ul> -->
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

 <header>
 	       <div class="jumbotron" id="choose">
              <div>
                <h2 class="text-center top-left" id="voting-header">Welcome <br> To <br><i class="fa fa-user-circle" aria-hidden="true"></i> Student's Voting Page <br> 2017</h2> 
             </div>
             <div>
               <marquee direction = "left"><font color="red"><h4><strong>PLEASE VOTE WHITHOUT ANY PRESSURE!</strong></h4></font></marquee>
             </div> 
         </div>
 </header>
           
           <?php
              include_once("includes/db.php");
           ?>

           <?php 
                     if (isset($_GET['msg']))
                      {
                        if ($_GET['msg']=='empty')
                         {
                          echo "<div class='alert alert-danger text-center'><h2>Fields Should Not Be Empty!</h2></div>";
                        }
                        elseif ($_GET['msg']=='success')
                         {
                          echo "<div class='alert alert-success text-center'><h2>You Have Successfully Submitted the Votes!</h2></div>";
                        }
                        elseif ($_GET['msg']=='done')
                         {
                          echo "<div class='alert alert-danger text-center'><h2>You Have Already submitted the votes</h2></div>";
                        }
                       
                     } 
                    
                     
           ?>

           <div class="container">
                <div class="row">
                   <div class="col-lg-12 col-md-8 col-sm-12">
                        <form action="vote-submit.php" name="form" method="POST">
                           <div class="form-group">
                            <hr>
                               <div class="col-lg-6" style="height: 200px"> <!--President Nominee start-->
                                  <div>
                                      <h1>President Nominees!</h1>
                                      <ul>
                                         <li><a href="candidates-info/purna.php" target="_blank" style="text-decoration: none; list-style-type:none;">Purna ChandraSekhar</a></li>
                                         <li><a href="candidates-info/noel.php" target="_blank" style="text-decoration: none; list-style: none;">Noel</a></li>
                                         <li><a href="candidates-info/hussain.php" target="_blank" style="text-decoration: none; list-style-type:none;">Hussain</a></li>
                                         <li><a href="candidates-info/manish.php" target="_blank" style="text-decoration: none; list-style-type:none;">Manish</a></li>
                                         <li><a href="candidates-info/tanuja.php" target="_blank" style="text-decoration: none; list-style-type:none;">Tanuja</a></li>
                                      </ul>

                                  </div>
                               </div>
                               <div class="col-lg-6"  style="height: 200px">
                                  <label><i class="fa fa-user-circle-o" aria-hidden="true"></i> President :</label>
                                  <select name="president" id="" class="form-control">
                                     <option value="">select candidate</option>
                                     <?php
                                            $p1 = "SELECT * FROM candidate WHERE p_id = '1' ";
                                            $result1 = mysqli_query($conn, $p1);
                                            while ($result = mysqli_fetch_assoc($result1))
                                             {
                                             ?>
                                                <option value="<?php echo $result['c_id']; ?>"><?php echo $result['c_name']; ?></option>
                                             <?php
                                             
                                            }
                                       ?>
                                  </select>
                               </div><!--President Nominee End-->
                               <hr class="vote-hr" >
                               <br>
                                <div class="col-lg-6" style="height: 200px"> <!--Vice President Nominee start-->
                                  <div>
                                      <h1>Vice President Nominees!</h1>
                                      <ul>
                                         <li><a href="candidates-info/john.php" target="_blank" style="text-decoration: none; list-style-type:none;">John Doe</a></li>
                                         <li><a href="candidates-info/argho.php" target="_blank" style="text-decoration: none; list-style-type:none;">Arghya Jyoti</a></li>
                                         <li><a href="candidates-info/shreeja.php" target="_blank" style="text-decoration: none; list-style-type:none;">Shreeja</a></li>
                                         <li><a href="candidates-info/marcus.php" target="_blank" style="text-decoration: none; list-style-type:none;">Marcus</a></li>
                                         <li><a href="candidates-info/ashok.php" target="_blank" style="text-decoration: none; list-style-type:none;">Ashok</a></li>
                                      </ul>
                                  </div>
                               </div>
                               <div class="col-lg-6" style="height: 200px">
                                  <label><i class="fa fa-user-circle-o" aria-hidden="true"></i> Vice President :</label>
                                  <select name="v_president" id="" class="form-control">
                                     <option value="" >select candidate</option>
                                     <?php
                                            $p1 = "SELECT * FROM candidate WHERE p_id = '2' ";
                                            $result1 = mysqli_query($conn, $p1);
                                            while ($result = mysqli_fetch_assoc($result1))
                                             {
                                             ?>
                                                <option value="<?php echo $result['c_id']; ?>"><?php echo $result['c_name']; ?></option>
                                             <?php
                                             
                                            }
                                       ?>
                                  </select>
                               </div><!--Vice President Nominee End-->
                               <br>
                               <hr class="vote-hr">
                                <div class="col-lg-6" style="height: 200px"> <!--Treasurer Nominee start-->
                                  <div>
                                      <h1>Treasurer Nominees!</h1>
                                      <ul>
                                         <li><a href="candidates-info/naru.php" target="_blank" style="text-decoration: none; list-style-type:none;">Narayan Sharma</a></li>
                                         <li><a href="candidates-info/shiv.php" target="_blank" style="text-decoration: none; list-style-type:none;">Shiv Nath Yadav</a></li>
                                         <li><a href="candidates-info/rohit.php" target="_blank" style="text-decoration: none; list-style-type:none;">Rohit</a></li>
                                         <li><a href="candidates-info/akash.php" target="_blank" style="text-decoration: none; list-style-type:none;">Akash</a></li>
                                      </ul>
                                  </div>
                               </div>
                               <div class="col-lg-6" style="height: 200px">
                                  <label><i class="fa fa-user-circle-o" aria-hidden="true"></i> Treasurer :</label>
                                  <select name="Treasurer" id="" class="form-control">
                                     <option value="" >select candidate</option>
                                     <?php
                                            $p1 = "SELECT * FROM candidate WHERE p_id = '3' ";
                                            $result1 = mysqli_query($conn, $p1);
                                            while ($result = mysqli_fetch_assoc($result1))
                                             {
                                             ?>
                                                <option value="<?php echo $result['c_id']; ?>"><?php echo $result['c_name']; ?></option>
                                             <?php
                                             
                                            }
                                       ?>
                                  </select>
                               </div><!--Treasurer Nominee End-->
                                <br>
                                <hr class="vote-hr">
                                <div class="col-lg-6" style="height: 200px"> <!--Public Relations Director Nominee start-->
                                  <div>
                                      <h1><b>PRD</b> Nominees!</h1>
                                      <ul>
                                         <li><a href="candidates-info/tharun.php" target="_blank" style="text-decoration: none; list-style-type:none;">Tharun Kumar</a></li>
                                         <li><a href="candidates-info/shivam.php" target="_blank" style="text-decoration: none; list-style-type:none;">Shivam</a></li>
                                         <li><a href="candidates-info/praveen.php" target="_blank" style="text-decoration: none; list-style-type:none;">Praveen</a></li>
                                         <li><a href="candidates-info/vimal.php" target="_blank" style="text-decoration: none; list-style-type:none;">Vimal</a></li>
                                         <li><a href="candidates-info/kamal.php" target="_blank" style="text-decoration: none; list-style-type:none;">Kamal</a></li>
                                      </ul>
                                  </div>
                               </div>
                               <div class="col-lg-6" style="height: 200px">
                                  <label><i class="fa fa-user-circle-o" aria-hidden="true"></i> Public Relations Director :</label>
                                  <select name="prd" id="" class="form-control">
                                     <option value="" >select candidate</option>
                                     <?php
                                            $p1 = "SELECT * FROM candidate WHERE p_id = '4' ";
                                            $result1 = mysqli_query($conn, $p1);
                                            while ($result = mysqli_fetch_assoc($result1))
                                             {
                                             ?>
                                                <option value="<?php echo $result['c_id']; ?>"><?php echo $result['c_name']; ?></option>
                                             <?php
                                             
                                            }
                                       ?>
                                  </select>
                               </div><!--Public Relations Director Nominee End-->
                               <hr class="vote-hr">
                               <br>
                                <div class="col-lg-6" style="height: 200px"> <!--General Secretary Nominee start-->
                                  <div>
                                      <h1>Gen. Secretary Nominees!</h1>
                                      <ul>
                                         <li><a href="candidates-info/mahesh.php" target="_blank" style="text-decoration: none; list-style-type:none;">Mahesh</a></li>
                                         <li><a href="candidates-info/rakesh.php" target="_blank" style="text-decoration: none; list-style-type:none;">Rakesh</a></li>
                                         <li><a href="candidates-info/komali.php" target="_blank" style="text-decoration: none; list-style-type:none;">Komali</a></li>
                                      </ul>
                                  </div>
                               </div>
                               <div class="col-lg-6" style="height: 200px">
                                  <label><i class="fa fa-user-circle-o" aria-hidden="true"></i> General Secretary :</label>
                                  <select name="g_sec" id="" class="form-control">
                                     <option value="" >select candidate</option>
                                     <?php
                                            $p1 = "SELECT * FROM candidate WHERE p_id = '5' ";
                                            $result1 = mysqli_query($conn, $p1);
                                            while ($result = mysqli_fetch_assoc($result1))
                                             {
                                             ?>
                                                <option value="<?php echo $result['c_id']; ?>"><?php echo $result['c_name']; ?></option>
                                             <?php
                                             
                                            }
                                       ?>
                                  </select>
                               </div><!--General Secretary Nominee End-->
                               <br>
                                <hr class="vote-hr">
                                <div class="col-lg-6" style="height: 200px"> <!--Joint Secretary Nominee start-->
                                  <div>
                                      <h1>Joint Secretary Nominees!</h1>
                                      <ul>
                                         <li><a href="candidates-info/soumya.php" target="_blank" style="text-decoration: none; list-style-type:none;">Soumya</a></li>
                                         <li><a href="candidates-info/ramya.php" target="_blank" style="text-decoration: none; list-style-type:none;">Ramya</a></li>
                                         <li><a href="candidates-info/tanya.php" target="_blank" style="text-decoration: none; list-style-type:none;">Tanya</a></li>
                                         <li><a href="candidates-info/prakash.php" target="_blank" style="text-decoration: none; list-style-type:none;">Prakash</a></li>
                                      </ul>
                                  </div>
                               </div>
                               <div class="col-lg-6" style="height: 200px">
                                  <label><i class="fa fa-user-circle-o" aria-hidden="true"></i> Joint Secretary :</label>
                                  <select name="j_sec" id="" class="form-control">
                                     <option value="" >select candidate</option>
                                     <?php
                                            $p1 = "SELECT * FROM candidate WHERE p_id = '6' ";
                                            $result1 = mysqli_query($conn, $p1);
                                            while ($result = mysqli_fetch_assoc($result1))
                                             {
                                             ?>
                                                <option value="<?php echo $result['c_id']; ?>"><?php echo $result['c_name']; ?></option>
                                             <?php
                                             
                                            }
                                       ?>
                                  </select>
                               </div><!--Joint Secretary Nominee End-->
                               <br>
                                <hr class="vote-hr">
                                 <div class="col-lg-6" style="height: 200px"> <!--Cultural Secretary Nominee start-->
                                  <div>
                                      <h1>Cultural Secretary Nominees!</h1>
                                      <ul>
                                         <li><a href="candidates-info/chandu.php" target="_blank" style="text-decoration: none; list-style-type:none;">Chandu</a></li>
                                         <li><a href="candidates-info/shruthi.php" target="_blank" style="text-decoration: none; list-style-type: none;">Shrithi</a></li>
                                         <li><a href="candidates-info/rajini.php" target="_blank" style="text-decoration: none; list-style-type:none;">Rajini</a></li>
                                         <!-- <li><a href="#" target="_blank" style="text-decoration: none; list-style-type:none;"></a></li> -->
                                         <!-- <li><a href="#" target="_blank" style="text-decoration: none; list-style-type:none;"></a></li> -->
                                      </ul>

                                  </div>
                               </div>
                               <div class="col-lg-6"  style="height: 200px">
                                  <label><i class="fa fa-user-circle-o" aria-hidden="true"></i> Cultural Secretary :</label>
                                  <select name="c_sec" id="" class="form-control">
                                     <option value="" >select candidate</option>
                                     <?php
                                            $p1 = "SELECT * FROM candidate WHERE p_id = '7' ";
                                            $result1 = mysqli_query($conn, $p1);
                                            while ($result = mysqli_fetch_assoc($result1))
                                             {
                                             ?>
                                                <option value="<?php echo $result['c_id']; ?>"><?php echo $result['c_name']; ?></option>
                                             <?php
                                             
                                            }
                                       ?>
                                  </select>
                               </div><!--Cultural Nominee End-->
                               <hr class="vote-hr" >
                               <br>
                               <div class="col-lg-6" style="height: 200px"> <!--Sports Secretary Nominee start-->
                                  <div>
                                      <h1>Sports Secretary Nominees!</h1>
                                      <ul>
                                         <li><a href="candidates-info/vijay.php" target="_blank" style="text-decoration: none; list-style-type:none;">Vijay</a></li>
                                         <li><a href="candidates-info/gandhi.php" target="_blank" style="text-decoration: none; list-style: none;">Gandhi</a></li>
                                         <li><a href="candidates-info/sumanth.php" target="_blank" style="text-decoration: none; list-style-type:none;">Sumanth</a></li>
                                         <li><a href="candidates-info/gautham.php" target="_blank" style="text-decoration: none; list-style-type:none;">Gautham</a></li>
                                         <!-- <li><a href="#" target="_blank" style="text-decoration: none; list-style-type:none;"></a></li> -->
                                      </ul>

                                  </div>
                               </div>
                               <div class="col-lg-6"  style="height: 200px">
                                  <label><i class="fa fa-user-circle-o" aria-hidden="true"></i> Sports Secretary :</label>
                                  <select name="s_sec" id="" class="form-control">
                                     <option value="" >select candidate</option>
                                     <?php
                                            $p1 = "SELECT * FROM candidate WHERE p_id = '8' ";
                                            $result1 = mysqli_query($conn, $p1);
                                            while ($result = mysqli_fetch_assoc($result1))
                                             {
                                             ?>
                                                <option value="<?php echo $result['c_id']; ?>"><?php echo $result['c_name']; ?></option>
                                             <?php
                                             
                                            }
                                       ?>
                                  </select>
                               </div><!--Sports Secretary Nominee End-->
                               <hr class="vote-hr" >
                               <br>
                               <div class="col-lg-6" style="height: 200px"> <!--Editor Nominee start-->
                                  <div>
                                      <h1>Editor Nominees!</h1>
                                      <ul>
                                         <li><a href="candidates-info/ramgopal.php" target="_blank" style="text-decoration: none; list-style-type:none;">Ram Gopal Varma</a></li>
                                         <li><a href="candidates-info/virat.php" target="_blank" style="text-decoration: none; list-style: none;">Virat</a></li>
                                         <li><a href="candidates-info/ram.php" target="_blank" style="text-decoration: none; list-style-type:none;">Ram</a></li>
                                         <!-- <li><a href="#" target="_blank" style="text-decoration: none; list-style-type:none;"></a></li>
                                         <li><a href="#" target="_blank" style="text-decoration: none; list-style-type:none;"></a></li> -->
                                      </ul>

                                  </div>
                               </div>
                               <div class="col-lg-6"  style="height: 200px">
                                  <label><i class="fa fa-user-circle-o" aria-hidden="true"></i> Editor :</label>
                                  <select name="editor" id="" class="form-control">
                                     <option value="" >select candidate</option>
                                     <?php
                                            $p1 = "SELECT * FROM candidate WHERE p_id = '9' ";
                                            $result1 = mysqli_query($conn, $p1);
                                            while ($result = mysqli_fetch_assoc($result1))
                                             {
                                             ?>
                                                <option value="<?php echo $result['c_id']; ?>"><?php echo $result['c_name']; ?></option>
                                             <?php
                                             
                                            }
                                       ?>
                                  </select>
                               </div><!--Editor Nominee End-->
                               <hr class="vote-hr" >
                               <br>
                               <button class="btn btn-success btn-lg" type="submit" name= "submit">Submit</button>
                               <br>
                           </div>
                        </form>
                   </div>
                </div>
           </div>
 <?php
       include_once "footer.php";
 ?>