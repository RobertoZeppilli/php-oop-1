<?php 

require __DIR__ . "/classes/movie.php";
require __DIR__ . "/data/data.php";

$movies = [
    $movie1 = new Movie("Strade Perdute", "Noir", $plot1, $urlPoster1, "1990", $actors1, $flag, 9),
    $movie2 = new Movie("Mulholland Drive", "Noir", $plot2, $urlPoster2, "1992", $actors2, $flag, 8),
    $movie3 = new Movie("The Square", "Drammatico", $plot3, $urlPoster3, "2017", $actors3, $flag2, 8.5),
    $movie4 = new Movie("Forza Maggiore", "Drammatico", $plot4, $urlPoster4, "2014", $actors4, $flag2, 8.4)
];

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">
        <link rel="stylesheet" href="css/style.css">
        <title>Lista Film</title>
    </head>
    <body>
        <?php require __DIR__ . "/partials/header.php" ?>

        <main>
            <section class="movies">
                <?php foreach($movies as $movie) {?>
                    <div class="movie">
                        <div class="movie-inner">
                            <div class="movie-front">
                                <img src="<?= $movie->poster ?>" alt="<?= $movie->title ?>">
                            </div>
                            <div class="movie-back">
                                <h2><?= $movie->title ?></h2>
                                <small><?= $movie->genre ?></small>
                                <p><span class="label plot">Trama </span><?= $movie->getExtract() ?></p>
                                <small class="year"><span class="label">Anno </span> <?= $movie->year ?></small>
                                <small class="actors"><span class="label">Cast </span> <?= $movie->getActors() ?></small> 
                                <div class="info">
                                    <img class="flag" src="<?= $movie->language ?>" alt="Lingua">
                                    <small><span class="label">Voto </span> <?= $movie->rating ?></small>
                                </div>
                            </div>
                        </div>
                    </div> 
                <?php }?>
            </section>
        </main>
    </body>
</html>