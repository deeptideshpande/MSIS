<?php

	include('q3Connect.php');
	if(!isset($_GET['tabId']) or $_GET['tabId']!='') {
		die('Kindly provide tabId as get variable in the url');
	}
	$tabId=$_GET['tabId'];

	if(isset($_POST['comments']) and isset($_POST['ratings']) and $_POST['comments']!="" and $_POST['ratings']!=""){
		$comments=$_POST['comments'];
		$ratings=$_POST['ratings'];
		$postTime=time();

		$sql="INSERT INTO review(comments,rating,tabId,postTime) VALUES('$comments',$ratings,$tabId,$postTime)";
	
		$results=mysqli_query($link,$sql);

		echo (!$results?(mysqli_error($link)."<br>$sql"):"");

		header('location:tabDetails.php?tabId=$tabId');
		exit;

	}

?>

<form method="post" name="writeReview" action="">

	Comments <textarea cols="40" rows="4" name="comments">
			</textarea><br>

	Ratings <select name="ratings">
				<option value="1">1</option>
				<option value="2">2</option>	
				<option value="3">3</option> 
				<option value="4">4</option>
				<option value="5">5</option>
			</select><br>
			
	<input type="submit" value="Submit">
</form>

