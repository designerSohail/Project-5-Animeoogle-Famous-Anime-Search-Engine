<?php
  include 'inc/data.php';
  include 'inc/head.php';
?>
<section id="main">
  <div class="wrapper">
    <center>
      <h1>
        <?php
          for ($i=0; $i < strlen($web_name); $i++) {
        ?>
          <span style="color:<?php echo $colors[mt_rand(0, 8)]; ?>"><?php echo $web_name[$i] ?></span>
        <?php
          }
        ?>
      </h1>
      <div class="box">
        <form action="output.php" method="get">
          <input type="text" name="name" placeholder="Enter anime name">
        </form>
      </div>
    </center>
  </div>
</section>
<?php
  include 'inc/footer.php';
?>
