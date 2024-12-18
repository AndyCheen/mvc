<main>
    <h2>Gallery view</h2>
    <table>
       <?php
        foreach ($data as $galeryItem): ?>
            <tr>
                <td><?= $galeryItem['name'] ?></td>
                <td><?= $galeryItem['image'] ?></td>
                <td><?= $galeryItem['categoryName'] ?></td>
            </tr>
       <?php endforeach; ?>
    </table>
</main>