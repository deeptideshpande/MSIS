<?php

	$colorIndexDefault = array("Red","Green","Blue","Yellow","Purple");
	$colorIndexDefined = array("C1"=>"Red","C2"=>"Green","C3"=>"Blue","C4"=>"Yellow","C5"=>"Purple");


	$cnt = count($_GET['checkboxName']);
	for($i=0;$i<$cnt;$i++) {
		echo $_GET['checkboxName'][$i];
		echo ", ";
	}

	echo "<br>";
	echo $_GET['listName'];
	echo "<br>";

?>

<form method="get" name="CheckBoxForm"
action="">

	<?php

		foreach($colorIndexDefault as $name=>$value) {
			echo "$value <input type='checkbox'
			name='checkboxName[]' value='$name'><br>";
		}

	?>

	<select name='listName'>
		<?php
	
			foreach($colorIndexDefined as $name=>$value) {
				echo "<option value='$name'>List $value</option><br>";
			}

		?>
	</select>	

	<input type="submit" value="Go">

</form>
