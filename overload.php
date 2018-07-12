<?php
class load
{
function add($a,$b)
{
   $c=$a.$b;
   echo $c."<br>";
}
}
$ld=new load();
$ld->add(10,20);
$ld->add('allan','paul');
$ld->add('don','jose');
$ld->add('good','morning');
?>