<?php
	session_start();
	setcookie('userId','',strtotime('-1 day'));
	setcookie('userName','',strtotime('-1 day'));
	setcookie('timeOfLogin','',strtotime('-1 day'));
	setcookie('hash','',strtotime('-1 day'));
	session_unset(); 
	header('location:projectMain.php');
?>