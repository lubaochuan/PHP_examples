<?php

$string = file_get_contents("test.txt");

print $string;

$array = explode("\n", $string);

print_r($array);
?>