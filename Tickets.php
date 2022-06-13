<?php
session_start();
include_once('connections.php');
$q1 = "select team1_name, team2_name,matchID, match_date, monthname(match_date), EXTRACT(day FROM match_date), stadium_name from scheduled_match";
$q2 = "SELECT monthname(match_date) FROM scheduled_match";
$r1 = mysqli_query($con,$q1);
$r2 = mysqli_query($con,$q2);
?>
<!DOCTYPE html>
<html>
    <head>
        <title>
            Tickets
        </title>
        <link rel="shortcut icon" href="images/favicon.png">
        <?php include 'bootstrap.php';?>
        <style>
            body {
                background-image: url("images/stadium.jpg");
                background-size: cover;
                background-attachment: fixed;
            }
        </style>
    </head>
    <body>
    <?php include 'navbar.php';?>

        <table >
            <section class="container">
                <h1>TICKET</h1>
            </section>
            <?php
        while($rows = mysqli_fetch_assoc($r1)){
            ?>
            <section class="container">
                <div class="row">
                    <article class="card fl-left">
                        <section class="date">
                            <time datetime="23th feb">
                                <span><?php echo $rows['EXTRACT(day FROM match_date)'];?></span><span><?php echo $rows['monthname(match_date)'];?></span>
                            </time>
                        </section>
                        <section class="card-cont">
                            <h5>
                                <b><?php echo $rows['team1_name'];?></b>
                            </h5>
                            <small>
                              <?php echo "vs";?>
                            </small>
                            <h5>
                                <b>
                                <?php echo $rows['team2_name'];?>
                                </b>
                            </h5>
                            <h6><?php echo "AT ", $rows['stadium_name'];?></h6>
                            <div class="even-date">
                                <i class="fa fa-calendar"></i>
                                <time>
                                    <span><?php echo $rows['match_date'];?></span>
                                    <span>
                                        <b>MATCH ID :
                                            <?php echo $rows['matchID'];?>
                                        </b>
                                    </span>
                                </time>
                            </div>
                            <div class="even-info">
                                <i class="fa fa-map-marker"></i>
                                <p >
                                    <b>TICKETS NOW Available</b>
                                </p>
                            </div>
                            <a href="checkout.php">BUY NOW
                                <?php
                                $var_value= $rows['matchID'];
                                $_SESSION['mid'] = $var_value;
                                ?>
                            </a>

                        </section>
                        <tr></tr>
                        <?php
        }
        ?>
                    </table>
                    <footer>
                        <p class="p-3 bg-dark text-white">
                            All Rights Reserved
                        </p>
                    </footer>
                </body>
            </html>