
<div class="centered" id="recipe-img">
    <?php echo "<img src=$img alt=''>"; ?>
</div>

<div class="page">
    <h2 class="grid_header">Ingredients</h2>
    <div class="recipe_list recipe_list_ul">
        <?php echo $recipe['ingredients']?>
    </div>
<div class="spacer"> </div>
    <h2 class="grid_header">How To Make</h2>

    <div class="recipe_list recipe_list_ol">
        <?php echo $recipe['howto']?>
    </div>
</div>