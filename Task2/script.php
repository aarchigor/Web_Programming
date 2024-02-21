<?php

    $num1 = readLine("Enter a number");
    $num2 = readLine("Enter a number");
	 $num3 = readLine("Enter a number");
	
      if($num1>$num2 && $num1>$num3)
	  {
        echo $num1;
      }
      else
	  {
        if($num2>$num1 && $num2>$num3)
		{
          echo $num2;
        }
        else
			
          echo $num3;
      }

echo $num1;
echo $num2;
echo $num3;
?>
