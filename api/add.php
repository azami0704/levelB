<?php
include_once "./base.php";

$table=$_POST['table'];
$direct=strtolower($_POST['table']);
unset($_POST['table']);

if(!empty($_FILES['img']['tmp_name'])){
    move_uploaded_file($_FILES['img']['tmp_name'],"../upload/".$_FILES['img']['name']);
    $_POST['img']=$_FILES['img']['name'];
}

$$table->save($_POST);

to("../admin.php?do=$direct");

?>