<?php
include_once 'components/header.php';

if (!isset($card_text)){

    $header = 'blah';
}

if (!isset($img)){

    $img = '';
}
?>


<section class="grid">
    <a href='pages/recipes.php'>
        <div class="card">
            <?php echo "<img src=$img />"; ?>
            <h1><?php echo $card_text; ?> </h1>
        </div>
    </a>

    <a href="">
        <div class="card">
            <?php echo "<img src=$img />"; ?>
            <h1><?php echo $card_text; ?> </h1>
        </div>
    </a>

    <a href="">
        <div class="card">
            <?php echo "<img src=$img />"; ?>
            <h1><?php echo $card_text; ?> </h1>
        </div>
    </a>

    <a href="">
    <div class="card">
        <?php echo "<img src=$img />"; ?>
        <h1><?php echo $card_text; ?> </h1>
    </div>
    </a>

    <a href="">
    <div class="card">
        <?php echo "<img src=$img />"; ?>
        <h1><?php echo $card_text; ?> </h1>
    </div>
    </a>

    <a href="">
    <div class="card">
        <?php echo "<img src=$img />"; ?>
        <h1><?php echo $card_text; ?> </h1>
    </div>
    </a>

    <a href="">
        <div class="card">
                <?php echo "<img src=$img />"; ?> 
                <h1><?php echo $card_text; ?> </h1>
        </div>
    </a>

    <a href="">
        <div class="card">
            <?php echo "<img src=$img />"; ?>
            <h1><?php echo $card_text; ?> </h1>
        </div>
    </a>

</section>