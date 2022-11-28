<?php 

//__DIR__ helps paths stay stable in prod
include_once __DIR__ . '/app.php';

$page_title = 'Home';  
$header = 'Recipes';
$caption = 'All the recipes you love, at your fingertips.';
$link="recipes.php";

$recipes = get_recipes();
// get recipes data from database
$query = 'SELECT * FROM recipes';
$result = mysqli_query($db_connection, $query);

include_once __DIR__ . '/components/header.php';?>

<?php include __DIR__ . '/components/big_header.php'; ?>

<h2 class="centered grid_header">All Recipes</h2>
<section class="grid">
    <?php include __DIR__ . '/components/recipe-card.php'; ?>
</section>

<?php include_once __DIR__ . '/components/footer.php'; ?>