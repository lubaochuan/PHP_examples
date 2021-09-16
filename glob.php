<?php

$array = glob("*.php");
print_r($array);

$array = glob("*.txt");
print_r($array);

$array = glob("text_files/*.txt");
print_r($array);

print_r(file($array[0]));

$array = scandir("text_files");
print_r($array);
?>