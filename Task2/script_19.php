<?php

$num = 5; 

for ($i=2; $i <=sqrt($num); $i++)  
{
    if ($num % $i==0) 
	{
        echo $num . " is not a prime number.";
        exit;
    }
}

echo $num . " is a prime number.";

?>