<?php
  class ItemFunctions {
    public function getItemsByValue($value) {
      $value =  '%' . trim($value) . '%';
      include 'connection.php';
      try {
        $result = $db->prepare('SELECT id, title, description, genre
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
  class ShowFunctions {
    public function getListItem($catalog) {
      $genres  = explode(' ', $catalog['genre']);
      $output  = '';
      $output .= '<div class="list-content">';
      $output .= '<h3><a href=details.php?id="' . $catalog['id'] . '">' . $catalog['title'] . '</a></h3>';
      $output .= '<p>' . $catalog['description'] . '</p>';
      foreach ($genres as $key => $value) {
        $output .= '<small><a href="output.php?genre=' . $value . '">' . $value . '</a></small>';
      }
      $output .= '</div>';
      return $output;
    }
  }
?>
