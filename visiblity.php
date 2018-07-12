<?php
class student
{

    public $name="Babu";
    private $age="30";
    protected $address="Thrissur";
protected function printhello()
    {
       echo "welcome";

    }
}


class result extends student
{

public $mark="30";
private $rank="2";
protected $standard="8";
function add()
{
    $this->printhello();
}
}
$re=new result();
// print_r($re);
//echo $re->mark."<br>";
$re->add();

?>