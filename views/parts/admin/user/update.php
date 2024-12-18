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
            <td>email</td>
            <td>
                <input name="email" placeholder="text" value="<?= $data['email'] ?>">
            </td>
        </tr>
        <tr>
            <td>role</td>
            <td>
                <input name="role" placeholder="int" value="<?= $data['role'] ?>">
            </td>
        </tr>
        <tr>
        <tr>
            <td colspan="2">
                <button type="submit">Save</button>
            </td>
        </tr>
    </table>
</form>