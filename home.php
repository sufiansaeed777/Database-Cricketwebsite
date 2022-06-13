<?php 
include 'connections.php';
session_start();
?>
<?php include 'connections.php';?>
<!DOCTYPE html>
<html>
    <head>
        <title>ICC</title>
        <?php include 'bootstrap.php';?>
        <link rel="shortcut icon" href="images/favicon.png">
        <link rel="stylesheet" type="text/css" href="CSS/style.css">
    </head>
    <body style="background-image: url('background.png');">
        <?php include 'navbar.php';?>

        <div id="demo" class="carousel slide" data-ride="carousel">
            <ul class="carousel-indicators">
                <li data-target="#demo" data-slide-to="0" class="active"></li>
                <li data-target="#demo" data-slide-to="1"></li>
                <li data-target="#demo" data-slide-to="2"></li>
            </ul>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="images/sachin.jpg" alt="Sachin" width="1100" height="500">
                    <div class="carousel-caption">
                        <h3>Sachin Tendulkar</h3>
                        <p>Hundred Centuries</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="images/stadium.jpg" alt="Stadium" width="1100" height="500">
                    <div class="carousel-caption">
                        <h3>Gadaffi Stadium</h3>
                        <p>Lahore</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="images/eng1.jpg" alt="pakistan" width="1100" height="500">
                    <div class="carousel-caption">
                        <h3>Joe Root</h3>
                        <p>Joe Root rides a cut shot</p>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#demo" data-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </a>
            <a class="carousel-control-next" href="#demo" data-slide="next">
                <span class="carousel-control-next-icon"></span>
            </a>
        </div>

        <section class="my-5">
            <div class="py-5">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-12">
                            <div class="card bg-transparent">
                                <img class="card-img-top" src="images/whatiscricket.jpg" alt="Card image">
                                <div class="card-body">
                                    <h4 class="card-title">
                                        <b>What is Cricket?</b>
                                    </h4 >
                                    <p>
                                        Want to learn more about cricket? Watch our series of 10 videos to learn
                                        everything you need to know to understand this global game.
                                    </p>
                                    <a href="whatiscricket.php" class="btn btn-primary">Learn More</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-12">
                            <div class="card bg-transparent">
                                <img class="card-img-top" src="images/matchofficials.jpg" alt="Card image">
                                <div class="card-body">
                                    <h4 class="card-title">
                                        <b>Match Officials</b>
                                    </h4 >
                                    <p>
                                        Learn more about the referees, elite umpires and their coaches whose job it is
                                        to make the final, all important decisions.
                                    </p>
                                    <a href="umpires.php" class="btn btn-secondary">Learn More</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-12">
                            <div class="card bg-transparent">
                                <img class="card-img-top" src="images/ramiz2.jpg" alt="Ramiz Raja">
                                <div class="card-body">
                                    <h4 class="card-title">
                                        <b>Commentator</b>
                                    </h4 >
                                    <p>
                                        Rameez Hasan Raja  is a
                                        Pakistani cricket commentator, who
                                        represented Pakistan (sometimes as captain).
                                       
                                    </p>
                                    <a href="commentator.php" class="btn btn-primary">Learn More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </section>

        <section class="my-5">
            <div>
                <h3 class="text-center">
                    About Us
                </h3>
            </div>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-12">
                        <div style="position:relative;top:4px; background-color:transparent;">
                            <img src="images/icc_transparent.png" class="img-fluid aboutimg">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-12">
                        <p class="py-5">
                            The International Cricket Council is the world governing body of cricket. It was
                            founded as the Imperial Cricket Conference in 1909 by representatives from
                            Australia, England and South Africa. It was renamed as the International Cricket
                            Conference in 1965, and took up its current name in 1987
                            <br>
                            <a href="about.php">
                                More About Us
                            </a>
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <footer>
            <p class="p-3 bg-dark text-white">
                All Rights Reserved
            </p>
        </footer>

    </body>
</html>