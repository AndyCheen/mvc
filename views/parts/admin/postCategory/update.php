<form action="">
    <input type="hidden" name="id" value="<?= $data['id'] ?>">
    <table>
        <tr>
            <td>title</td>
            <td>
                <input name="title" placeholder="text" value="<?= $data['title'] ?>">
            </td>
        </tr>
        <tr>
            <td colspan="2">
                <button type="submit">Save</button>
            </td>
        </tr>
    </table>
</form>