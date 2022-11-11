<?php

include_once __DIR__ . '/../../app.php';

$page_title = 'Recipes';
include_once __DIR__ . '/../../components/header.php';
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
            Add user</a></button>
    </div>
    <div>
    </div>
</div>


<?php include_once __DIR__ . '/../../components/footer.php';