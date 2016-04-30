<?php 
	session_start(); 
?>
<html> 
	<head> 
			<title>Main Page</title>
			

	</head>
	
	<body>
		
		<h1><center><font size="8" color="#3300CC"><b>Rate My Charity</b></font></center></div></h1>
		
		<center><img border="0" src="download.jpeg" width="204" height="128"></center>
				
		<br>
				
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<font size="5" color="#330099"><i>Rate my charity allows you to rate your favorite charities and also leave feedback about them.</i></font><br>
				
		<br>
		
		<?php
			if (isset($_SESSION['loggedIn']) and $_SESSION['loggedIn']==1) {
				echo"<div style='margin-left: 590px' align='left'><font size='4'><a href='projectLogout.php?' STYLE='text-decoration: none; color : #330099'>Log Out</a></font></div>";
			}
			else {
				echo"<div style='margin-left: 590px' align='left'><font size='4'><a href='projectLogin.php?' STYLE='text-decoration: none; color : #330099'>Sign In</a></font></div>";

			}
      	?>
		
		<!--<div style="margin-left: 590px" align="left"><font size="4"><?php echo "<a href='projectLogin.php?' STYLE='text-decoration: none; color : #330099'>Sign In</a>"; ?></font></div>--!>
		 
		<div style="margin-left: 530px" align="left"><font size="4" color="#330099"> New User? <?php echo "<a href='projectRegister.php?'  STYLE='text-decoration: none; color : #330099'>Register here</a>"; ?></font></div>		

		<br>
		
		<div style="margin-left: 360px" align="left"><form method="post" name="search"
		action="">

		<font size="4" color="#330099">Search</font> <input type="text"
		name="term" size="80" height="100" >

		<input type="submit" value="Go">

		</form></div>
		
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<font size="5" color="#3300CC"><b>Top 5 Charities</b></font></div>
		
		

		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<font size="5" color="#3300CC"><b>Browse by Category</b></font></div>	
					
		<?php
	
			include('connectCharityDB.php');

			$sql="SELECT charityId,charityName FROM charities ORDER BY rank LIMIT 0, 5";
	
			$results=mysqli_query($link,$sql);
	
			echo (!$results?(mysqli_error($link)):"");
			
			echo "<ul style='float:left;'>";	

			while(list($charityId,$charityName)=mysqli_fetch_array($results)){

				echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					  <li style='margin-left: 230px'><a href='charityDetails.php?charityId=$charityId' STYLE='text-decoration: none; color : #330099'>$charityName</a>";
			}
			
			echo "</ul>";
			
		?>
		
		<?php
			
			$sql="SELECT categoryId,categoryName FROM category";
	
			$results=mysqli_query($link,$sql);
	
			echo (!$results?(mysqli_error($link)):"");
			
			echo "<ul style='float:right;'>";

			while(list($categoryId,$categoryName)=mysqli_fetch_array($results)){

				echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					  <li style='margin-right: 110px'><a href='categoryResults.php?categoryId=$categoryId' STYLE='text-decoration: none; color : #330099'>$categoryName</a>";
			}
			
			echo "</ul>";

		?>		
			
		

	</body>

</html>