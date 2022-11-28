<?php
if (!isset($card_text)){

    $header = 'blah';
}

if (!isset($img)){

    $img = '';
}
?>

<?php
    $site_url = site_url();
    while ($recipe = mysqli_fetch_array($recipes)) {
        $card_text = $recipe['title'];
        $img = $recipe['img'];
        echo "<a href=$link>
            <div class='card'>
                <img src=$img />
                <h1>$card_text</h1>
            </div>
        </a>";
    }
?>