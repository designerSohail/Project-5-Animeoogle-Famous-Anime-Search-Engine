<?php
  include 'inc/searchHeader.php';
  include 'inc/classes.php';
  $id       = $_GET['id'];
  $getItem  = new ItemFunctions();
  $showItem = new ShowFunctions();
  $catalog  = $getItem->getItemById($id);
?>
<section id="details" style="margin-top: 110px;">
  <div class="wrapper">
    <h3 class="breadcrumbs"><?php
      foreach ($catalog as $key => $value) {
        $genres =  explode(', ', $value['genre']);
        foreach ($genres as $key => $genre) {
          echo '<a href="output.php?genre=' . $genre . '">' . $genre . '</a>, ';
        }
        echo '  / ' . $value['title'];
      }
     ?></h3>
    <div class="column-details">
      <div class="item-cover-image">
        <img src="<?= $catalog[0]['src']; ?>" alt="Cover Image">
      </div>
      <div class="item-details">
        <table>
          <?php
            foreach ($catalog as $key => $value) {
              echo $showItem->getDetailsById($value);
            }
          ?>
        </table>
      </div>
    </div>
    <h2 style="margin-top: 2em;">Downloads</h2><br>
    <p>
      Please <a href="#signup.php">Sign Up</a> or <a href="#login.php">login</a> to Download Seasons and Episodes.(This feature is comming soon.)
    </p>
  </div>
</section>
<?php
  include 'inc/footer.php';
?>
