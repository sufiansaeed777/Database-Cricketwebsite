<?php
include_once('connections.php');
$q1 = "SELECT * FROM `player` WHERE team_name= 'Pakistan'";
$q2 = "SELECT * FROM `player` WHERE team_name='Pakistan' AND  (player_type = 'Batsman' or player_type = 'All Rounder');";
$q3 = "SELECT *  FROM `player` WHERE team_name = 'Pakistan' AND (player_type = 'Bowler' or player_type = 'All Rounder');";
$q4 = "SELECT amb_name from ambassador where team_name = 'Pakistan';";
$q5 = "SELECT sponsor_name from sponsor where team_name = 'Pakistan';";
$q6 = "SELECT coach_name, coach_age from coach where team_name = 'Pakistan';";

$r1 = mysqli_query($con,$q1);
// Batsman
$r2 = mysqli_query($con,$q2);
// Bowler
$r3 = mysqli_query($con,$q3);
//Ambassador
$r4 = mysqli_query($con,$q4);
//Sponsor
$r5 = mysqli_query($con,$q5);
// Coach
$r6 = mysqli_query($con,$q6);

?>
<!DOCTYPE html>
<html>
    <head>
        <title>
            Pakistan
        </title>
        <style>
            .center {
                margin: auto;
                width: 10%;
                padding: 10px;
            }
            .header img {
                float: left;
                width: 150px;
                height: 100px;
                background: #555;
            }
            .header h2 {
                position: relative;
                top: 18px;
                left: 10px;
            }
        </style>
        <link rel="shortcut icon" href="images/favicon.png">
    </head >
    <body style="background-image: url('images/background.png')" ;=";">
        <?php include 'navbar.php';?>
        <h2 class="text-center">Pakistan Team</h2>
        <?php include 'playerstats.php';?>
    </body>
</html>