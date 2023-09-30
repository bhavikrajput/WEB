<?php
$name=$_POST['name'];
$age=$_POST['age'];

function check($age)
{
	return ($age>=18)?"eligible":"not eligible";
}
$result=check($age);

echo "<p>$name,you are $result to vote.</p>";
?>
