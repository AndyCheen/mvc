<main>
    <h2>GaleryCategory view</h2>
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
        </tr>
        <?php
        foreach ($data as $galeryCategoryItem): ?>
            <tr>
                <td><?= $galeryCategoryItem['id'] ?></td>
                <td><?= $galeryCategoryItem['name'] ?></td>
                <td>
                    <a href="update?id=<?= $galeryCategoryItem['id'] ?>">Update</a>
                </td>
                <td>
                    <a href="delete?id=<?= $galeryCategoryItem['id'] ?>">Delete</a>
                </td>
            </tr>
        <?php endforeach;
        }
        ?>
    </table>
</main>