<?php
class student
{
   const ADD="GOOD"."<br>";
   public  function add()
   {
   	echo "welcome Good"."<br>";
   }
   public  function newadd()
   {
   	echo "Hello"."<br>";
   }
}

class college extends student
{
   public function view()
   {
        echo  self::add();
        echo  static::newadd();
        echo  parent::newadd();
        echo  college::newadd();
   }

}
$class = new college();
$class->add();
$class->view();
?>