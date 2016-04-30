<?php

	include('q3Connect.php');

	if(isset($_GET['comments']) and isset($_GET['ratings']) and $_GET['comments']!="" and $_GET['ratings']!=""){
	
		$tabId = $_GET['tabId'];
		$comments=$_GET['comments'];
		$ratings=$_GET['ratings'];

		$sql="INSERT INTO review(comments,rating,tabId) VALUES('$comments',$ratings,$tabId)";
	
		$results=mysqli_query($link,$sql);

		echo (!$results?(mysqli_error($link)."<br>$sql"):"");

	}

?>

<form method="get" name="writeReview"
action="">

	Comments <textarea cols="40" rows="4" name="comments">
			</textarea><br>

	Ratings <select name="ratings">
				<option value="1">1</option>
				<option value="2">2</option>	
				<option value="3">3</option> 
				<option value="4">4</option>
				<option value="5">5</option>
			</select><br>
			
	<input type="hidden" name= "tabId" value=" <?php print $_GET['tabId']; ?>">		
	
	<input type="submit" value="Submit">


</form>

