<?php
include_once "./base.php";

$table=$_POST['table'];
$main=$_POST['main'];
$direct=strtolower($_POST['table']);
unset($_POST['table']);
unset($_POST['main']);

$data=[];
if(isset($_POST['id'])){
    $data['main']=$main;
    foreach($_POST['id'] as $idx=>$id){
        if(isset($_POST['del'])&&in_array($id,$_POST['del'])){
            $$table->del($id);
        }
        foreach($_POST as $col=>$val){
            if($col=='text'||$col=='url'||$col=='id'){
                $data[$col]=$val[$idx];
            }
        }
        $$table->save($data);
    }
}

if(isset($_POST['ntext'])){
    $data=[];
    $data['main']=$main;
    foreach($_POST['ntext'] as $idx=>$text){
        if($text){
            $data['text']=$text;
            $data['url']=$_POST['nurl'][$idx];
            $$table->save($data);
        }
    }
}

to("../admin.php?do=$direct");

?>