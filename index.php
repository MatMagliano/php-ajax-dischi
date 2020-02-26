<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css" integrity="sha256-mmgLkCYLUQbXn0B1SRqzHar6dCnv9oZFPEC1g1cwlkk=" crossorigin="anonymous" />
  <link rel="stylesheet" href="dist/app.css">
  <title>Spotify Ajax</title>
</head>
<body>
  <header>
    <div class="nav">
      <img src="img/logo-small copia.svg" alt="">
      <div class="search">
        <i class="fas fa-search"></i>
        <input class="search-input" type="text" name="" value="" placeholder="Ricerca artista">
      </div>
    </div>
  </header>
  <main>
    <div class="wrapper"></div>
  </main>



  <!-- TEMPLATE -->
  <script id="albums-template" type="text/x-handlebars-template">
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
