<?php
  class ItemFunctions {
    public function getItemsByValue($name) {
      $query = 'SELECT id, title, description, genre
        FROM animeDetails ORDER BY title ASC
      ';
      if ($name != null) {
        $query = 'SELECT id, title, description, genre
          FROM animeDetails
          WHERE title LIKE ? ORDER BY title ASC';
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
        FROM animeDetails ORDER BY title ASC
      ';
      if ($genre != null) {
        $query = 'SELECT id, title, description, genre
          FROM animeDetails
          WHERE genre LIKE ? ORDER BY title ASC';
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
    public function getItemById($id) {
      include 'connection.php';
      $query = 'SELECT * FROM animeDetails
        WHERE id = ?';
      try {
        $result = $db->prepare($query);
        $result->bindParam(1, $id, PDO::PARAM_INT);
        $result->execute();
      } catch (Exception $e) {
        echo 'Unable to perform query ' . $e->getMessage();
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
          $output .= '<a href="output.php?genre=' . $value . '"><small>' . $value . '</small></a>';
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
    public function getDetailsById($item) {
      $genres = explode(', ', $item['genre']);
      $output  = '';
      $output .= '<tr>';
      $output .= '  <th>Name</th>';
      $output .= '  <td>' . $item['title'] . '</td>';
      $output .= '</tr>';
      $output .= '<tr>';
      $output .= '  <th> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Description</th>';
      $output .= '  <td>' . $item['description'] . '</td>';
      $output .= '</tr>';
      $output .= '<tr>';
      $output .= '  <th>Genres</th>';
      $output .= '  <td>';
        foreach ($genres as $key => $genre) {
          $output .= '<a href="output.php?genre=' . $genre . '">' . $genre . '</a>, ';
        }
      $output .=  '</td>';
      $output .= '</tr>';
      $output .= '<tr>';
      $output .= '  <th>Ratings</th>';
      $output .= '  <td>' . $item['ratings'] . '</td>';
      $output .= '</tr>';
      return $output;
    }
  }
?>
