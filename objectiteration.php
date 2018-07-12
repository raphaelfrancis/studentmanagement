<?php
class student
{
    public $name="allan";
    public $age="30";
    protected $address="thrissur";
    protected $protected = 'protected var';
    private   $private   = 'private var';
    function iterateVisible() {
       echo "MyClass::iterateVisible:\n";
       foreach ($this as $key => $value) {
           print "$key => $value\n";
       }
}
}
$std=new student();
echo $std->name."<br>";
echo $std->age."<br>";
//echo $std->address."<br>";
foreach($std as $key=>$value)
{
  print "$key => $value\n";
}
$std->iterateVisible();
?>