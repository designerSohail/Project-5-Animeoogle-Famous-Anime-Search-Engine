<?php
  ob_start();
  if (isset($_GET['name'])) {
    $_SESSION['arg'] = '?name=' . $_GET['name'];
  }
  if (isset($_GET['genre'])) {
    $_SESSION['arg'] = '?genre=' . $_GET['genre'];
  }
  if (empty($_GET)) {
    $_SESSION['arg'] = '';
  }
?>
<section id="nav">
  <ul>
    <li><a<?php if($location=='home') echo ' class="active"'?> href="output.php<?php echo $_SESSION['arg']; ?>">Home</a></li>
    <li><a<?php if($location=='images') echo ' class="active"'?> href="images.php<?php echo $_SESSION['arg']; ?>">Images</a</li>
    <li><a<?php if($location=='videos') echo ' class="active"'?> href="videos.php<?php echo $_SESSION['arg']; ?>">Videos</a></li>
    <li><a<?php if($location=='contact') echo ' class="active"'?> href="contact.php">Contact</a></li>
  </ul>
</section>
