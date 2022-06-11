<?php 

require_once  __DIR__.  './data/db_dischi.php';

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
  <!-- /Bootstrap -->
  
  <link rel="stylesheet" href="./css/style.css">
  <title>PHP Ajax Dischi</title>
</head>

<body>

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

    <div class="container d-flex flex-wrap">

      <!-- card -->
      <?php foreach($discs as $disc): ?>
      
      <div class="_card text-center px-3 pb-0 mb-4">
        <div class="card-content pt-3 px-3 mb-4">
          
          <img src="<?php echo $disc['poster'] ?>" alt="img" class="mb-2">
          
          <p class="title text-uppercase"><?php echo $disc['title'] ?></p>
          <p class="author mb-0"><?php echo $disc['author'] ?></p>
          <p class="year"><?php echo $disc['year'] ?></p>
        </div>
      </div>
      
      <?php endforeach; ?>
      <!-- /card -->   
    </div>

  </main>

</body>
</html>