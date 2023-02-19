<?php
include_once "../api/base.php";
?>
<h3>新增主選單</h3>
<hr>
<form action="./api/submenu.php" method="post">
    <table>
        <tbody id="sb">
        <tr>
            <td>次選單名稱:</td>
            <td>次選單連結網址:</td>
            <td>刪除</td>
        </tr>
        <?php
        $menus=$Menu->all(['main'=>$_GET['id']]);
        foreach($menus as $row){
        ?>
        <tr>
            <td>
                <input type="hidden" name="id[]" value="<?=$row['id']?>">
                <input type="text" name="text[]" value="<?=$row['text']?>">
            </td>
            <td>
                <input type="text" name="url[]" value="<?=$row['url']?>">
            </td>
            <td>
                <input type="checkbox" name="del[]" value="<?=$row['id']?>">
            </td>
        </tr>
        <?php
        }
        ?>
        </tbody>
        <tr>
            <input type="hidden" name="main" value="<?=$_GET['id']?>">
            <input type="hidden" name="table" value="Menu">
            <td class="cent" colspan="2"><input type="submit" value="修改確定"><input type="reset" value="重置"><input type="button" id="add-btn" value="更多次選單">
            </td>
            </tr>
    </table>
</form>
<script>
    $('#add-btn').click(function(){
        $('#sb').append(
            `<tr>
            <td>
                <input type="text" name="ntext[]">
            </td>
            <td>
                <input type="text" name="nurl[]">
            </td>
            <td>
                <input type="checkbox">
            </td>
        </tr>`
        );
    })
</script>