<?php

/**
 * get all RECIPES from the database
 * @return object - mysqli_result
 */
function get_recipes()
{
    global $db_connection;
    $query = 'SELECT * FROM recipes';
    $result = mysqli_query($db_connection, $query);
    return $result;
}

/**
 * Insert a user into the database
 * @param  string $first_name - first name of the user
 * @param  string $last_name - last name of the user
 * @param  string $email - email of the user
 * @param  string $phone - phone number of the user
 * @return object - mysqli_result
 */
function add_recipe($title_value, $description_value, $ingredients_value, $howto_value)
{
    global $db_connection;
    $query = 'INSERT INTO recipes';
    $query .= ' (title, description, ingredients, howto)';
    $query .= " VALUES ('$title', '$description', '$ingredients', '$howto')";

    $result = mysqli_query($db_connection, $query);
    return $result;
}
