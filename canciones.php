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

    <main class="conteiner mt-5">
        <?php
          require_once 'albunes.php';
          $id->$_GET['id'];
          $album->$albunes[$id];
        ?>

        <section class="album">
         <img src="<?php echo $album->imagen ?>" alt="..">
         <h5 class="card-title"><?php echo $album->titulo?></h5>
         <p class="card-title"><?php echo $album->canciones?></p>
        </section>


    </main>


    
</body>
</html>