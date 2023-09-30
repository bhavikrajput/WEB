<?php

$number=$_POST['number'];
function checkpositive($num)
{
	if($num>0)
	{
		return "positive";
	}
	elseif($num<0)
	{
		return "negative";
	}
	else
	{
		return "zero";
	}
}
function checkeven($num)
{
	if($num%2==0)
	{
		return "even";
	}
	else
	{
		return "odd";
	}
}
$positivity=checkpositive($number);
$parity=checkeven($number);
echo "the number $number is $positivity and $parity.";
?>
