<?php 
session_start();
if(isset($_SESSION['user_email'])) {
	session_unset($_SESSION['user_email']);
	session_destroy();
	header('location:account.php');
 }

?>