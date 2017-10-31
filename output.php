<?php
  include 'inc/searchHeader.php';
  include 'inc/classes.php';
?>
<section id="main-contents">
  <?php
    $value    = $_GET['name'];
    $item     = new ItemFunctions();
    $showItem = new ShowFunctions();
    $catalog  = $item->getItemsByValue($value);
    foreach ($catalog as $key => $value) {
      echo $showItem->getListItem($value);
    }
  ?>

</section>
<?php
  include 'inc/footer.php';
?>
