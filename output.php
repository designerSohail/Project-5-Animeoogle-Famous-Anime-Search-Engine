<?php
  include 'inc/searchHeader.php';
  include 'inc/classes.php';
?>
<section id="main-contents">
  <?php
    $value    = $_GET['name'];
    $item     = new ItemFunctions();
    $catalog  = $item->getItemsByValue($value);
  ?>
</section>
<?php
  include 'inc/footer.php';
?>
