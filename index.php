<!DOCTYPE html>
<html lang="en">

<!-- head -->
<head>
    <meta charset="UTF-8">
    <base href="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>MUSICALLY</title>
</head>

<body>
    <!-- main header -->
    <header>
        <nav class="navbar navbar-expand-lg bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="home">MUSICALLY</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="home">Canciones</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="artistas">Artistas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="album">Album</a>
                    </li>
                </ul>
                </div>
            </div>
            </nav>
    </header>

      <!-- main section -->
      <main class="container mt-5">
        <section class="albunes">
          <?php
          //se incluye el archivo donde se definen los contenidos de los albunes
          require_once 'albunes.php';

          for($i=0; $i<- count($albunes); $i++){
           $album=$albunes[$i];
           ?>
           <div class= "card">
              <img src="<?php echo $album->imagen ?>" alt="..">
              <div class="card-body">
                <h5 class="card-title"><?php echo $album->titulo?></h5>
                <p class="card-title"><?php echo $album->artista?></p>
                <a href="album.php?id=<?php echo $i ?>" class="btn btn-outline-primary">Open</a>
              </div>
           </div>
         <?php
          }
          ?>
        </section>
      </main>


      <footer>
        <section class="cont-footer">
          <div>
            <ul>
              <li>Sponsors</li>
              <li>Prensa</li>
           </ul>
          </div>
          <div >Ayuda
            <ul>
              <li>Contacto</li>
              <li>Información</li>
           </ul>
          </div>
          <div>Follow Us
            <a href="https://api.instagram.com/" target="_blank"><i class="bii bi-instagram text-black"></i></a>
            <a href="https://es-la.facebook.com/" target="_blank"><i class="bii bi-facebook text-black"></i></a>
            <a href="https://twitter.com/?lang=es" target="_blank"><i class="bii bi-twitter text-black"></i></a>
          </div>
        </section> 
      </footer>

      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>  
</body>
</html>