<?php
  $colors = array(
    '#1abc9c',
    '#2ecc71',
    '#3498db',
    '#9b59b6',
    '#34495e',
    '#f1c40f',
    '#e67e22',
    '#e74c3c',
    '#7f8c8d'
  );
  $web_name = 'Animeoogle';
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Animeoogle</title>
    <link href="https://fonts.googleapis.com/css?family=Metal+Mania|Open+Sans" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
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
          <form action="output.php" method="post">
            <input type="text" name="name" placeholder="Enter anime name">
          </form>
        </div>
      </center>
    </div>
  </body>
</html>
