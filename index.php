<?php
$time_start = microtime(true);
echo "Hello! My name is Arup Sarkar and my IP addres is: ".$_SERVER['SERVER_ADDR'];
// Generate a random integer from 200 to 10000

$random=rand(200,1000);

$a = Array( Array(1,2,3,4),Array(4,5,6,7));
$b = Array( Array(7,5,7,2), Array(3,2,8,2));

//variable number of loop
for ($x=0; $x <= $random; $x++)
 {
//number crunching
$c = array();
for($i=0;$i<4;$i++)
{
    for($j=0;$j<4;$j++)
    {
        $c[$i][$j]=0;
        for($k=0;$k<4;$k++)
        {

            $c[$i][$j]=$c[$i][$j]+($a[$i][$k]*$b[$k][$j]);
        }
    }
}

}
echo "<br> random value was:".$random;
$time_end = microtime(true);
$execution_time = ($time_end - $time_start);
echo "<br> Execution time:".$execution_time." second";
echo "<br> Done !";
?>