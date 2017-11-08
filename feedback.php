<?php
  ob_start();
  $location = 'contact';
  include 'inc/searchHeader.php';
  include 'inc/nav.php';

  if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = trim(filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING));
    $email = trim(filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL));
    $comment = trim(filter_input(INPUT_POST, 'comment', FILTER_SANITIZE_STRING));
    if ($name == '' || $email == '' || $comment == '') {
      $error = '<p class="error">Please Fill out the form properly</p>';
    }
    // TODO: Use php mailer class to send email to us from user
    if (!isset($error)) {
      header("Location:feedback.php?status=success");
    }
  }
?>
<section id="contact">
  <?php
    if (isset($_GET['status'])) {
      echo '<h1 class="form-success">Thanks for your valuebale comment.</h1>';
    } else {
  ?>
  <div class="container">
      <h2>Feedbacks Please</h2>
      <?php if (isset($error)) echo $error; ?>
      <div class="wrapper">
        <form action="feedback.php" method="POST">
          <label for="name">Full Name</label>
          <input type="text" name="name" id="name" value="<?php if (isset($name)) echo $_POST['name']; ?>">
          <label for="email">Email</label>
          <input type="email" name="email" id="email" value="<?php if (isset($email)) echo $_POST['email']; ?>">
          <label for="comment">Comment</label>
          <textarea name="comment" rows="8" cols="80" id="comment"><?php if (isset($comment)) echo $_POST['comment']; ?></textarea>
          <input type="submit" name="submit" value="submit">
        </form>
        <div class="form-notes" style="margin-left: 2em; margin-top: 2em;">
          <h2>Note: </h2>
          <p>Please donot send any un-necessary thigs us. The suggession might be of :</p>
          <ul>
            <li>Download Issues</li>
            <li>Request New Animes</li>
            <li>Website Bugs</li>
            <li>Others</li>
          </ul>
        </div>
      </div>
  </div>
<?php } ?>

</section>
<?php
  include 'inc/footer.php';
?>
