
  <?php
             include_once "header.php"; //includes header
  ?>
 	      <div class="container">
 	      	 <div class="jumbotron">
 	      	 	  <h1><i class="fa fa-user-circle" aria-hidden="true"></i> Welcome back Admin!</h1>
 	      	 </div>
                        <?php //php comment starts
                             if (isset($_GET['login'])) 
                              {
                                 if ($_GET['login']== 'error')
                                  {
                                    echo "<h2 class='alert alert-danger text-center'>Enter valid details</h2>";
                                  }
                              }
                               if (isset($_GET['msg']))
                                {
                                   if ($_GET['msg']== 'false')
                                  {
                                    echo "<div class=\"alert alert-danger text-center \">You Must Be Logged in To View That Page!</div>";
                                  }
                                   elseif ($_GET['msg']=='logout')
                                  {
                                    echo "<div class=\"alert alert-info text-center\">You Have Successfully Logged Out!</div>";
                                  }
                                }
                        ?> 
                 <form class="form-group" action="includes/admin-login.php" method="POST"> 
                	  <div>
                	  	 <label for="Auser"><i class="fa fa-user-circle" aria-hidden="true"></i> Administrator:</label>
                	  	 <input type="text" class="form-control" id="Auser" name="admin" placeholder="Admin_Username">
                	  </div> <br> 
                	  <div>
                	  	 <label for="Apass"><i class="fa fa-key" aria-hidden="true"></i> Password:</label>
                	  	 <input type="Password" id="Apass" class="form-control" name="pwd" placeholder="Password">
                	  </div><br> // added a break 
                	  <input class="btn btn-lg btn-success" type="submit" value="login" name="login">
                 </form>
 	      </div>
 <?php
        include_once "footer.php";
 ?>
