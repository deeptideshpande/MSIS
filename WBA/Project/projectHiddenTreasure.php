<?php
	session_start(); 
	include('projectVerify.php');
	$_SESSION['loggedIn']=1;
	header('location:projectMain.php');
?>
