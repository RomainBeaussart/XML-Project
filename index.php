<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Projet XML</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href='https://fonts.googleapis.com/css?family=Nunito:400,300,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="asset/css/commun.css">
    <link rel="stylesheet" href="asset/css/index.css">


</head>

<body>

    <?php
    
    include ('request.php');
    $movies = getRequest('http://localhost:8080/AleauCine/rest/moovie/getall');
    ?>

    <!-- NavBar -->
    <header>
        <?php include('asset/int/header.php'); ?>
    </header>
    <!-- NavBar -->


    <!-- Body -->
    <div class="container">
        <div class="head">
            <div id="containerHeader">
                Anything about
                <div id="flip">
                    <div>
                        <div>a movie ?</div>
                    </div>
                    <div>
                        <div>an actor ?</div>
                    </div>
                    <div>
                        <div>a movie theater ?</div>
                    </div>
                </div>
                Everything is on Filmoscope !
            </div>
        </div>

        <?php
        foreach($movies as $movie){
            $m = array(
                'id' => $movie->id,
                'title' => $movie->name,
                'desc' => $movie->description,
                'time' => $movie->duration,
                'img' => $movie->img,
            );
        ?>


        <div class="o-wrapper">
            <a href="#<?php echo $m['id']; ?>">
                <div class="c-movie-card">
                    <div class="c-movie-card__img" style="background-image: url(<?php echo $m['img']; ?>);"></div>
                    <div class="c-movie-card__btn-cont">
                        <span class="c-movie-card__rating ">
                            <?php echo $m['time']; ?>min
                        </span>
                        <div class="btn--lrg ">
                        </div>
                    </div>
                    <div class="c-movie-card__content ">
                        <h1 class="c-movie-card__title">
                            <?php echo $m['title']; ?>
                        </h1>
                        <p class="c-movie-card__description">
                            <?php echo $m['desc']; ?>
                        </p>
                    </div>
                </div>
            </a>
        </div>

        <?php } ?>

    </div>

    <script src="js/navbar.js"></script>
</body>

</html>
