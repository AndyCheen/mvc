<main>
    <h1>Admin tool</h1>
    <h2>Gallery view</h2>
    <form action="">
        <input type="hidden" name="id" value="<?= $data['id'] ?>">
        <table>
            <tr>
                <td>title</td>
                <td>
                    <input name="title" placeholder="text"">
                </td>
            </tr>
            <tr>
                <td>content</td>
                <td>
                    <input name="content" placeholder="text"">
                </td>
            </tr>
            <tr>
                <td>user_id</td>
                <td>
                    <input name="user_id" placeholder="int"">
                </td>
            </tr>
            <tr>
                <td>category_id</td>
                <td>
                    <input name="category_id" placeholder="int"">
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <button type="submit">Save</button>
                </td>
            </tr>
        </table>
    </form>
</main>