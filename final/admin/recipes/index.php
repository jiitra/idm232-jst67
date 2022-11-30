<?php

include_once __DIR__ . '/../../app.php';

$page_title = 'Admin Recipes';
include_once __DIR__ . '/../../components/header.php';
$recipes = get_recipes();
?>

<?php
// get RECIPES data from database
$query = 'SELECT * FROM recipes';
$result = mysqli_query($db_connection, $query);

?>

<div>
    <div>
    <button type="button">
    <a href="<?php echo site_url() . '/admin/recipes/create.php' ?>">
        Add recipe</a>
    </button>

    <?php include __DIR__ . '/../../components/table-recipes.php'; ?>

    </div>
    <div>
    </div>
</div>


<?php include_once __DIR__ . '/../../components/footer.php';