
<html>
<body>

<form method="post" action="">
      Enter the first number:
     <input type="text" name="n1"><br>
	 
	 
  Enter the second number:
  <input type="text" name="n2"><br>
  
  
  Enter the third number:
  <input type="text" name="n3"><br>
  
  
  <input type="submit" name="submit">

</form>

</body>
</html>




<?php

$num1=$_REQUEST["n1"];
$num2=$_REQUEST["n2"];
$num3=$_REQUEST["n3"];



      
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


?>
