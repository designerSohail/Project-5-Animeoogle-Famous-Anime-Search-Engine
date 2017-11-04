<?php
  $location = 'home';
  include 'inc/searchHeader.php';
  include 'inc/nav.php';
  include 'inc/classes.php';
  $getItem  = new ItemFunctions();
  $showItem = new ShowFunctions();
?>
<section id="main-contents" style="margin-top: 110px;">
  <?php
    $name = $genre = null;
    $empty = array();
    if (isset($_GET) && !empty($_GET)) {
      if (isset($_GET['name'])) {
        $name  = $_GET['name'];
        $catalog  = $getItem->getItemsByValue($name);
      }
      if (isset($_GET['genre'])) {
        $genre = $_GET['genre'];
        $catalog = $getItem->getItemByGenre($genre);
      }
    } else {
      $catalog = $getItem->getItemsByValue($name);
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
