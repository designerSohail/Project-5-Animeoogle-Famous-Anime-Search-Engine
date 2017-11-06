<?php
  ob_start();
  $location = 'images';
  include 'inc/classes.php';
  include 'inc/searchHeader.php';
  include 'inc/nav.php';
  $value = $_SESSION['arg'];
  $getItem  = new ItemFunctions();
  $showItem = new ShowFunctions();
  $catalog  = $getItem->getSrcByName($value);
?>
<section id="img-gallery">
  <?php
    foreach ($catalog as $key => $value) {
      echo '<img src="' . $value['src'] . '" alt="' . $value['title'] . '">';
    }
  ?>
</section>
<?php
  include 'inc/footer.php';
?>
