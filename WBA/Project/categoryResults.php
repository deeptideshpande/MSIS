<?php
	include('connectCharityDB.php');

	if(isset($_GET['categoryId']) and $_GET['categoryId']!='') {

		$categoryId=$_GET['categoryId'];

		$sql = "SELECT charities.charityId,charityName,rank,rating,comments FROM charities, rating WHERE charities.charityId = rating.charityId and charities.categoryId = $categoryId";

		$results=mysqli_query($link,$sql);

		echo (!$results?(mysqli_error($link)."<br>$sql"):"");
		
		echo "<font size='5' color='#3300CC'><p><b>Search Results</b></p></font>";

		
		while(list($charityId,$charityName,$rank,$rating,$comments)=mysqli_fetch_array($results)) {

			echo "<font size='4'><a href='charityDetails.php?charityId=$charityId' STYLE='text-decoration: none; color : #330099'>$charityName</a></font><br>";
			echo "<font size='3'>Rank: $rank</font><br>";
			echo "<font size='3'>Reviews: $comments</font><br>";
			echo "<font size='3'>Rating: $rating</font><br><br>";
					
		}
						
	}

?>