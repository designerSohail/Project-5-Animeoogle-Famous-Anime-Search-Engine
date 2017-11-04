<?php
  ob_start();
  $get = '';
  if (isset($_GET['name'])) {
    $_SESSION['arg'] = $_GET['name'];
    $get = '?name=' . $_SESSION['arg'];
  }
  if (isset($_GET['genre'])) {
    $_SESSION['arg'] = $_GET['genre'];
    $get = '?genre=' . $_SESSION['genre'];
  }
  if (empty($_GET)) {
    $_SESSION['arg'] = '';
  }
?>
<section id="nav">
  <ul>
    <li><a<?php if($location=='home') echo ' class="active"'?> href="output.php<?= $get; ?>">Home</a></li>
    <li><a<?php if($location=='images') echo ' class="active"'?> href="images.php<?= $get; ?>">Images</a</li>
    <li><a<?php if($location=='videos') echo ' class="active"'?> href="videos.php<?= $get; ?>">Videos</a></li>
    <li><a<?php if($location=='contact') echo ' class="active"'?> href="contact.php">Contact</a></li>
  </ul>
</section>
