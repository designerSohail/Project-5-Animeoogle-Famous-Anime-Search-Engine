<?php
  include 'inc/searchHeader.php';
  include 'inc/classes.php';
  $id       = $_GET['id'];
  $getItem  = new ItemFunctions();
  $showItem = new ShowFunctions();
  $catalog  = $getItem->getItemById($id);
?>
<section id="details">
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
        <img src="https://orig00.deviantart.net/4816/f/2008/041/9/b/naruto_volume_41_cover_by_kuumi.jpg" alt="Cover Image">
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
