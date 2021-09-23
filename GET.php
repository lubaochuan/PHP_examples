<?php

$user_name = $_GET["username"];
$id_number = (int) $_GET["id"];

if (isset($_GET["username"])) {
  if (empty($_GET["username"])){
    echo "username is empty.\n";
  }else{
    echo "username:".$user_name."\n";
  }
}else{
  echo "username was not sent.\n";
}

echo "<br/>";
echo "id:".$id_number;

print_r($_GET);

?>