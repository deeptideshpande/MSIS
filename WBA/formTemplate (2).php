<?php
$radioArray = array("k1"=> "v1","k2"=>"v2","k3"=>"v3");
$checkboxArray = array("k1"=> "v1","k2"=>"v2","k3"=>"v3");
$listboxArray = array("k1"=> "v1","k2"=>"v2","k3"=>"v3");

$textName=$_POST['textName'];
$textName2=$_POST['textName2'];
$radioName=$_POST['radioName'];
$listName = $_POST['listName'];
$radioName2=$_POST['radioName2'];
$listName2 = $_POST['listName2'];
$checkName = $_POST['checkName'];
$checkName2 = $_POST['checkName2'];
echo "User entered text $textName.<br>For 2nd text user entered $textName2.<br>User selected radio option $radioName. <br>User selected list option $listName.<br>User selected radio option $radioName2.<br>User selected list option2 $listName2.<br>";
echo "user selected following checkboxes: ";
foreach($checkName as $key=>$value){
	echo $value.", ";
}
echo "<br>";
foreach($checkName2 as $key=>$value){
	echo $value.", ";
}
echo "<br>";

?>
<form method='post' action=''>
SomeLabelForTextBox<input type='text' name='textName'><br>
SomeLabelForTextBox<input type='text' name='textName2'><br>
<?php
//create radio buttons using radioArray
foreach($radioArray as $name => $value){
	echo "$name <input type='radio' name='radioName' value='$value'><br>";
}

//create checkboxes using checkboxArray
foreach($checkboxArray as $name=>$value){
	echo "$name <input type='checkbox' name='checkName[]' value='$value'><br>";
}

//create listbox using listboxArray 
echo "<select name='listName'>";
foreach($listboxArray as $name=>$value){
	echo "<option value='$value'>$name</option>";
}
echo "</select><br>";
?>
RadioOption1 <input type='radio' name='radioName2' value='O1'><br>
RadioOption2 <input type='radio' name='radioName2' value='O2' checked><br>
RadioOption3 <input type='radio' name='radioName2' value='O3'><br>

checkboxOption1 <input type='checkbox' name='checkboxName2[]' value='O1'><br>
checkboxOption2 <input type='checkbox' name='checkboxName2[]' value='O2' checked><br>
checkboxOption3 <input type='checkbox' name='checkboxName2[]' value='O3'><br>

<select name='listName2'>
	<option value='l1'>List 1</option>
	<option value='l2'>List 2</option>
	<option value='l3' selected>List 3</option>
</select><br>

<input type="submit" value="Go">
</form>
