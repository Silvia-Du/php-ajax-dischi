<?php 

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- fontawesom -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <!-- axios -->
  <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
  <!-- vue -->
  <script src="https://cdn.jsdelivr.net/npm/vue@2.5.16/dist/vue.js"></script>

  <link rel="stylesheet" href="./style.css">
  
  <title>PHP Ajax Dischi</title>
</head>
<body>

  <div id="app">
  <!-- header -->

  <header class="d-flex align-items-center justify-content-between px-3 py-2">
  <i class="fa-brands fa-spotify"></i>

  <select class="form-select" aria-label="Default select example">
    <option value="">Seleziona un genere</option>
    <option value="2">Two</option>
    <option value="3">Three</option>
  </select>

  </header>
  <!-- main -->
  <main class="pt-5">
    <div class="container debug d-flex">
      <!-- card -->
      <div class="_card debug text-center px-3 pb-0">
        <div class="card-content pb-5 pt-4 px-4 mb-4">

          <img src="https://img.discogs.com/vknPDdrqRbT92pNRX0W4I5N91jg=/fit-in/300x300/filters:strip_icc():format(jpeg):mode_rgb():quality(40)/discogs-images/R-1246953-1448927086-6590.jpeg.jpg" alt="img" class="mb-2">
  
          <p class="title text-uppercase">Titolo</p>
          <p class="author mb-0">Autore</p>
          <p class="year">anno</p>
        </div>
      </div>
      <!-- /card -->
      
    </div>

  </main>







  </div>




  <script src="./script.js"></script>
</body>
</html>