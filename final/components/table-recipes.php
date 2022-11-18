<?php
if (!isset($recipes)) {
    echo '$recipes variable is not defined. Please check the code.';
}
?>
<table>
  <thead>
    <tr>
      <th>ID</th>
      <th>Title</th>
      <th>Description</th>
      <th>Ingredients</th>
      <th>How To</th>
      <th>Image</th>
      <th>
        <span >Edit</span>
      </th>
    </tr>
  </thead>
  <tbody>
    <?php
    // Cant combine functions with string so we have to assign the function to a variable here.
    $site_url = site_url();
    while ($recipe = mysqli_fetch_array($recipes)) {
        echo "
          <tr>
            <td>{$recipe['id']}</td>
            <td>{$recipe['title']}</td>
            <td>{$recipe['description']}</td>
            <td>{$recipe['ingredients']}</td>
            <td>{$recipe['howto']}</td>
            <td>{$recipe['img']}</td>
            <td >
              <a href='{$site_url}/admin/recipes/edit.php?id={$recipe['id']}'>Edit</a>
              <a href='{$site_url}/admin/recipes/delete.php?id={$recipe['id']}' >Delete</a>
            </td>
          </tr>";
    }
?>
  </tbody>
</table>