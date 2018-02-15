 <?php
            include_once "includes/token_session.php";
             include_once "header.php";
  ?>  
	  <div class="container well">
	  	     <div class="row">
	  	     	 <div class="col-lg-12 col-md-10 col-sm-8 col-xs-12">
	  	     	  <div class="jumbotron text-center" id="register">
	  	    	     <h2 id="details"><i class="fa fa-graduation-cap" aria-hidden="true"></i> Fill The Below Details <br>To <br><strong>Register!</strong>
	  	    	     </h2>                       
	  	          </div>
          <?php
                  if (isset($_GET['msg']))
                   {
                  	  if ($_GET['msg'] == 'rpattern')
                  	   {
                  	  	  echo "<div class='alert alert-danger'>Enter correct Roll number format <small>Example: IT-14-99</small></div>";
                  	   }
                  	  elseif ($_GET['msg']== 'Roll')
                  	   {
                  	  	  echo "<div class='alert alert-danger'>Roll number already Registered</div>";
  	  	  
                  	   }
                  	    elseif ($_GET['msg']== 'phn')
                  	   {
                  	  	  echo "<div class='alert alert-danger'>Phone number must contain 10 digits!</div>";
                  	  	  
                  	   }
                  	  elseif ($_GET['msg'] == 'user')
                  	   {
                  	  	  echo "<div class='alert alert-danger'>Username Already registered!</div>";
                  	   }
                  	   elseif ($_GET['msg'] == 'empty')
                  	   {
                  	  	  echo "<div class='alert alert-danger'>Field Should Not Be Empty!</div>";
                  	   }
                  	 
                   }
          ?>         
	  <form action ="includes/reg.php" method="POST" name="myform" > 
	  	 	  <div class="form-group"> <!-- //Bootstrap Form Group class starting! -->
	  	 	  	 <div>
	  	 	  	 	<label><i class="fa fa-user" aria-hidden="true"></i> First Name:</label>
	  	 	  	    <input type="text" id="f_name" name="firstname" class="form-control" placeholder="firstname" >
	  	 	  	    <p class="msg"></p>
	  	 	  	 </div> <br>
	  	 	  	 <div>
	  	 	  	 	<label><i class="fa fa-user" aria-hidden="true"></i> Last Name:</label>
	  	 	  	    <input type="text" id="l_name" name="lastname" class="form-control" placeholder="Lastname" >
	  	 	  	    <p class="msg1"></p>
	  	 	  	 </div> <br>
	  	 	  	  <div>
	  	 	  	 <label><i class="fa fa-user" aria-hidden="true"></i> Roll No:</label>
	  	 	  	    <input type="text" id="roll" name="roll-no" class="form-control" placeholder="Roll-number" >
	  	 	  	    <p class="msg2"></p>
	  	 	  	 </div> <br>
	  	 	  	 <div>
	  	 	  	 	 <label><i class="fa fa-id-badge" aria-hidden="true"></i> UserName:</label>
	  	 	  	 	 <input type="text" class="form-control" name="username" placeholder="Username" >
	  	 	  	 </div> <br>
	  	 	  	 <div class="dropdown" >
	  	 	  	 	<label><i class="fa fa-building" aria-hidden="true"></i> Department :</label>
	  	 	  	 	<select  name="Department" class="form-control btn-primary" > 
                       <option value="">Select Department</option> 
                       <option value="IT">IT</option> 
                       <option value="CE">CE</option>
                       <option value="ECE">ECE</option>
                       <option value="EE">EE</option>
                       <option value="CIVIL">CIVIL</option>
                    </select>
	  	 	  	 </div> <br>
	  	 	  	 <div>
	  	 	  	 <label><i class="fa fa-phone" aria-hidden="true"></i> Phone Number:</label>
	  	 	  	 	 <input type="text" class="form-control"  name="phn" placeholder="Phone_Number" >
	  	 	  	 </div>	<br>  	 	  	 	 	  	
	  	 	  	 <div>
	  	 	  	 	 <label><i class="fa fa-key" aria-hidden="true"></i> Password:</label>
	  	 	  	 	 <input type="password" class="form-control"  name="password" placeholder="Password" >
	  	 	  	 </div> <br> 	  	 	  	  
	  	 	  	  <div>
	  	 	  	  <button class="btn btn-md btn-success" type="submit" name="submit"><i class="fa fa-sign-in" aria-hidden="true"></i> SUBMIT</button>	  	  	 	 	  	
	  	 	      </div>
	  </form>  
	  	     	 </div><!-- //Bootstrap form group class ending!! -->
	  	     </div>
	  	 </div>
	  </div>
 <?php
             include_once "footer.php";
  ?> 