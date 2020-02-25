<?php
  include 'server.php';

?>



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="dist/app.css">
  <title>Spotify-php</title>
</head>
<body>
  <header>
    <div class="nav">
      <img src="img/logo-small copia.svg" alt="">
    </div>
  </header>
  <main>

    <div class="wrapper">
        <?php foreach ($db as $album) { ?>
          <div class="album">
            <img src="<?php echo $album['poster']; ?>" alt="">
            <h4><?php echo $album['title']; ?></h4>
            <p><?php echo $album['author']; ?></p>
            <p><?php echo $album['year']; ?></p>
          </div>
          <?php } ?>
    </div>
  </main>
</body>
</html>
