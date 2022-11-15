<?php
include __DIR__ . '/../app.php';

if (!$_POST) {
    die('Unauthorized');
}

// Store $_POST data to variables for readability
$title_value = $_POST['title'];
$description_value = $_POST['description'];
$ingredients_value = $_POST['ingredients'];
$howto_value = $_POST['howto'];

$result = add_recipe(
    $title_value,
    $description_value,
    $ingredients_value,
    $howto_value
);

// Check there are no errors with our SQL statement
if ($result) {
    redirect_to('/admin/recipes');
} else {
    $error_message = 'Sorry there was an error creating the user';
    redirect_to('/admin/users?error=' . $error_message);
}
