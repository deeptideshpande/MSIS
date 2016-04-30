<html>
	<head>
		<title>Travel</title>
	</head>
	<body>

		<?php

			echo $_GET['username'];
			echo "<br>";

			echo $_GET['password'];
			echo "<br>";

			echo $_GET['firstname'];
			echo "<br>";

			echo $_GET['lastname'];
			echo "<br>";

			$url = $_GET['website'];
			$username = $_GET['username'];
			$firstname = $_GET['firstname'];
			$lastname = $_GET['lastname'];

			echo "<a href='$url'>$username$firstname$lastname</a>";
			echo "<br>";

			echo $_GET['gender'];
			echo "<br>";

			echo $_GET['age'];
			echo "<br>";

			echo $_GET['transport'];
			echo "<br>";

			$cnt = count($_GET['places']);
			for($i=0;$i<$cnt;$i++) {
				echo $_GET['places'][$i];
				echo ", ";
			}

		?>

		<form method="get" name="Travel"
		action="">

			Username <input type="text"
			name="username"><br>

			Password <input type="password"
			name="password"><br>

			First Name <input type="text"
			name="firstname"><br>

			Last Name <input type="text"
			name="lastname"><br>

			Website <input type="text"
			name="website"><br>

			Male <input type="radio"
			name="gender" value="01"><br>

			Female <input type="radio"
			name="gender" value="02" checked><br>

			Age Range <select name="age">
				<option value="01">0-15</option>
				<option value="02" selected>16-30</option>
				<option value="03">31-45</option> 
				<option value="04">46-60</option>
				<option value="05">61-75</option>
			</select><br>

			Mode Of Transport <select name="transport">
				<option value="01">Bike</option>
				<option value="02" selected>Car</option>
				<option value="03">Bus</option> 
			</select><br>

			Greece <input type="checkbox"
			name="places[]" value="01"><br>

			Italy <input type="checkbox"
			name="places[]" value="02"><br>

			Switzerland <input type="checkbox"
			name="places[]" value="03"><br>

			Israel <input type="checkbox"
			name="places[]" value="04"><br>

			Mexico <input type="checkbox"
			name="places[]" value="05"><br>

			<input type="submit" value="Go">

		</form>
		
		</body>
		
</html>

