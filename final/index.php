<?php 

//__DIR__ helps paths stay stable in prod
include_once __DIR__ . '/app.php';

$page_title = 'Home';  
$header = 'Recipes';
$caption = 'All the recipes you love, at your fingertips.';
$card_text = 'Cookies';
$img = "img/cookies.png";
$link="recipes.php";

include_once __DIR__ . '/components/header.php';?>

<?php include __DIR__ . '/components/big_header.php'; ?>

<h2 class="centered grid_header">Categories </h2>
<?php include __DIR__ . '/components/grid.php'; ?>

<?php include_once __DIR__ . '/components/footer.php'; ?>