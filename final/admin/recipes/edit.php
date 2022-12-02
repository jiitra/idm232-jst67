<?php

include_once __DIR__ . '/../../app.php';
if (isset($_GET['id'])) {
    $id = $_GET['id'];
} else {
    die('ID is needed in URL');
}
$page_title = 'Edit Recipes';
include_once __DIR__ . '/../../components/header.php';
?>

<?php
// get recipes data from database
$query = "SELECT * FROM recipes WHERE id = {$id}";
$result = mysqli_query($db_connection, $query);
if ($result->num_rows > 0) {
    // Get row from results and assign to $recipe variable;
    $recipe = mysqli_fetch_assoc($result);
} else {
    $error_message = 'recipe does not exist';
    // redirect_to('/admin/recipes?error=' . $error_message);
}

?>

<div id="page_title" class="centered">
    <h1>Edit Recipe</h1>
</div>

<form id="form" action="<?php echo site_url(); ?>/includes/process-edit-recipes.php" method="POST">
    <div class="input-section">
        <div>
            <label class="input-label" for="">Title</label>
        </div>
        <input class="search" type="text" name="title" value="<?php echo $recipe['title']?>">
    </div>
    <div class="input-section">
        <label class="input-label" for="">Description</label>
        <textarea class="mytextarea" name="description" id="" cols="30"
            rows="10">
            <?php echo $recipe['description']?>
        </textarea>
    </div>
    <div class="input-section">
        <label class="input-label" for="">Ingredients</label>
        
        <textarea name="ingredients" cols="30"
            rows="10" >
            <?php echo $recipe['ingredients']?>
        </textarea>
    </div>
    <div class="input-section">
        <label class="input-label"  for="">How To</label>
        <textarea name="howto" cols="30"
            rows="10" >
            <?php echo $recipe['howto']?>
        </textarea>
    </div>
    <div class="input-section">
        <label  class="input-label" for="">Image Path</label>
        <input class="search" type="text" name="img" value="<?php echo $recipe['img']?>">
    </div>

    <input class="button" type="submit" value="submit">

    <input type="hidden" name="id" value="<?php echo $recipe['id']?>">
</form>

<?php include_once __DIR__ . '/../../components/footer.php';