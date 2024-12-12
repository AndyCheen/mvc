<form action="">
    <input type="hidden" name="id" value="<?= $data['id'] ?>">
    <table>
        <tr>
            <td>name</td>
            <td>
                <input name="name" placeholder="text" value="<?= $data['name'] ?>">
            </td>
        </tr>
        <tr>
            <td colspan="2">
                <button type="submit">Save</button>
            </td>
        </tr>
    </table>
</form>