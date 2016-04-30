<?php
	if(!isset($_GET['messageId']) and !isset($_GET['sessionName']))
	{	die('Please provide messageId and sessionName');
	}

	$messageId=$_GET['messageId'];
	$sessionName=strtolower($_GET['sessionName']);

	$link=mysqli_connect('localhost','root','','whatsapp');

	$sql="SELECT messageId,name,message FROM messages WHERE messageId > $messageId AND sessionName = '$sessionName'";

	$results=mysqli_query($link,$sql);

	echo(!$results?die(mysqli_error($link)."<br>".$sql):"");

	$count=mysqli_num_rows($results);

	$response=array();

	for($i=0;$i<$count;$i++) {
		$row=mysqli_fetch_array($results);
		$response[$i]['messageId']=$row[0];
		$response[$i]['name']=$row[1];
		$response[$i]['message']=$row[2];
	}

	echo json_encode($response);

?>
