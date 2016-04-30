<?php

include('q2Connect.php');

if(isset($_POST['username']) and isset($_POST['password']) and isset($_POST['fName']) and isset($_POST['lName'])){
 
	$username=$_POST['username'];
	$password=sha1($_POST['password']);
	$fName=$_POST['fName'];
	$lName=$_POST['lName'];

	$sql="INSERT INTO customer(fName,lName,password,username) VALUES('$fName','$lName','$password','$username')";
	$results=mysqli_query($link,$sql);


	echo (!$results?(mysqli_error($link)):"");

}

?>

<form method="POST" action="">

	Username <input type="text"	name="username"><br>

	Password <input type="password"	name="password"><br>

	First Name <input type="text"	name="fName"><br>

	Last Name <input type="text"	name="lName"><br>
	
	<input type="submit" value="Submit">


</form>

