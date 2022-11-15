<?php
include __DIR__ . '/../app.php';
include 'recipes-functions.php';

if (!$_POST) {
    die('Unauthorized');
}

// Store $_POST data to variables for readability
$title_value = $_POST['title'];
$description_value = $_POST['description'];
$ingredients_value = $_POST['ingredients'];
$howto_value = $_POST['howto'];
$id_value = $_POST['id'];

// Create a SQL statement to insert the data into the database
$query = "UPDATE recipes SET title = '{$title_value}', description = '{$description_value}', ingredients = '{$ingredients_value}', howto = '{$howto_value}' WHERE id = {$id_value}";

// Run the SQL statement
$result = mysqli_query($db_connection, $query);

// Check there are no errors with our SQL statement
if ($result) {
    redirect_to('/admin/recipes');
} else {
    $error_message = 'Recipe was not updated';
    redirect_to('/admin/recipes?error=' . $error_message);
}
