<?php


$string = "Atmiya uni"; 

$vowelCount = 0;

$string = strtolower($string); 

for ($i = 0; $i < strlen($string); $i++) 
{
    $char = $string[$i];

 switch ($char)
 {
    case 'a':
    case 'e':
    case 'i':
    case 'o':
    case 'u':
      $vowelCount++;
            break;
    }
}

echo "Number of vowels: " . $vowelCount;

?>