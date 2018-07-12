<?php
class college
{
	function student_o()
	{
       echo "hello";


	}

}
class result extends college
{
    function student()
    {

        echo "welcome";
    }


}
class score extends result
{


	function newresult()
	{
		echo "good";
	}
}

class newscore extends score
{
    function newresults()
    {
    	echo "hai";
    }
}

$std=new newscore();
$std->student_o();
?>