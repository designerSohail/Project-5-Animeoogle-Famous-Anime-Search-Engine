<?php
  try {
    $db = new PDO('mysql:host=localhost;dbname=Animeoogle', 'root', '');
  } catch (Exception $e) {
    echo 'Unable to connect with database ' . $e->getMessage();
    exit;
  }
?>
