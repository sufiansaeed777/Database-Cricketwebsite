<?php
include_once('connections.php');
$q1 = "SELECT comm_name, country FROM commentator" ;
$r1 = mysqli_query($con,$q1);
?>

<!DOCTYPE html>
<html>
    <head></head>
    <body style="background-image: url('images/background.png')" ;=";">

        <link rel="stylesheet" type="text/css" href="CSS/style.css">

        <style>
            table {
                font-family: arial, sans-serif;
                border-collapse: collapse;
                width: 100%;
            }

            td,
            th {
                border: 1px solid #dddddd;
                text-align: left;
                padding: 8px;

            }
            .img-container {
                text-align: center;
            }
        </style>

        <?php include 'navbar.php';?>
        <h2 class="text-center">
            Commentator</h2>

        <table>
            <tr>
                <th>Name</th>
                <th>Country</th>
            </tr>
            <?php
        while($rows = mysqli_fetch_assoc($r1)){
  ?>
            <tr>
                <td><?php echo $rows['comm_name'];?></td>
                <td><?php echo $rows['country'];?></td>
            </tr>
            <?php
   } 
  ?>
        </table>

    </body>
</html>