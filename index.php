<?php
    require_once './Models/product.php';
    require_once './Models/food.php';
    require_once './Models/toy.php';
    require_once './Models/bed.php';
    require_once 'db.php'

?>

<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-oop-2</title>
    <!--bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <!--fontawesome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <h1 class="text-center pt-4">PRODOTTI PER CANI E GATTI</h1>
    <h2 class="text-center pt-4">Cibo:</h2>
        <div class="d-flex d-row justify-content-around">

                <?php
                    foreach ($food as $singleFood) {
                ?>

                <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="<?= $singleFood->image ?>" alt="immagine prodotto">
                <div class="card-body">
                    <h5 class="card-title"><?= $singleFood->name ?></h5>
                    <p class="card-text">brand: <?= $singleFood->brand ?></p>
                    <?php 
                        if($singleFood->category == 'dog'){
                    ?>
                            <p>categoria: <i class="fa-solid fa-shield-dog"></i></p> 
                    <?php
                        } else if($singleFood->category == 'cat') {
                    ?>
                            <p>categoria: <i class="fa-solid fa-shield-cat"></i></p> 
                    <?php
                        }
                    ?>
                    <p class="card-text">prezzo: <?= $singleFood->price ?> &euro;</p>
                    <a href="#" class="btn btn-primary">Aggiungi al carrello</a>
                </div>
                </div>
                    
                <?php
                    }
                ?>

        </div>

        <h2 class="text-center pt-4">Giochi:</h2>
        <div class="d-flex d-row justify-content-around">

                <?php
                    foreach ($toys as $singleToy) {
                ?>

                <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="<?= $singleToy->image ?>" alt="immagine prodotto">
                <div class="card-body">
                    <h5 class="card-title"><?= $singleToy->name ?></h5>
                    <p class="card-text">tipo di gioco: <?= $singleToy->type ?></p>
                    <p class="card-text">materiale: <?= $singleToy->material ?></p>
                    <?php 
                        if($singleToy->category == 'dog'){
                    ?>
                            <p>categoria: <i class="fa-solid fa-shield-dog"></i></p> 
                    <?php
                        } else if($singleToy->category == 'cat') {
                    ?>
                            <p>categoria: <i class="fa-solid fa-shield-cat"></i></p> 
                    <?php
                        }
                    ?>
                    <p class="card-text">prezzo: <?= $singleToy->price ?> &euro;</p>
                    <a href="#" class="btn btn-primary">Aggiungi al carrello</a>
                </div>
                </div>
                    
                <?php
                    }
                ?>

        </div>

        <h2 class="text-center  pt-4">Cucce:</h2>
        <div class="d-flex d-row justify-content-around">

                <?php
                    foreach ($beds as $singleBed) {
                ?>

                <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="<?= $singleBed->image ?>" alt="immagine prodotto">
                <div class="card-body">
                    <h5 class="card-title"><?= $singleBed->name ?></h5>
                    <p class="card-text">forma: <?= $singleBed->shape ?></p>
                    <p class="card-text">colore: <?= $singleBed->color ?></p>
                    <p class="card-text">materiale: <?= $singleBed->material ?></p>
                    <?php 
                        if($singleBed->category == 'dog'){
                    ?>
                            <p>categoria: <i class="fa-solid fa-shield-dog"></i></p> 
                    <?php
                        } else if($singleBed->category == 'cat') {
                    ?>
                            <p>categoria: <i class="fa-solid fa-shield-cat"></i></p> 
                    <?php
                        }
                    ?>
                    <p class="card-text">prezzo: <?= $singleBed->price ?> &euro;</p>
                    <a href="#" class="btn btn-primary">Aggiungi al carrello</a>
                </div>
                </div>
                    
                <?php
                    }
                ?>

        </div>

    <!--bootstrap-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>