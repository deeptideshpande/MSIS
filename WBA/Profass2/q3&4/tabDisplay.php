<?php

	include('q3Connect.php');

	$sql="SELECT tabId,tabName,tabPrice,tabImage FROM tablet";
	
	$results=mysqli_query($link,$sql);
	
	echo (!$results?(mysqli_error($link)):"");

	while(list($tabId,$tabName,$tabPrice,$tabImage)=mysqli_fetch_array($results)){

		echo "Tablet Name is <a href='tabDetails.php?tabId=$tabId'>$tabName</a><br><img src='images/$tabImage'><br>Tablet Price is $tabPrice<br><br>";
	}

?>

