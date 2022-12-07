<?php 

//__DIR__ helps paths stay stable in prod
include_once __DIR__ . '/app.php';

$site_url = site_url();

$recipes = get_recipes();

$page_title = 'Welcome!';  
$header = 'Visions of Sugarplums';

$recipes = get_recipes();
// get recipes data from database
$query = 'SELECT * FROM recipes';
$result = mysqli_query($db_connection, $query);

include_once __DIR__ . '/components/header.php';?>

<div style="padding-top: 8rem;">
</div>
<?php include __DIR__ . '/components/big_header.php'; ?>


<h2 class="centered grid_header">
    <a href="index.php" style="
    color: var(--brand);">See All Recipes</a>
</h2>

<?php include_once __DIR__ . '/components/footer.php'; ?>