<h3>更新資料</h3>
<hr>
<form action="./api/add.php" method="post" enctype="multipart/form-data">
    <table>
        <tr>
            <td>資料上傳:</td>
            <td>
                <input type="file" name="img">
            </td>
        </tr>
        <tr>
            <input type="hidden" name="table" value="<?=$_GET['table']?>">
            <input type="hidden" name="id" value="<?=$_GET['id']?>">
            <td class="cent" colspan="2"><input type="submit" value="更新"><input type="reset" value="重置">
            </td>
            </tr>
    </table>
</form>