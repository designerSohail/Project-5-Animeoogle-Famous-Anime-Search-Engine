<?php
  class ItemFunctions {
    public function getItemsByValue($value) {
      $value =  '%' . trim($value) . '%';
      include 'connection.php';
      try {
        $result = $db->prepare('SELECT title, description, genre
          FROM animeDetails
          WHERE title LIKE ?
        ');
        $result->bindParam(1, $value, PDO::PARAM_STR);
        $result->execute();
      } catch (Exception $e) {
        echo 'Unable to perform query ' . $e->getMessage();
        exit;
      }
      $catalog = $result->fetchAll(PDO::FETCH_ASSOC);
      return $catalog;
    }
  }
  
?>
