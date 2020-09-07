<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style.css">

    <title>Disc php</title>
  </head>
  <body>
    <div class="navbar">

    </div>
    <div id="target">
      <?php
      include 'data_disc.php';

      $resp = $data['response'];

      foreach ($resp as $disc) {
        ?>
          <div class="disc-container">
            <img src="<?php echo $disc['poster']; ?>" alt="">
            <h4><?php echo $disc['title']; ?></h4>
            <span><?php echo $disc['author']; ?></span>
            <span><?php echo $disc['genre']; ?></span>
            <span><?php echo $disc['year']; ?></span>

          </div>
        <?php
      }
      ?>
    </div>
  </body>
</html>
