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


<h1>Edit Recipe</h1>

<form action="<?php echo site_url(); ?>/includes/process-edit-recipes.php" method="POST">
    <div>
        <label for="">Title</label>
        <input type="text" name="title" value="<?php echo $recipe['title']?>">
    </div>
    <div>
        <label for="">Description</label>
        <input type="text" name="description" value="<?php echo $recipe['description']?>">
    </div>
    <div>
        <label for="">Ingredients</label>
        <input type="text" name="ingredients" value="<?php echo $recipe['ingredients']?>">
    </div>
    <div>
        <label for="">How To</label>
        <input type="text" name="howto" value="<?php echo $recipe['howto']?>">
    </div>
    <div>
        <label for="">Image Path</label>
        <input type="text" name="img" value="<?php echo $recipe['img']?>">
    </div>

    <input type="submit" value="submit">

    <input type="hidden" name="id" value="<?php echo $recipe['id']?>">
</form>

<?php include_once __DIR__ . '/../../components/footer.php';