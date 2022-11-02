<?php 

$db_host = 'localhost';
$db_user = 'root';
$db_pass = 'root';
$db_name = 'local_idm232';
$connection = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

//safety check
if (mysqli_connect_errno()) {
    die('Database connection failed: ' .
      mysqli_connect_error() .
      ' (' . mysqli_connect_errno() . ')'
    );
}

$query = 'SELECT * FROM recipes';
$result = mysqli_query($connection, $query);

if (!$result) {
    die('Database query failed.');
}


$page_title = 'Home';  
$header = 'Recipes';
$caption = 'All the recipes you love, at your fingertips.';
$card_text = 'Cookies';
$img = "img/cookies.png";

include_once 'components/header.php';?>

<?php include 'components/big_header.php'; ?>
<h2 class="centered grid_header">Categories </h2>
<?php include 'components/grid.php'; ?>

<?php include_once 'components/footer.php'; ?>