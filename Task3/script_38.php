<?php
$a=array("a"=>"red","b"=>"green","c"=>"blue");
print_r(array_shift($a))."<br>";
array_unshift($a,"red");
print_r($a);
?>