
<div class="centered" id="recipe-img">
    <?php echo "<img src=$img />"; ?>
</div>

<!-- static for now - change later -->
<div class="page">
    <h2 class="grid_header">Ingredients</h2>
    <ul class="recipe_list recipe_list_ul">
    <?php echo $recipe['ingredients']?>
    </ul>
<div class="spacer"> </div>
    <h2 class="grid_header">How To Make</h2>

    <ol class="recipe_list recipe_list_ol">
        <?php echo $recipe['howto']?>
    </ol>
</div>