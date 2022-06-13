<?php
include_once('connections.php');
$q1 = "SELECT `playerID`, `team_name`, `player_name`, `player_type`, `player_age`, 
       `player_nationality`, `joindate`, `experience`, `avg_score`, `economy`,
       `wickets_taken`, `matches_played`, `centuries`, `fifties` 
      FROM `player` WHERE team_name= 'England'";
$q2 = "SELECT `playerID`, `team_name`, `player_name`, `player_type`, `player_age`, 
`player_nationality`, `joindate`, `experience`, `avg_score`, `economy`,
`wickets_taken`, `matches_played`, `centuries`, `fifties` 
FROM `player` WHERE team_name='England' AND  (player_type = 'Batsman' or player_type = 'All Rounder');";

$q3 = "SELECT `playerID`, `team_name`, `player_name`, `player_type`, `player_age`, 
      `player_nationality`, `joindate`, `experience`, `avg_score`, `economy`,
      `wickets_taken`, `matches_played`, `centuries`, `fifties` 
      FROM `player` WHERE team_name = 'England' AND (player_type = 'Bowler' or player_type = 'All Rounder');";
$q4 = "SELECT amb_name from ambassador where team_name = 'England';";
$q5 = "SELECT sponsor_name from sponsor where team_name = 'England';";
$q6 = "SELECT coach_name, coach_age from coach where team_name = 'England';";

$r1 = mysqli_query($con,$q1);
$r2 = mysqli_query($con,$q2);
$r3 = mysqli_query($con,$q3);
$r4 = mysqli_query($con,$q4);
$r5 = mysqli_query($con,$q5);
$r6 = mysqli_query($con,$q6);

?>
<!DOCTYPE html>
<html>
    <head>
        <title>
            England
        </title>
    </head>
    <body style="background-image: url('images/background.png')" ;=";">
        <?php include 'navbar.php';?>
        <h2 class="text-center">England Team</h2>
        <?php include 'playerstats.php';?>
    </body>
</html>