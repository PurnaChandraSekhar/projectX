<?php 
         include_once('../includes/db.php');

         $sql = "SELECT DISTINCT c_department FROM candidate";
         $result = mysqli_query($conn, $sql);

         while ($row=mysqli_fetch_assoc($result))
          {
         	?>
	 
          <option value="<?php echo $row['c_department']; ?>"><?php echo $row['c_department']; ?></option>
         	
          <?php
         }
  ?>