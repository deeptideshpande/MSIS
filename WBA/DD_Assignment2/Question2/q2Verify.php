<?php
	include('../secret/settings.conf');
	if(isset($_COOKIE['userId']) and isset($_COOKIE['username']) and isset($_COOKIE['timeOfLogin']) and isset($_COOKIE['hash'])){
		$userId=$_COOKIE['userId'];
		$username = $_COOKIE['username'];
		$timeOfLogin = $_COOKIE['timeOfLogin'];
		$hashCookie = $_COOKIE['hash'];
		$hashCalculated=sha1($secret.$userId.$username.$timeOfLogin);
		if($hashCookie!=$hashCalculated){
			header('location:q2Login.php');
			exit;
		}
	}
	else {
		header('location:q2Login.php');
		exit;
	}
?>
