<?php

include('q2Connect.php');

if(isset($_GET['username']) and isset($_GET['password']) and isset($_GET['fName']) and isset($_GET['lName'])){
 
	$username=$_GET['username'];
	$password=sha1($_GET['password']);
	$fName=$_GET['fName'];
	$lName=$_GET['lName'];

	$sql="INSERT INTO customer(fName,lName,password,username) VALUES('$fName','$lName','$password','$username')";
	$results=mysqli_query($link,$sql);


	echo (!$results?(mysqli_error($link)):"");

}

?>

<form method="get" name="q2Insert"
action="">

	Username <input type="text"
	name="username"><br>

	Password <input type="password"
	name="password"><br>

	First Name <input type="text"
	name="fName"><br>

	Last Name <input type="text"
	name="lName"><br>
	
	<input type="submit" value="Submit">


</form>

