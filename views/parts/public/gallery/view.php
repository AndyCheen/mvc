<main>
    <h2>Gallery view</h2>
   <table>
       <tr>
           <th>ID</th>
           <th>Name</th>
           <th>Image</th>
           <th>Category name</th>
           <th>Category id</th>
       </tr>
       <?php
        foreach ($data as $galeryItem): ?>
            <tr>
                <td><?= $galeryItem['id'] ?></td>
                <td><?= $galeryItem['name'] ?></td>
                <td><?= $galeryItem['image'] ?></td>
                <td><?= $galeryItem['categoryName'] ?></td>
                <td><?= $galeryItem['categoryId'] ?></td>
            </tr>
       <?php endforeach; ?>
   </table>
</main>