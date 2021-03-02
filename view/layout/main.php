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
    <script src="src/index.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
    <script defer src="src/vueArray.js"></script> 

    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBBFolbq6F8N5IjAylsTEx3S9lygJeHS1s&callback=initMap&libraries=&v=weekly"></script>
    <title>MVC</title>
</head>
<body >

<header>
    <div class="d-flex  justify-content-center">
    <nav class="navbar navbar-expand-sm navbar-dark bg-danger nav">
        <a class="navbar-brand" href="#">TennisWorld</strong></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-link" href="/">Home</a>

                <?php if(\app\core\Session::isUserLoggedIn()) : ?>
                <a class="nav-link" href="/posts">Comments</a>
                <?php endif; ?>
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

<div>
 <!-- class="container"> -->
    {{content}}
</div>

<!-- <div id="map"></div> -->

<footer class="bg-danger d-flex justify-content-center text-light">
    <div class=" align-self-center" >
        &copy; 2021. Šarūnas Malinauskas, all rights reserved.
    </div>
</footer>


</body>
</html>