<?php
include_once 'components/header.php';

if (!isset($header)){

    $header = 'blah';
}

if (!isset($caption)){

    $caption = '';
}
?>



<section id="page_title" class="centered">
    <h1><?php echo $header; ?></h1>
    <p><?php echo $caption; ?></p>
</section>