<form action="todo.php" method="post">
  <input type="text" name="newItem" />
  <input type="submit" value="Add" />
</form>

<?php
if(!empty(trim($_POST["newItem"]))){
  file_put_contents("todolist.txt", $_POST["newItem"]."\n", FILE_APPEND);
}

if(isset($_GET["id"])){
  $id = $_GET["id"];
  $items = file("todolist.txt");
  $list = []; //Array();
  for($i=0; $i<count($items); $i++){
    if($id != $i){
      array_push($list, $items[$i]);
    }
  }
  //print_r($list);
  file_put_contents("todolist.txt", implode("", $list));
}
?>

<ul>
<?php
$items = file("todolist.txt");
for($i=0; $i<count($items); $i++){
?>
  <li>
<?php
  if(isset($_GET["edit"]) && $_GET["edit"]==$i){
?>
    <input type="text" value=<?=$items[$i]?>/>
<?php
  }else{
?>
    <?= $items[$i] ?> 
    <a href="todo.php?id=<?=$i?>">x</a>
    <a href="todo.php?edit=<?=$i?>">edit</a>
<?php
  }
?>
  </li>
<?php
}
?>
</ul>
