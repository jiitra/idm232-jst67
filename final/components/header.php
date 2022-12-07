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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $document_title; ?></title>
    <link rel="stylesheet" href="<?php echo site_url(); ?>/reset.css?v=<?php echo time(); ?>">
    
    <link rel="icon" type="image/png" href=" <?php echo site_url();?>/img/favicon.png">


    <link rel="stylesheet" href="<?php echo site_url(); ?>/styles.css?v=<?php echo time(); ?>">

   
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:400,700">

    <script src="https://cdn.tiny.cloud/1/tpflc8aehr6pmt8cxudxkgy0wric0ltl4eptwin82fg9gpg2/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>

</head>
 


<body>
    <?php include 'nav-main.php'?>
    <script src="main.js"></script>
</body>
</html>