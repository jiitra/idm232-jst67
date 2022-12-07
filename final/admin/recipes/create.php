<?php

include_once __DIR__ . '/../../app.php';

$page_title = 'Create';
include_once __DIR__ . '/../../components/header.php';
?>

<?php
// get RECIPES data from database
$query = 'SELECT * FROM recipes';
$result = mysqli_query($db_connection, $query);

?>

<script>
      tinymce.init({
        selector: '#mytextarea'
      });
</script>

<div id="page_title" class="centered">
    <h1>Create Recipe</h1>
</div>

<form id="form" action="<?php echo site_url(); ?>/includes/process-create-recipes.php" method="POST">
    <br>
    <div class="input-section">
        <div>
            <label class="input-label" for="title">Title</label>
        </div>
        <input class="search" type="text" name="title">
    </div>
    <div class="input-section">
        <label  class="input-label" for="description">Description</label>
        <textarea class="mytextarea" name="description"  cols="30"
            rows="10">
        </textarea>
    </div>
    <div class="input-section">
        <label class="input-label" for="ingredients">Ingredients</label>
        <textarea class="mytextarea" name="ingredients" cols="30"
            rows="10">
        </textarea>
    </div>
    <div class="input-section">
        <label class="input-label" for="howto">How To</label>
        <textarea class="mytextarea" name="howto" cols="30"
            rows="10">
        </textarea>
    </div>
    <div class="input-section">
        <div>
            <label class="input-label" for="image path">Image Path</label>
        </div>
        <input class="search" type="text" name="img">
    </div>

    <input class = "button" type="submit" value="submit">
</form>


<?php include_once __DIR__ . '/../../components/footer.php';