<?php
class BaseClass {
	const CONSTANT='ALEX';
    function __construct($name,$age) {
        
       echo $name."<br>";
       echo $age."<br>";
    }
    public function add()
    {
    	echo "welcome";
    }
    function showConstant() {
        echo  self::CONSTANT . "\n";
        $this->add();
    }
}
echo BaseClass::CONSTANT . "<br>";
$classname = "BaseClass";
echo $classname::CONSTANT . "\n"; // As of PHP 5.3.0
//$obj=new BaseClass();
//$obj1=new BaseClass();
//$obj->showConstant();
//$obj1->add();
$obj2=new BaseClass('allan',30);
$obj3=new BaseClass('babu',25);
?>
