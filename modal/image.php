<h3>新增校園映像圖片</h3>
<hr>
<form action="./api/add.php" method="post" enctype="multipart/form-data">
    <table>
        <tr>
            <td>校園映像圖片:</td>
            <td>
                <input type="file" name="img">
            </td>
        </tr>
        <tr>
            <input type="hidden" name="table" value="Image">
            <td class="cent" colspan="2"><input type="submit" value="更新"><input type="reset" value="重置">
            </td>
            </tr>
    </table>
</form>