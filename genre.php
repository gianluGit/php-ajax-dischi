<?php
  header('Content-Type: application/json');

  include 'data_disc.php';


  $resp = $data['response'];

  $vGenre = $_GET['genre'];

  $database = [];

  if ($vGenre == 'All') {

    $database = $resp;

  } else {

    foreach ($resp as $disc) {

      if ($disc['genre'] == $vGenre) {

        $database[] = $disc;



      }

    }



  }

  echo json_encode($database);


?>
