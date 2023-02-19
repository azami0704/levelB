<?php
include_once "./base.php";

$table=$_POST['table'];
$direct=strtolower($_POST['table']);
unset($_POST['table']);

$data=[];
if(!empty($_FILES['img']['tmp_name'])){
    move_uploaded_file($_FILES['img']['tmp_name'],"../upload/".$_FILES['img']['name']);
    $data['img']=$_FILES['img']['name'];
}
if(isset($_POST['id'])){
    foreach($_POST['id'] as $idx=>$id){
        if(isset($_POST['del'])&&in_array($id,$_POST['del'])){
            $$table->del($id);
        }
        foreach($_POST as $col=>$val){
            if($col!='del'&&$col!='sh'){
                $data[$col]=$val[$idx];
            }

            if($col=='sh'){
                if(is_array($val)){
                    $data[$col]=in_array($id,$val)?1:0;
                }else{
                    $data[$col]=$val==$id?1:0;
                }
            }
        }
        $$table->save($data);
    }
}


to("../admin.php?do=$direct");

?>