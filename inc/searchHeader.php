<?php
  include 'inc/data.php';
  include 'head.php'
?>
<section id="search-header">
  <a href="index.php">
    <h1>
      <?php
        for ($i=0; $i < strlen($web_name); $i++) {
      ?>
        <span style="color:<?php echo $colors[mt_rand(0, 8)]; ?>"><?php echo $web_name[$i] ?></span>
      <?php
        }
      ?>
    </h1>
  </a>
  <div class="box">
    <form action="output.php" method="get">
      <input class="search" type="text" name="name" placeholder="Enter anime name">
    </form>
  </div>
  <a href="output.php"><button class="opt-button">View All</button></a>
</section>
