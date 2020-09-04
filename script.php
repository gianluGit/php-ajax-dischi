<?php
  include 'data_disc.php';

  $resp = $data['response'];

  foreach ($resp as $disc) {

    echo "Poster: " . $disc['poster'] . '<br>';
    echo "Title: " . $disc['title'] . '<br>';
    echo "Author: " . $disc['author'] . '<br>';
    echo "Genre: " . $disc['genre'] . '<br>';
    echo "Year: " . $disc['year'] . '<br>';

    echo "<br><br>";

  }


?>
