<?php 

$db_host = $APP_CONFIG['database_host'];
$db_user = $APP_CONFIG['database_user'];
$db_pass = $APP_CONFIG['database_pass'];
$db_name = $APP_CONFIG['database_name'];
$db_connection = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

//safety check
if (mysqli_connect_errno()) {
    die('Database connection failed: ' .
      mysqli_connect_error() .
      ' (' . mysqli_connect_errno() . ')'
    );
}

?>