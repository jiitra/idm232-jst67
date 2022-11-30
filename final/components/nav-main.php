<?php
?>

<header>
    <div class="header_wrapper"> 
        <a class="header_link" href="index.php">
            visions of <b id="header_link_special">sugarplums</b>
        </a>

        <form action="<?php echo site_url(); ?>/admin/search" method="GET">
            <input type="text" name="search" id="search" placeholder="Search">
            <button type="submit">Search</button>
        </form>
    </div>
</header>