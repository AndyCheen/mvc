<form action="">
    <input type="hidden" name="id" value="<?= $data['id'] ?>">
    <table>
        <tr>
            <td>name</td>
            <td>
                <input name="title" placeholder="text" value="<?= $data['title'] ?>">
            </td>
        </tr>
        <tr>
            <td>image</td>
            <td>
                <input name="content" placeholder="text" value="<?= $data['content'] ?>">
            </td>
        </tr>
        <tr>
            <td>categoryName</td>
            <td>
                <input name="user_id" placeholder="int" value="<?= $data['user_id'] ?>">
            </td>
        </tr>
        <tr>
            <td>categoryId</td>
            <td>
                <input name="category_id" placeholder="int" value="<?= $data['category_id'] ?>">
            </td>
        </tr>
        <tr>
            <td colspan="2">
                <button type="submit">Save</button>
            </td>
        </tr>
    </table>
</form>