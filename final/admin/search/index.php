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

$results = mysqli_query($db_connection, $query);
if ($results->num_rows > 0) {
    $recipes_results = true;
} else {
    $recipes_results = false;
}

?>

<h1 >Search Results</h1>
    <form action="<?php echo site_url(); ?>/admin/search" method="GET">
        <input type="text" name="search" id="search" placeholder="Search"
        value="<?php echo $search; ?>">
        <button type="submit">Search</button>
    </form>
    <h2>You searched for "<?php echo $search; ?>"</h2>
    <?php
    // If no results, echo no results
    if (!$recipes_results) {
        echo '<p>No results found</p>';
    }
?>
        <?php
// If error query param exist, show error message
  if (isset($_GET['error'])) {
      echo '<p>' . $_GET['error'] . '</p>';
  }?>

    <?php
      if ($recipes_results) {
          while ($recipes_results = mysqli_fetch_assoc($results)) {
              echo '<h2>' . $recipes_results['title'] . '</h2>';
          }
      }
?>

  </div>
</div>



<?php include_once __DIR__ . '/../../components/footer.php';
?>