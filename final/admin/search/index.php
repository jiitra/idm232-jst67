<?php
include_once __DIR__ . '/../../app.php';
$page_title = 'Search Recipes';
include_once __DIR__ . '/../../components/header.php';
$recipes = get_recipes();

// Check if search exist in query
if (isset($_GET['search'])) {
    $search = $_GET['search'];
} else {
    $search = '';
}

$query = 'SELECT *';
$query .= ' FROM recipes';
$query .= " WHERE title LIKE '%{$search}%'";
$query .= " OR description LIKE '%{$search}%'";
$query .= " OR ingredients LIKE '%{$search}%'";
$query .= " OR howto LIKE '%{$search}%'";

$result = mysqli_query($db_connection, $query);
if ($result->num_rows > 0) {
    $recipes_result = true;
} else {
    $recipes_result = false;
}

$header = "Search Results";
$caption = "You searched for: <strong> $search </strong>";

?>
<?php include __DIR__ . '/../../components/big_header.php'; ?>

<?php
    // If no results, echo no results
    if (!$recipes_result) {
        echo '<p class="centered">No results found</p>';
    }
?>

<?php
// If error query param exist, show error message
  if (isset($_GET['error'])) {
      echo '<p>' . $_GET['error'] . '</p>';
  }?>

<section class="grid">
    <?php
    $site_url = site_url();

      if ($recipes_result) {
          while ($recipes_result = mysqli_fetch_assoc($result)) {
            $card_text = $recipes_result['title'];
            $img = $recipes_result['img'];
            echo "<a href='{$site_url}/recipe.php?id={$recipes_result['id']}'>
            <div class='card'>
                <img src='../../$img'/>
                <h1>$card_text</h1>
            </div>
            </a>";
          }
      }
?>
</section>

  </div>
</div>



<?php include_once __DIR__ . '/../../components/footer.php';
?>