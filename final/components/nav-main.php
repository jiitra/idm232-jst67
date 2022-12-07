<?php
?>

<header>
    <div class="header_wrapper"> 
        <a class="header_link" href="index.php">
            <p class="header_link">
                visions of <b class="header_link_special">sugarplums</b>
            </p>
        </a>

        <form action="<?php echo site_url(); ?>/admin/search" method="GET">
            <input id="search" type="text" name="search" id="search" placeholder="Search">
            <button class="margin" type="submit">Search</button>
        </form>
    </div>
</header>