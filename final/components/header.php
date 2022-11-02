<?php
if (!isset($page_title)){

    $page_title = 'blah';

}

$site_title = 'Visions of Sugarplums';
$document_title = $page_title . ' | ' . $site_title;

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF=8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?php echo $document_title; ?></title>
    <link rel="stylesheet" href="reset.css"/>
    <link rel="stylesheet" href="styles.css"/>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:400,700">

</head>
<header>
    <div class="header_wrapper"> 
        <a class="header_link" href="index.php">
            visions of <b id="header_link_special">sugarplums</b>
        </a>
    </div>
</header>

<body>
    <script src="main.js"></script>
</body>
</html>