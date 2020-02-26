<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="dist/app.css">
  <title>Spotify Ajax</title>
</head>
<body>
  <header>
    <div class="nav">
      <img src="img/logo-small copia.svg" alt="">
    </div>
  </header>
  <main>
    <div class="wrapper"></div>
  </main>



  <!-- TEMPLATE -->
  <script id="entry-template" type="text/x-handlebars-template">
    <div class="album">
      <img src="{{poster}}" alt="">
      <h4>{{title}}</h4>
      <p class="author">{{author}}</p>
      <p class="year">{{year}}</p>
    </div>
  </script>

  <script src="dist/app.js" charset="utf-8"></script>
</body>
</html>
