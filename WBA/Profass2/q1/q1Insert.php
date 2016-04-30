<?php

if(isset($_GET['country']) and isset($_GET['capital']) and isset($_GET['continent'])){
 
	$country=$_GET['country'];
	$capital=$_GET['capital'];
	$continent=$_GET['continent'];

	$link = mysqli_connect('localhost','root','','country') or die(mysqli_error($link));
	
	$sql="SELECT treatment_id,treatment_name FROM treatment";


	$sql="INSERT INTO capital(continent,country,capital) VALUES('$continent','$country','$capital')";
	$results=mysqli_query($link,$sql);


	echo (!$results?(mysqli_error($link)):"");

}

?>

<form method="get" action="">

	Country <input type="text"	name="country"><br>

	Capital <input type="text"	name="capital"><br>

	Continents <select name='continent'>
		<option value="01">North America</option>
		<option value="02">South America</option>
		<option value="03">Australia</option> 
		<option value="04">Africa</option>
		<option value="05" selected>Asia</option>
		<option value="06">Antartica</option> 
		<option value="07">Europe</option> 
		</select>
	
	<input type="submit" value="Submit">


</form>
