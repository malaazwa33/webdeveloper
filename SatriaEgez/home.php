
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="icon" type="image/png" href="image/icons/favicon.ico"/>
    <style>
    body{
      background-image: url(image/bg-01.jpg)
    }
    </style>
    <title>Home</title>
  </head>
  <body id="page-top">
 
  <div>
  <nav class="navbar navbar-expand-lg navbar-primary bg-dark fixed-top">
  <div class="container">
  <a class="navbar-brand font-weight-bold" href="index.php">PT  COVER</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="login.php">LOGIN <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="harga.php">HARGA</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="profil.php">PROFIL</a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
      </li>
    </ul>
  </div>
  </div>
  </nav>
  <br> <br> <br> <br>

  <div class="container mt-8">
  <div class="row mt-3">
  <?php for ($i = 1; $i < 11; $i++){?>
  
    <div class="container card" style="width: 18rem;">
  <img src="image/cover5.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Cover <?php echo $i?></h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>
  <?php }
  ?>
  </div>
  </div>

  
  </body>
</html>