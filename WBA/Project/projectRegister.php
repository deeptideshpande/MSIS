<html> 
	<head> 
			<title>Register Page</title> 
			
	</head>
	
	<body>
	
		<br> 
	
		<p><div style="margin-left: 30px" ><left><font color="#3300CC" size="5"><b>We are so happy to have you on board!!</b></font></left></div></p>
			
		<?php

		include('connectCharityDB.php');

		if(isset($_POST['username']) and isset($_POST['password']) and $_POST['username']!="" and $_POST['password']!=""){
 
			$username=$_POST['username'];
			$password=sha1($_POST['password']);

			$sql="INSERT INTO users(username,password) VALUES('$username','$password')";
			
			$results=mysqli_query($link,$sql);
			
			header('location:projectLogin.php');

			echo (!$results?(mysqli_error($link)):"");
			
		}

		?>

		<div style="margin-left: 30px" ><left><form method="post" name="projectRegister"
		action="">

			<font size="4" color="#330099">Username <input type="text"
			name="username"></font><br><br>

			<font size="4" color="#330099">Password <input type="password"
			name="password"></font><br><br>
			
			<font size="4" color="#330099">First Name <input type="password"
			name="password"></font><br><br>
			
			<font size="4" color="#330099">Last Name <input type="password"
			name="password"></font><br><br>
			
			<font size="4" color="#330099">Gender<br>Female <input type="radio"
			name="gender" value="female"><br>

			<font size="4" color="#330099">Male <input type="radio"
			name="gender" value="male"><br>
			
			<font size="4" color="#330099">Prefer not to answer <input type="radio"
			name="gender" value="No Answer"><br>
	
			<input type="submit" value="Go">

		</form></left></div>

	</body>
	
</html>
