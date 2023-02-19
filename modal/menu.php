<h3>新增主選單</h3>
<hr>
<form action="./api/add.php" method="post">
    <table>
        <tr>
            <td>主選單名稱:</td>
            <td>選單連結網址:</td>
        </tr>
        <tr>
            <td>
                <input type="text" name="text">
            </td>
            <td>
                <input type="text" name="url">
            </td>
        </tr>
        <tr>
            <input type="hidden" name="table" value="Menu">
            <td class="cent" colspan="2"><input type="submit" value="新增"><input type="reset" value="重置">
            </td>
            </tr>
    </table>
</form>