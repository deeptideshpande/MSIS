<?php 
	session_start(); 
?>
<html> 
	<head> 
			<title>Login Page</title> 
			
	</head>
	
	<body>
	
		<br> 
	
		<h1><div style="margin-left: 30px" ><left><font color="#3300CC" size="6"><b>Sign In!!</b></font></left></div></h1>
		
		<div style="margin-left: 30px" ><form method='post' name="projectLogin" action=''>

			<font size="4" color="#330099">Username <input type='text' name='username'></font><br>
			<font size="4" color="#330099">Password <input type='password' name='password'></font><br>
	
			<br>
		
			<input type='submit' value='Go'>
	
		</form></div>
			
		<?php
		
			include('connectCharityDB.php');
			include('../secret/settings.conf');
			if(isset($_POST['username']) and isset($_POST['password']) and $_POST['username']!="" and $_POST['password']!=""){
	
				$username = $_POST['username'];
				$password = sha1($_POST['password']);

				$sql="SELECT userId FROM users WHERE username='$username' AND password='$password'";
		
				$results=mysqli_query($link,$sql);
		
				echo (!$results?die(mysqli_error($link)."<br>".$sql):"");
		
				$count = mysqli_num_rows($results);
		
				if($count>0){
					$_SESSION['loggedIn']=1;
					list($userId)=mysqli_fetch_array($results);
					$timeOfLogin = time();
					$hash=sha1($secret.$userId.$username.$timeOfLogin);
					$expirationTime = strtotime("+10 years");
					setcookie('userId',$userId,$expirationTime);
					setcookie('username',$username,$expirationTime);
					setcookie('timeOfLogin',$timeOfLogin,$expirationTime);
					setcookie('hash',$hash,$expirationTime);
					header('location:projectHiddenTreasure.php');
				}
				else {
					
					echo "<div style='margin-left: 30px' ><font size='4' color='#330099'>Username and password do not match. Please try again!!</font></div>";
					
				}
			}
			
		?>				
		
	</body>

</html>