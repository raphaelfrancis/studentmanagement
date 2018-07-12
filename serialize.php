<?php
class student
{
  function add()
  {
  	$a=10;
  	$b=12;
  	//$qu=array("name"=>'alex',"age"=>30);
  	echo serialize($a+$b);
  	// echo serialize($qu);
  }
}
$std=new student();
$std->add();
?>