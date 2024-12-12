<main>
    <h1>Admin tool</h1>
    <h2>PostCategory create</h2>
    <form action="">
        <input type="hidden" name="id" value="<?= $data['id'] ?>">
        <table>
            <tr>
                <td>title</td>
                <td>
                    <input name="title" placeholder="text"">
                </td>
            <tr>
                <td colspan="2">
                    <button type="submit">Save</button>
                </td>
            </tr>
        </table>
    </form>
</main>