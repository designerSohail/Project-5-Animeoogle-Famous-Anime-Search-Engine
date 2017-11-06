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
    $value = null;
    $empty = array();
    if (isset($_GET) && !empty($_GET)) {
      $value = $_GET['name'] ? $_GET['name'] : $_GET['genre'];
    }
    $catalog = $getItem->getItems($value);
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
