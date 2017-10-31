<?php
  include 'inc/searchHeader.php';
  include 'inc/classes.php';
  $item     = new ItemFunctions();
  $showItem = new ShowFunctions();
?>
<section id="main-contents">
  <?php
    $name = $genre = null;
    $empty = array();
    if (isset($_GET) && !empty($_GET)) {
      if (isset($_GET['name'])) {
        $value  = $_GET['name'];
        $catalog  = $item->getItemsByValue($value);
      }
      if (isset($_GET['genre'])) {
        $genre = $_GET['genre'];
        $catalog = $item->getItemByGenre($genre);
      }
    } else {
      $catalog = $item->getItemsByValue($name);
    }
    if (!empty($catalog)) {
      foreach ($catalog as $key => $value) {
        echo $showItem->getListItem($value);
      }
    } else {
      echo $showItem->getListItem($empty);
    }
  ?>

</section>
<?php
  include 'inc/footer.php';
?>
