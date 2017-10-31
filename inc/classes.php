<?php
  class ItemFunctions {
    public function getItemsByValue($name) {
      $query = 'SELECT id, title, description, genre
        FROM animeDetails
      ';
      if ($name != null) {
        $query = 'SELECT id, title, description, genre
          FROM animeDetails
          WHERE title LIKE ?';
      }
      $name =  '%' . trim($name) . '%';
      include 'connection.php';
      try {
        $result = $db->prepare($query);
        $result->bindParam(1, $name, PDO::PARAM_STR);
        $result->execute();
      } catch (Exception $e) {
        echo 'Unable to perform query ' . $e->getMessage();
        exit;
      }
      $catalog = $result->fetchAll(PDO::FETCH_ASSOC);
      return $catalog;
    }

    public function getItemByGenre($genre) {
      $query = 'SELECT id, title, description, genre
        FROM animeDetails
      ';
      if ($genre != null) {
        $query = 'SELECT id, title, description, genre
          FROM animeDetails
          WHERE genre LIKE ?';
      }
      $genre =  '%' . trim($genre) . '%';
      include 'connection.php';
      try {
        $result = $db->prepare($query);
        $result->bindParam(1, $genre, PDO::PARAM_STR);
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
      $output  = '';
      if (!empty($catalog)) {
        $genres  = explode(', ', $catalog['genre']);
        $output .= '<div class="list-content">';
        $output .= '<h3><a href=details.php?id=' . $catalog['id'] . '>' . $catalog['title'] . '</a></h3>';
        $output .= '<p>' . $catalog['description'] . '</p>';
        foreach ($genres as $key => $value) {
          $output .= '<small><a href="output.php?genre=' . $value . '">' . $value . '</a></small>';
        }
        $output .= '</div>';
      } else {
        $output .= '<div class="list-content">';
        $output .= '<h3 style="color: red;">No result Found</h3>';
        $output .= '<p style="font-weight:bolder;"><a href="output.php">View All</a></p>'; 
        $output .= '</div>';
      }
      return $output;
    }
  }
?>
