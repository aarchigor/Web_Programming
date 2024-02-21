
<?php

$a = array(
  array(
    'id' => 1,
    'first_name' => 'aarchi',
    'last_name' => 'gor',
  ),
  array(
    'id' => 2,
    'first_name' => 'mishva',
    'last_name' => 'bhimani',
  ),
  array(
    'id' => 3,
    'first_name' => 'hirva',
    'last_name' => 'sureya',
  )
);

$last_names = array_column($a, 'first_name');
print_r($last_names);
?>