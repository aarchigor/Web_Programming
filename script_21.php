<html>
<body>

<form method="post" action="">
      
 Enter input:<input type="text" name="num"><br>
	 

  
  <input type="submit" name="submit">

</form>

</body>
</html>

<?php
$a=$_REQUEST['num'];

$i=strrev($a);

if($i==$a)
{
	echo "num is palindrome";
}
else
{
	echo "num is not  palindrome";
	
}	



?>