<?php

if (!isset($header)){

    $header = 'blah';
}

if (!isset($caption)){

    $caption = '';
}
?>



<section id="page_title" class="centered">
    <h1><?php echo $header; ?></h1>
    <div id="caption-div">
        <p><?php echo $caption; ?></p>
    </div>
</section>