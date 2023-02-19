<?php
include_once "./base.php";

if($Admin->count($_POST)==1){
    to("../admin.php");
}else{
    ?>
    <script>
        alert('帳號或密碼錯誤');
        location.href="../index.php?do=login";
    </script>
    <?php
}
?>