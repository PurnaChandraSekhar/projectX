 <?php 
session_start();
if(!(isset($_SESSION['userid'])))
{
	header('Location: ./Admin.php?msg=false');
	exit();
}
 ?>
