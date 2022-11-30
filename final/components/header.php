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
    <!-- include full url path when linking  -->
    <meta charset="UTF=8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?php echo $document_title; ?></title>
    <link rel="stylesheet" href="reset.css"/>
    <link rel="icon" type="image/png" href="img/favicon.png" />
    <style>
    <?php include "style.css" ?>
    </style>
    <!-- <link rel="stylesheet" href="<?php echo site_url(); ?>styles.css?v=<?php echo time(); ?>"/> -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:400,700">

</head>
 


<body>
    <?php include 'nav-main.php'?>
    <script src="main.js"></script>
</body>
</html>