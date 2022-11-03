<?php


/*QUESTION: I don't know how to integrate the dynamic links with my project.
I understood the in-class example with text links, but I'm confused
because I'm using cards.
*/

/* $category_navigation = [
    [
        'title' => 'Bread',
        'url' => 'recipes.php',
    ],
    [
        'title' => 'Jam',
        'url' => 'recipes.php',
    ],
    [
        'title' => 'Cookies',
        'url' => 'recipes.php',
    ],
    [
        'title' => 'Pies',
        'url' => 'recipes.php',
    ],
]; */

include_once 'header.php';

if (!isset($card_text)){

    $header = 'blah';
}

if (!isset($img)){

    $img = '';
}
?>


<section class="grid">
    <?php echo "<a href=$link>" ?>
        <div class="card">
            <?php echo "<img src=$img />"; ?>
            <h1><?php echo $card_text; ?> </h1>
        </div>
    </a>

    <?php echo "<a href=$link>" ?>
        <div class="card">
            <?php echo "<img src=$img />"; ?>
            <h1><?php echo $card_text; ?> </h1>
        </div>
    </a>

    <?php echo "<a href=$link>" ?>
        <div class="card">
            <?php echo "<img src=$img />"; ?>
            <h1><?php echo $card_text; ?> </h1>
        </div>
    </a>

    <?php echo "<a href=$link>" ?>
    <div class="card">
        <?php echo "<img src=$img />"; ?>
        <h1><?php echo $card_text; ?> </h1>
    </div>
    </a>

    <?php echo "<a href=$link>" ?>
    <div class="card">
        <?php echo "<img src=$img />"; ?>
        <h1><?php echo $card_text; ?> </h1>
    </div>
    </a>

    <?php echo "<a href=$link>" ?>
    <div class="card">
        <?php echo "<img src=$img />"; ?>
        <h1><?php echo $card_text; ?> </h1>
    </div>
    </a>

    <?php echo "<a href=$link>" ?>
        <div class="card">
                <?php echo "<img src=$img />"; ?> 
                <h1><?php echo $card_text; ?> </h1>
        </div>
    </a>

    <?php echo "<a href=$link>" ?>
        <div class="card">
            <?php echo "<img src=$img />"; ?>
            <h1><?php echo $card_text; ?> </h1>
        </div>
    </a>

</section>