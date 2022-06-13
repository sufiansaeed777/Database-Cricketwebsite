
<?php
include_once('connections.php');
session_start();
mysqli_select_db($con , 'cricket');

//init variables
$mid_ = $_POST['mid'];
$username2 = $_SESSION['username'];

//REDUCING NUMBER OF TICKETS
$query2 = "UPDATE scheduled_match SET no_of_tickets = no_of_tickets - 1 WHERE matchID = '$mid_';";
mysqli_query($con, $query2);


// insert data into ticket
$query3="INSERT INTO ticket(username, matchID) 
        VALUES ('$username2', '$mid_');";
mysqli_query($con, $query3);

 header('location:index.php');
?>