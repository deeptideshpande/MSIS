<?php
$checkboxArray=array('lightsaber','energyAttack','r2d2','wookie');
if(isset($_POST['col2']) and $_POST['col2']!="" and isset($_POST['col1']) and $_POST['col1']!="" )
{
	$col1=$_POST['col1'];
	$col2=$_POST['col2'];

	$link = mysqli_connect('localhost','root','','db') or die(mysqli_error($link));

	$sql="INSERT INTO table1(col1,col2) VALUES($col1,'$col2')";
	$results=mysqli_query($link,$sql);
	echo (!$results?die(mysqli_error($link)."<br>".$sql):"");

	$sql="SELECT t1_id FROM table1 WHERE col1=$col1 AND col2='$col2'";
	$results=mysqli_query($link,$sql);
	echo (!$results?(mysqli_error($link)):"");
	list($t1Id) = mysqli_fetch_array($results);
	echo "inserted table id is $t1Id.<br>";

//instead of getting col2 from above; insert the checkbox value selected

	$sql="INSERT INTO table2(col1,col2) VALUES($t1Id,'$col2')";
	$results=mysqli_query($link,$sql);
	echo (!$results?die(mysqli_error($link)."<br>".$sql):"");


	//insert the record in table2 where col1 is $t1Id and col2 is $col2 from above.
}
?>
<form method='post' action=''>
	Column1<input type='text' name='col1'><br>
	Column2<input type='text' name='col2'><br>
	<input type='submit' value='Go'>
</form>