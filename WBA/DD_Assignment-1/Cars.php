<html>
	<head>
		<title>Car Geeks</title>
	</head>

	<body>
		<h1><b>Car Geeks</b></h1>

		<?php

			echo $_GET['name'];
			echo "<br>";

			echo $_GET['address'];
			echo "<br>";

			echo $_GET['email'];
			echo "<br>";

			echo $_GET['crazy'];
			echo "<br>";

			echo $_GET['model'];
			echo "<br>";

			echo $_GET['favoritecar'];
			echo "<br>";

			$cnt = count($_GET['updated']);
			for($i=0;$i<$cnt;$i++) {
				echo $_GET['updated'][$i];
				echo ", ";
			}

			echo "<br>";
			echo $_GET['receive'];
			echo "<br>";

		?>

		<form method="get" name="Cars"
		action="">

			Name <input type="text"
			name="name"><br>

			Address <textarea cols="40" rows="4" name="address">
			</textarea><br>

			Email Address <input type="text"
			name="email"><br>

			Are you crazy about cars?:  
			Yes <input type="radio"
			name="crazy" value="01">

			No <input type="radio"
			name="crazy" value="02" checked><br>

			Which model do you like the most?: <select name="model">
				<option value="01">Mercedes</option>
				<option value="02">Audi</option>
				<option value="03" selected>Volkswagen</option> 
				<option value="04">Toyota</option>
				<option value="05">Ford</option>
			</select><br>

			Describe about your favorite car: <textarea cols="80" rows="8" name="favoritecar">
			</textarea><br>

			How do you keep updated about latest innovations in cars?<br>
			Magazines <input type="checkbox"
			name="updated[]" value="01"><br>

			Television <input type="checkbox"
			name="updated[]" value="02"><br>

			Newspaper <input type="checkbox"
			name="updated[]" value="03"><br>

			Radio <input type="checkbox"
			name="updated[]" value="04"><br>

			Websites <input type="checkbox"
			name="updated[]" value="05"><br>

			Friends <input type="checkbox"
			name="updated[]" value="06"><br>

			Do you want to subscribe to our website to receive news and facts about cars? 
			Yes <input type="radio"
			name="receive" value="01">

			No <input type="radio"
			name="receive" value="02" checked><br>

			<input type="submit" value="Go">

		</form>
		
	</body>
	
</html>