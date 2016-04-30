<html> 
	<body>
	
		<?php
		
		include('connectWatsapp.php');
		
		if(isset($_GET['sessionName']) and isset($_GET['name']) and isset($_GET['message']) and $_GET['sessionName']!="" and $_GET['name']!="" and $_GET['message']!=""){
 
			$sessionName=$_GET['sessionName'];
			$name=$_GET['name'];
			$message=$_GET['message'];

			$sql="INSERT INTO messages(sessionName,name,message) VALUES('$sessionName','$name','$message')";
			
			$results=mysqli_query($link,$sql);
			
			echo (!$results?(mysqli_error($link)):"");
			
			$affected=mysqli_affected_rows($link);
			
			if($affected == 1){
			   echo 'true';
			} else {
			   echo 'false';
			}
		}

		?>

		<form method="get" name="insert"
		action="">

			Session Name <input type="text"
			name="sessionName"><br>

			Name <input type="text"
			name="name"><br>
			
			Message <input type="text"
			name="message"><br>
				
			<input type="submit" value="Go">

		</form>

	</body>
	
</html>
