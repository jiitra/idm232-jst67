<?php 

include_once __DIR__ . '/app.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
} else {
    die('ID is needed in URL');
}

$site_url = site_url();

$recipes = get_recipes();


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

    $page_title = $recipe['title'];
    $header = $page_title;
    $caption = $recipe['description'];
    $img = $recipe['img'];

/* $page_title = 'Mom&apos;s Sugar Cookies';  
$header = 'Mom&apos;s Sugar Cookies';
$img = "img/sugar-cookies-lg.png"; */


include_once __DIR__ . '/components/header.php';
?>
<?php include __DIR__ . '/components/big_header.php'; ?>
<?php include __DIR__ . '/components/recipe_view.php'; ?>

<?php include_once __DIR__ . '/components/footer.php'; ?>