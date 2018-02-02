<?php 
         include_once('../includes/db.php');

         $sql = "SELECT * FROM post";
         $result = mysqli_query($conn, $sql);

         while ($row=mysqli_fetch_assoc($result))
          {
         	?>
	 
          <option value="<?php echo $row['p_id']; ?>"><?php echo $row['p_name']; ?></option>
         	
          <?php
         }
  ?>