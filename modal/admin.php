<h3>新增管理者帳號</h3>
<hr>
<form action="./api/add.php" method="post">
    <table>
        <tr>
            <td>帳號:</td>
            <td>
                <input type="text" name="ac">
            </td>
        </tr>
        <tr>
            <td>密碼:</td>
            <td>
                <input type="password" name="pw">
            </td>
        </tr>
        <tr>
            <td>確認密碼:</td>
            <td>
                <input type="password">
            </td>
        </tr>
        <tr>
            <input type="hidden" name="table" value="Admin">
            <td class="cent" colspan="2"><input type="submit" value="新增"><input type="reset" value="重置">
            </td>
            </tr>
    </table>
</form>