<?php
	include('q2Connect.php');
	include('../secret/settings.conf');
	if(isset($_POST['username']) and isset($_POST['password']) and $_POST['username']!="" and $_POST['password']!=""){
	
		$username = $_POST['username'];
		$password = sha1($_POST['password']);

		$sql="SELECT custId FROM customer WHERE username='$username' AND password='$password'";
		
		$results=mysqli_query($link,$sql);
		
		echo (!$results?die(mysqli_error($link)."<br>".$sql):"");
		
		$count = mysqli_num_rows($results);
		
		if($count>0){
			list($userId)=mysqli_fetch_array($results);
			$timeOfLogin = time();
			$hash=sha1($secret.$userId.$username.$timeOfLogin);
			$expirationTime = strtotime("+10 years");
			setcookie('userId',$userId,$expirationTime);
			setcookie('username',$username,$expirationTime);
			setcookie('timeOfLogin',$timeOfLogin,$expirationTime);
			setcookie('hash',$hash,$expirationTime);
			header('location:q2HiddenTreasure.php');
		}
	}
?>
<form method='post' action=''>

	Username<input type='text' name='username'><br>
	Password<input type='password' name='password'><br>
	
	<input type='submit' value='Go'>
	
</form>