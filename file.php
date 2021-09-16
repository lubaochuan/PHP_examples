<?php

$array = file("test.txt");

foreach($array as $line){
  print "=".$line."=";
}

print_r($array);

$new_array = Array("hello", "hello");
$array_in_array = Array("hello", $new_array, "world");

print_r($array_in_array);
?>