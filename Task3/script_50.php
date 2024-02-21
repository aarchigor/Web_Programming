<!--array_filter(array, callbackfunction, flag)-->

<?php

function test_odd($var)
  {
  return($var & 1);
  }

$a1=array(1,2,3,4,5,6,7,8,9,10);
print_r(array_filter($a1,"test_odd"));

?>