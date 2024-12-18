<main>
    <h2>Gallery view</h2>
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
            <th>Name</th>
            <th>Image</th>
            <th>Category name</th>
            <th>Category id</th>
            <th>Update</th>
            <th>Delete</th>
        </tr>
        <?php
        foreach ($data as $galeryItem): ?>
            <tr>
                <td><?= $galeryItem['id'] ?></td>
                <td><?= $galeryItem['name'] ?></td>
                <td><?= $galeryItem['image'] ?></td>
                <td><?= $galeryItem['categoryName'] ?></td>
                <td><?= $galeryItem['categoryId'] ?></td>
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