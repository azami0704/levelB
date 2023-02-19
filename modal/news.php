<h3>新增最新消息資料</h3>
<hr>
<form action="./api/add.php" method="post" enctype="multipart/form-data">
    <table>
        <tr>
            <td>最新消息資料:</td>
            <td>
                <textarea type="text" name="text" style="width:90%;height:60px;"></textarea>
            </td>
        </tr>
        <tr>
            <input type="hidden" name="table" value="News">
            <td class="cent" colspan="2"><input type="submit" value="新增"><input type="reset" value="重置">
            </td>
            </tr>
    </table>
</form>