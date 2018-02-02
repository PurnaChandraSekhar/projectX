 <?php
       include_once('header.php');
 ?> 
        <form action="includes/token_accept.php" method="POST">
        	<div class="form-group">
        	 <div class="container">
                 <?php
              if (isset($_GET['msg']))
               {
                 if ($_GET['msg'] == 'mismatch')
                  {
                   echo "<div class='alert alert-danger text-center'><h3>Enter Valid Token!</h3></div>";
                 }
                 elseif ($_GET['msg'] == 'empty')
                  {
                   echo "<div class='alert alert-danger text-center'><h3>Field Should Not Be Empty!</h3></div>";
                 }
                  elseif ($_GET['msg'] == 'false')
                  {
                    echo "<div class='alert alert-danger text-center'> You Must Enter Token to view that page!</div>";
                  }
              }
       ?>
	       	     <div class="jumbotron text-center ">
	       	 	 <label>Enter The Token :</label>
	             <input type="text" name="token" placeholder="Enter_Token" class="form-control">
	             <br>
	             <button class="btn btn-lg btn-success" type="submit" name="submit">Submit</button>
       	         </div>
             </div>
        	</div>
        </form>

  <?php
             include_once "footer.php";
  ?>   