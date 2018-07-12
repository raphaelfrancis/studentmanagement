<?php
$a=10;
$b="welcome";
function view($bool)
{
if($bool=="FALSE")
{
	echo "welcome";
}
else
{
	echo "Good";
}
}
view($a===$b);
?>