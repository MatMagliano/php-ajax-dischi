<?php
  include 'server.php';

?>



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
  <main>
    <div class="wrapper">
      <?php foreach ($db as $faq) { ?>
          <img src="<?php echo $faq['poster']; ?>" alt="">
          <h2><?php echo $faq['title']; ?></h2>
          <p><?php echo $faq['author']; ?></p>
          <p><?php echo $faq['year']; ?></p>


        <?php } ?>
    </div>
  </main>
</body>
</html>
