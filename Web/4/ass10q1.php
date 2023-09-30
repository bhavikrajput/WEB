<?php
function getdayname($daynumber)
{
	switch($daynumber)
	{
	case 1:
		return "sunday";
	case 2:
		return "monday";
	case 3:
		return "tuesday";
	case 4:
		return "wednesday";
	case 5: 
		return "thursday";
	case 6: 
		return "friday";
	case 7:
		return "saturday";
	default:"invalid day number";
	}
}
echo "enter day number";
$daynumber=trim(fgets(STDIN));
$dayname=getdayname($daynumber);
echo "the day corresponding to $daynumber is $dayname.";
?>

