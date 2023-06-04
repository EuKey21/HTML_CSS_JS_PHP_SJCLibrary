<div class="card my-transparent-table my-card my-center">
    <div class="card-header bg-dark text-white">
        <h3 class="card-title my-center-txt"><b>Book Setting</b></h3>
    </div>
    <div class="card-body">
        <form method="POST" action="" enctype="multipart/form-data">
            <div class="form-group">
                <label>ISBN</label>
                <input name="ISBN" type="text" required value="<?php echo $book['ISBN'] ?>" class="form-control">
            </div>
            <div class="form-group">
                <label>Title</label>
                <input name="title" type="text" required value="<?php echo $book['title'] ?>" class="form-control">
            </div>
            <div class="form-group">
                <label>Author</label>
                <input name="author" type="text" required value="<?php echo $book['author'] ?>" class="form-control">
            </div>
            <div class="form-group">
                <label>Genre</label>
                <input name="genre" type="text" required value="<?php echo $book['genre'] ?>" class="form-control">
            </div>
            <div class="form-group">
                <label>Publisher</label>
                <input name="publisher" type="text" required value="<?php echo $book['publisher'] ?>" class="form-control">
            </div>
            <div class="form-group">
                <label>Publish Year</label>
                <input name="publish_year" type="text" required value="<?php echo $book['publish_year'] ?>" class="form-control">
            </div>
            <div class="form-group">
                <input name="reserved" type="hidden" value="<?php echo $book['reserved'] ?>" class="form-control">
            </div>
            <div class="form-group my-btn-padding">
                <label>Upload Cover (jpg only): </label>
                <input name="picture" type="file" class="form-control-file">
            </div>
            <div class="my-btn-padding">
            <button type="submit" class="btn btn-success">Submit</button>
            </div>
        </form>
    </div>
</div>

