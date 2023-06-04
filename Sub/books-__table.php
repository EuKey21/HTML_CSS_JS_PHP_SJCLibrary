<table class="table table-bordered table-hover my-transparent-table">
    <caption>SJCJC Library</caption>
    <thead>
        <tr class="my-row-height">
            <th>ISBN</th>
            <th>Title</th>
            <th>Author</th>
            <th>Genre</th>
            <th>Publisher</th>
            <th>Published Year</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($books as $book): ?>
        <tr class="my-row-height">
            <td><?php echo $book['ISBN'] ?></td>
            <td>
                <a href="books-view.php?ISBN=<?php echo $book['ISBN']?>">
                    <?php echo $book['title'] ?>
                </a>
            </td>
            <td><?php echo $book['author'] ?></td>
            <td><?php echo $book['genre'] ?></td>
            <td><?php echo $book['publisher'] ?></td>
            <td><?php echo $book['publish_year'] ?></td>       
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>

