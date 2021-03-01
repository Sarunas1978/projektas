<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
          integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="style/style.css">

    <title>MVC</title>
</head>
<body >

<header>
    <div class="d-flex  justify-content-center">
    <nav class="navbar navbar-expand-sm navbar-dark bg-danger nav">
        <a class="navbar-brand" href="#">Almost<strong>Lara</strong></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-link" href="/">Home</a>
                <a class="nav-link" href="/about">About</a>
                <a class="nav-link" href="/contact">Contact</a>
            </div>
    <!--        when not logged in -->
            <?php if(!\app\core\Session::isUserLoggedIn()) : ?>
            <div class="navbar-nav ml-auto ">
                <a class="nav-link" href="/login">Login</a>
                <a class="nav-link" href="/register">Register</a>
            </div>
            <?php else : ?>
    <!--        when logged in -->
            <div class="navbar-nav ml-auto ">
                <a class="nav-link disabled" href="#"><?php echo $_SESSION['user_email'] ?></a>
                <a class="nav-link" href="/logout">Logout</a>
            </div>

            <?php endif; ?>

        </div>
    </nav>
    </div>
    
</header>

<!-- IMAGE ADDED -->
<div class="foto"></div>

<div class="d-flex justify-content-around"> 
    <div id="change400" class="containerMain d-flex justify-content-center p-5">
        <div class="container_small m-1">
            <div >
                <img class="image_service"  src="img/ball.jpg" alt="">
            </div>
            <div class="title_service m_r_l ">
                mouse
            </div>
            <div class="m_r_l">
                nieko
            </div>
        </div>
        <div class="container_small m-1">
            <div >
                <img class="image_service"  src="img/ball.jpg" alt="">
            </div>
            <div class="title_service m_r_l ">
                dog
            </div>
            <div class="m_r_l">
            loja niekorger5gh refgergerhger therthgetrhteh  rthtrehterh t htht
            </div>
        </div>
        <div class="container_small m-1">
            <div >
                <img class="image_service"  src="img/ball.jpg" alt="">
            </div>
            <div class="title_service m_r_l ">
                cat
            </div>
            <div class="m_r_l">
                miaukia
            </div>
        </div>
    </div>
</div>

<footer class="bg-danger d-flex justify-content-center text-light">
    <div class=" align-self-center" >
        &copy; 2021. Šarūnas Malinauskas, all rights reserved.
    </div>
</footer>






<!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
<!-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx"
        crossorigin="anonymous"></script> -->

</body>
</html>