<?php 

include_once __DIR__ . '/app.php';

$page_title = 'Recipes';  
$header = 'Cookie Recipes';
$card_text = 'Mom&apos;s Sugar Cookies';
$img = "img/sugar-cookies.png";
$link = "recipe.php";


include_once __DIR__ . '/components/header.php';
?>
<?php include __DIR__ . '/components/big_header.php'; ?>

<h2 class="centered grid_header">Categories </h2>
<?php include __DIR__ . '/components/grid.php'; ?>

<?php include_once __DIR__ . '/components/footer.php'; ?>