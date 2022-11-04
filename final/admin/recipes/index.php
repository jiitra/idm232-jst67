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


<?php include_once __DIR__ . '/../../_components/footer.php';