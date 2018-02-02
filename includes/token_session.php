<?php 
 session_start();
 if (!(isset($_SESSION['token'])))
  {
 	header("Location: ./token.php?msg=false");
 	exit();
 }
