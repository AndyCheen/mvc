<main>
    <h2>PostCategory view</h2>
    <a href="create">Create</a>
    <br>
    <?php
    if (!isset($data)) {
        echo "No data";
    } else {
    ?>
    <table>
        <tr>
            <th>ID</th>
            <th>Title</th>
        </tr>
        <?php
        foreach ($data as $galeryItem): ?>
            <tr>
                <td><?= $galeryItem['id'] ?></td>
                <td><?= $galeryItem['title'] ?></td>
                <td>
                    <a href="update?id=<?= $galeryItem['id'] ?>">Update</a>
                </td>
                <td>
                    <a href="delete?id=<?= $galeryItem['id'] ?>">Delete</a>
                </td>
            </tr>
        <?php endforeach;
        }
    ?>
    </table>
</main>