<?php
/*
This script simply echo back GET and POST parameters it gets when it is invoked by a web request.
*/
echo "<h2>GET parameters</h2>";
print_r($_GET);
echo "<h2>POST parameters</h2>";
print_r($_POST);
?>
