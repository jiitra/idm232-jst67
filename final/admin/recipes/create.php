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

<form action="<?php echo site_url(); ?>/includes/process-create-recipes.php" method="POST">
    <div>
        <label for="">Title</label>
        <input type="text" name="title">
    </div>
    <div>
        <label for="">Description</label>
        <input type="text" name="description">
    </div>
    <div>
        <label for="">Ingredients</label>
        <input type="text" name="ingredients">
    </div>
    <div>
        <label for="">How To</label>
        <input type="text" name="howto">
    </div>

    <input
    
    type="submit" value="submit">
</form>


              <?php include_once __DIR__ . '/../../components/footer.php';