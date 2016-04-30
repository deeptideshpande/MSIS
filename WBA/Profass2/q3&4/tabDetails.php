<?php
	include('q3Connect.php');

	if(isset($_GET['tabId']) and $_GET['tabId']!='') {

		$tabId=$_GET['tabId'];

		$sql = "SELECT tabName,tabPrice,tabDescription,tabSize FROM tablet WHERE tabId = $tabId";

		$results=mysqli_query($link,$sql);

		echo (!$results?(mysqli_error($link)."<br>$sql"):"");
		
		while(list($tabName,$tabPrice,$tabDescription,$tabSize)=mysqli_fetch_array($results)) {

			echo "Tablet Name is $tabName.<br>";
			echo "Tablet Price is $tabPrice USD<br>";
			echo "Tablet Description is $tabDescription<br><br>";						

		}
		echo "<a href='writeReview.php?tabId=$tabId'>Please rate this product here</a><br>";
		
		$sql = "SELECT comments,rating,postTime FROM review WHERE tabId = $tabId";

		$results=mysqli_query($link,$sql);

		echo (!$results?(mysqli_error($link)."<br>$sql"):"");

		while(list($comments,$rating,$postTime)=mysqli_fetch_array($results)) {

			echo "Reviews: $comments<br>Posted at $postTime <br>";
			echo "Rating: $rating<br><br>";
		
		}
		
		
	}

?>