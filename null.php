<?php
// example code borrowed from https://stackoverflow.com/questions/6905491/how-to-tell-whether-a-variable-is-null-or-undefined-in-php

$v1 = null;

echo (isset($v1) ? '$v1 set' : '$v1 not set') . PHP_EOL;
echo (is_null($v1) ? '$v1 null' : '$v1 not null') . PHP_EOL;
echo (empty($v1) ? '$v1 empty' : '$v1 not empty') . PHP_EOL;
echo (array_key_exists('v1', get_defined_vars()) ? '$v1 defined' : '$v1 not defined') . PHP_EOL;

echo PHP_EOL;
echo (isset($v2) ? '$v2 set' : '$v2 not set') . PHP_EOL;
echo (@is_null($v2) ? '$v2 null' : '$v2 not null') . PHP_EOL;
echo (empty($v2) ? '$v2 empty' : '$v2 not empty') . PHP_EOL;
echo (array_key_exists('v2', get_defined_vars()) ? '$v2 defined' : '$v2 not defined') . PHP_EOL;

$v3 = "";
echo PHP_EOL;
echo (isset($v3) ? '$v3 set' : '$v3 not set') . PHP_EOL;
echo (is_null($v3) ? '$v3 null' : '$v3 not null') . PHP_EOL;
echo (empty($v3) ? '$v3 empty' : '$v3 not empty') . PHP_EOL;

// print_r(get_defined_vars());

/*
The '@' in '@is_null' is to suppress a console warning when this script is invoked via a web request.

In PHP typically variables that have not been set or that have been unset are considered null. The meaning of null is "no value". There is a distinct difference between "no value" and a value left "blank". For instance, if a user submitted a form with foo=&bar=baz, $_GET['foo'] is set to the value of empty string "", which is distinctly different from null which would be the value for any key other than 'foo' and 'bar'.

Variables defined in a function signature will be implicitly "set". 
*/
?>