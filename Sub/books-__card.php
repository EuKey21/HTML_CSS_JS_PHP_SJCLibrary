<div class="card my-card my-center my-transparent-table">
    <div class="card-header">
        <h3 class="card-title my-center-txt">Details</h3>
    </div>
    <table class="table">
        <tr>
            <th class="my-row-height">Cover: </th> 
            <td><img src="Json/books_pictures/<?php echo $book['ISBN']?>.jpg" class="my-cover"></td>
        </tr>
        <tr class="my-row-height">
            <th>ISBN: </th>
            <td><?php echo $book['ISBN']; ?></td>
        </tr>
        <tr class="my-row-height">
            <th>Title: </th>
            <td><?php echo $book['title']; ?></td>
        </tr class="my-row-height">
        <tr class="my-row-height">
            <th>Author: </th>
            <td><?php echo $book['author']; ?></td>
        </tr>
        <tr class="my-row-height">
            <th>Genre: </th>
            <td><?php echo $book['genre']; ?></td>
        </tr>
        <tr class="my-row-height">
            <th>Publisher: </th>
            <td><?php echo $book['publisher']; ?></td>
        </tr>
        <tr class="my-row-height">
            <th>Publish Year: </th>
            <td><?php echo $book['publish_year']; ?></td>
        </tr>
        <tr class="my-row-height">
            <th>Status: </th>
            <td><?php 
                if ($book['reserved'] == "") {
                    echo "Available";
                }
                else {
                    echo "Reserved for #".$book['reserved'];
                }
            ?></td>
        </tr>
    </table>
</div>