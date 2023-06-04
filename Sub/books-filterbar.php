<div class="card my-transparent-box">
    <form class="my-center" method="POST" action="books-filter.php">
    <div class="form-check my-checkbox-inline">
            <label class="form-check-label">
                <b>Genre:</b>
            </label>
        </div>
        <div class="form-check my-checkbox-inline">
            <label class="form-check-label">
                <input class="form-check-input" type="checkbox" name="genres[]"
                    value="historical fiction">Historical fiction
            </label>
        </div>
        <div class="form-check my-checkbox-inline">
            <label class="form-check-label">
                <input class="form-check-input" type="checkbox" name="genres[]"
                    value="science fiction">Science fiction
            </label>
        </div>
        <div class="form-check my-checkbox-inline">
            <label class="form-check-label">
                <input class="form-check-input" type="checkbox" name="genres[]"
                    value="detective fiction">Detective fiction
            </label>
        </div>
        <div class="form-check my-checkbox-inline">
            <label class="form-check-label">
                <input class="form-check-input" type="checkbox" name="genres[]"
                    value="fantasy">Fantasy
            </label>
        </div>
        <div class="form-check my-checkbox-inline">
            <input class="btn btn-sm btn-outline-primary" type="submit" value="Filter">
        </div>
    </form>
</div>

