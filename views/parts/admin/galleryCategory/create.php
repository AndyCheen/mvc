<main>
    <h1>Admin tool</h1>
    <h2>Gallery view</h2>
    <form action="">
        <input type="hidden" name="id" value="<?= $data['id'] ?>">
        <table>
            <tr>
                <td>name</td>
                <td>
                    <input name="name" placeholder="text"">
                </td>
            </tr>
            <tr>
                <td>image</td>
                <td>
                    <input name="image" placeholder="text">
                </td>
            </tr>
            <tr>
                <td>categoryName</td>
                <td>
                    <input name="categoryName" placeholder="text">
                </td>
            </tr>
            <tr>
                <td>categoryId</td>
                <td>
                    <input name="categoryId" placeholder="int">
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